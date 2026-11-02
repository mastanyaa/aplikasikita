const puppeteer = require('puppeteer-core');
const fs = require('fs');
const path = require('path');

const HEADLESS_AUTH_URL = 'http://127.0.0.1/auth/headless-login';
const DASHBOARD_URL     = 'http://127.0.0.1/dashboard';
const TAGIHAN_URL       = 'http://127.0.0.1/tagihan';

(async () => {
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
            '--no-zygote',
            '--single-process',
            '--window-size=1680,1050'
        ]
    });

    const page = await browser.newPage();
    await page.setViewport({ width: 1680, height: 1050, deviceScaleFactor: 1.5 });

    try {
        // 1. Auto-login sebagai KAUNIT (ID 2) via endpoint internal
        console.log('[CAPTURE] Mengautentikasi sesi KAUNIT...');
        await page.goto(HEADLESS_AUTH_URL, { waitUntil: 'networkidle2', timeout: 30000 });

        // 2. Ambil Gambar 1: Dashboard Monitoring Kredit 6201
        console.log('[CAPTURE] Mengambil tampilan Dashboard 6201...');
        await page.goto(DASHBOARD_URL, { waitUntil: 'networkidle2', timeout: 30000 });
        await new Promise(r => setTimeout(r, 2000));

        // Sembunyikan navbar agar hanya tabel laporan yang tertangkap
        await page.evaluate(() => {
            const nav = document.querySelector('nav, header, .navbar, .topbar');
            if (nav) nav.style.display = 'none';
        });

        const dashboardElement = await page.$('.monitoring-container, .main-content, #app, body');
        if (dashboardElement) {
            await dashboardElement.screenshot({
                path: path.join(outputDir, 'dashboard.png')
            });
        }

        // 3. Ambil Gambar 2: Modal Progres Mantri SML
        console.log('[CAPTURE] Mengambil tampilan Progres Mantri SML...');
        await page.goto(TAGIHAN_URL, { waitUntil: 'networkidle2', timeout: 30000 });
        await new Promise(r => setTimeout(r, 2000));

        // Buka modal SML jika belum terbuka otomatis
        await page.evaluate(() => {
            const btnSml = Array.from(document.querySelectorAll('button, a, span')).find(el => 
                el.textContent.includes('PROGRES MANTRI') || el.textContent.includes('SML')
            );
            if (btnSml) btnSml.click();
        });

        await new Promise(r => setTimeout(r, 1500));

        const modalElement = await page.$('.modal-universal-frame, .modal-dialog, .modal-content, [id*="progres"], [id*="sml"]');
        if (modalElement) {
            await modalElement.screenshot({
                path: path.join(outputDir, 'mantri.png')
            });
        } else {
            await page.screenshot({
                path: path.join(outputDir, 'mantri.png')
            });
        }

        console.log('[CAPTURE] Sukses mengambil kedua tangkapan layar.');

    } catch (err) {
        console.error('[CAPTURE ERROR]:', err.message);
    } finally {
        await browser.close();
    }
})();
