// Log aktif
import puppeteer from 'puppeteer-core';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const HEADLESS_AUTH_URL = 'http://127.0.0.1/auth/headless-login';
const DASHBOARD_URL     = 'http://127.0.0.1/dashboard';
const TAGIHAN_URL       = 'http://127.0.0.1/tagihan';

(async () => {
    const sesi = (process.argv[2] || 'pagi').toLowerCase();
    const outputDir = path.resolve(__dirname, '../storage/app/reports');
    if (!fs.existsSync(outputDir)) {
        fs.mkdirSync(outputDir, { recursive: true });
    }

    const chromeCandidates = [
        path.resolve(__dirname, 'chrome/chrome-headless-shell-linux-arm64/chrome-headless-shell'),
        '/usr/bin/chromium-browser',
        '/usr/bin/chromium',
        '/usr/bin/google-chrome'
    ];
    const executablePath = chromeCandidates.find(p => fs.existsSync(p)) || '/usr/bin/chromium-browser';

    const browser = await puppeteer.launch({
        executablePath: executablePath,
        headless: 'new',
        args: [
            '--no-sandbox',
            '--disable-setuid-sandbox',
            '--disable-dev-shm-usage',
            '--disable-gpu',
            '--disable-software-rasterizer',
            '--disable-crash-reporter',
            '--disable-breakpad',
            '--disable-extensions',
            '--disable-component-update',
            '--disable-domain-reliability',
            '--disable-sync',
            '--disable-translate',
            '--disable-background-networking',
            '--disk-cache-size=1',
            '--media-cache-size=1',
            '--metrics-recording-only',
            '--mute-audio',
            '--no-first-run',
            '--no-default-browser-check',
            '--window-size=1680,1200',
            '--font-render-hinting=medium',
            '--enable-font-antialiasing',
            '--force-color-profile=srgb'
        ]
    });

    const page = await browser.newPage();
    // Gunakan viewport pas dengan scale 2.0 agar teks & angka tajam dan padat saat dikirim ke WA (1024px)
    await page.setViewport({ width: 1680, height: 1200, deviceScaleFactor: 2.0 });

    try {
        console.log('[CAPTURE] Mengautentikasi sesi KAUNIT...');
        await page.goto(HEADLESS_AUTH_URL, { waitUntil: 'domcontentloaded', timeout: 15000 });

        console.log(`[CAPTURE] Sesi ${sesi}: Mengambil tampilan Dashboard (.sheet-wrapper)...`);
        try {
            await page.goto(DASHBOARD_URL, { waitUntil: 'networkidle0', timeout: 20000 });
        } catch (navErr) {
            await page.goto(DASHBOARD_URL, { waitUntil: 'domcontentloaded', timeout: 15000 });
        }
        await new Promise(r => setTimeout(r, 2000));

        // Kunci lebar tabel tepat pada ukuran alaminya (1080px) agar kolom pas, rapat, rapi, dan tidak melar
        await page.addStyleTag({
            content: `
                .sheet-wrapper {
                    width: 1080px !important;
                    max-width: 1080px !important;
                    margin: 0 auto !important;
                    box-sizing: border-box !important;
                    padding: 6px 8px !important;
                    background: #ffffff !important;
                }
                .report-header {
                    display: flex !important;
                    justify-content: space-between !important;
                    align-items: center !important;
                    flex-wrap: nowrap !important;
                    margin-bottom: 4px !important;
                    border-bottom: 2px solid #0f2942 !important;
                    padding-bottom: 3px !important;
                }
                .header-left {
                    flex-shrink: 0 !important;
                }
                .header-title {
                    font-size: 13px !important;
                    font-weight: 900 !important;
                    white-space: nowrap !important;
                    color: #0f2942 !important;
                    letter-spacing: 0.2px !important;
                }
                .header-sub {
                    font-size: 7.8px !important;
                    white-space: nowrap !important;
                    color: #334155 !important;
                    margin-top: 1px !important;
                }
                .header-right {
                    flex-shrink: 0 !important;
                }
                .date-box {
                    font-size: 7.5px !important;
                    white-space: nowrap !important;
                    padding: 2px 6px !important;
                    background: #f8fafc !important;
                    border: 1px solid #cbd5e1 !important;
                }
                .sheet-table th, .sheet-table td {
                    -webkit-font-smoothing: antialiased !important;
                    font-size: 8.5px !important;
                    padding: 2.5px 3.5px !important;
                }
            `
        });
        await new Promise(r => setTimeout(r, 600));

        try {
            const tglLw321Text = await page.$eval('#hdr_tgl_lw321', el => el.innerText.trim());
            console.log(`[CAPTURE] Posisi tanggal data LW321 pada dashboard: ${tglLw321Text}`);
        } catch (e) {
            console.log('[CAPTURE] Catatan: Elemen #hdr_tgl_lw321 tidak terdeteksi langsung.');
        }

        const sheetWrapper = await page.$('.sheet-wrapper');
        if (sheetWrapper) {
            await sheetWrapper.screenshot({
                path: path.join(outputDir, 'dashboard.png'),
                type: 'png'
            });
            console.log('[CAPTURE] Dashboard (.sheet-wrapper) rapat & rapi berhasil difoto.');
        } else {
            await page.screenshot({
                path: path.join(outputDir, 'dashboard.png'),
                type: 'png'
            });
            console.log('[CAPTURE] Dashboard full page berhasil difoto.');
        }

        console.log(`[CAPTURE] Sesi ${sesi}: Mengambil tampilan Progres Mantri SML...`);
        await page.goto(TAGIHAN_URL, { waitUntil: 'domcontentloaded', timeout: 20000 });
        await new Promise(r => setTimeout(r, 2000));

        await page.evaluate((currentSesi) => {
            if (typeof openMantriProgressModal === 'function') {
                openMantriProgressModal('SML');
            }
            const closingSection = document.querySelector('.mantri-closing-section');
            if (closingSection) {
                if (currentSesi === 'pagi') {
                    closingSection.style.setProperty('display', 'none', 'important');
                } else {
                    closingSection.style.setProperty('display', 'block', 'important');
                }
            }
            const modalCard       = document.querySelector('#mantriProgressModal .modal-card');
            const modalBody       = document.querySelector('#mantriProgressModal .modal-body');
            const tablesContainer = document.getElementById('mantriProgressTablesContainer');
            const modalActions    = document.getElementById('mantriModalHeaderActions');
            if (modalActions) modalActions.style.setProperty('display', 'none', 'important');

            // Lebar pas 1180px agar kolom-kolom tabel pas, rapat, rapi, dan judul tile tidak terpotong
            if (modalCard) {
                modalCard.style.setProperty('width', '1280px', 'important');
                modalCard.style.setProperty('max-width', '1280px', 'important');
                modalCard.style.setProperty('height', 'auto', 'important');
                modalCard.style.setProperty('max-height', 'none', 'important');
                modalCard.style.setProperty('overflow', 'visible', 'important');
            }
            if (modalBody) {
                modalBody.style.setProperty('height', 'auto', 'important');
                modalBody.style.setProperty('max-height', 'none', 'important');
                modalBody.style.setProperty('overflow', 'visible', 'important');
            }
            if (tablesContainer) {
                tablesContainer.style.setProperty('height', 'auto', 'important');
                tablesContainer.style.setProperty('max-height', 'none', 'important');
                tablesContainer.style.setProperty('overflow', 'visible', 'important');
                tablesContainer.scrollTop = 0;
            }
            // Nonaktifkan sticky th agar tidak menumpuk ke bar judul TABEL: SML
            document.querySelectorAll('.progress-mantri-table th').forEach(th => {
                th.style.setProperty('position', 'static', 'important');
                th.style.setProperty('top', 'auto', 'important');
            });
        }, sesi);

        // Inject custom CSS untuk tata letak modal mantri yang rapat, rapi, dan judul tidak terpotong
        await page.addStyleTag({
            content: `
                .progress-mantri-table th {
                    position: static !important;
                    top: auto !important;
                }
                .mtd-tile-title {
                    font-size: 8.8px !important;
                    white-space: normal !important;
                    text-overflow: clip !important;
                    overflow: visible !important;
                }
                .mtd-target-card {
                    gap: 6px !important;
                    padding: 6px !important;
                }
                .progress-mantri-table {
                    width: 100% !important;
                }
                .progress-mantri-table td, .progress-mantri-table th {
                    font-size: 10px !important;
                    padding: 5px 6px !important;
                    -webkit-font-smoothing: antialiased !important;
                }
            `
        });

        await new Promise(r => setTimeout(r, 1500));

        const modalElement = await page.$('#mantriProgressModal .modal-card');
        if (modalElement) {
            await modalElement.screenshot({
                path: path.join(outputDir, 'mantri.png'),
                type: 'png'
            });
            console.log(`[CAPTURE] Sesi ${sesi}: Modal Mantri SML rapat & rapi berhasil difoto.`);
        } else {
            await page.screenshot({
                path: path.join(outputDir, 'mantri.png'),
                type: 'png'
            });
        }
        console.log('[CAPTURE] Sukses: Pengambilan gambar laporan selesai!');
    } catch (err) {
        console.error('[CAPTURE ERROR]:', err.message);
    } finally {
        if (typeof page !== 'undefined' && page) {
            await page.close().catch(() => {});
        }
        if (typeof browser !== 'undefined' && browser) {
            await browser.close().catch(() => {});
        }
        console.log('[CAPTURE] Memori headless browser berhasil dibebaskan penuh ke sistem.');
    }
})();
