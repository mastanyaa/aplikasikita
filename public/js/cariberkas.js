let selectedDebiturData = null;
let savedRolePengambil = null;
let currentTotalAntrian = 0;
let toastTimer = null;
let clickTimer = null;
let rawDataSedangDipinjam = [];
let rawDataAgunanGlobal = [];
let pendingConfirmCallback = null;
let timerSearchAgunan = null;
let abortControllerAgunan = null;

let activeTukarAgunanContext = null;
let currentGroupAgunanData = null;

// Variabel Antrean Permintaan Berkas & Polling Soft Alarm
let rawDataPermintaanBerkas = [];
let isProcessingBatchApproval = false;
let lastKnownPermintaanCount = window.TOTAL_PERMINTAAN_AWAL || 0;

// Variabel Tab Quick Filter Register Pinjam
let currentActiveQuickFilter = 'all';

window.DEBITUR_DATA = window.DEBITUR_DATA || [];

// 1. KONEKSI FUNGSI CETAK HEADER LAYOUT & MODAL
window.triggerManualPrintFromHeader = function () {
    eksekusiProsesCetak();
};
window.triggerCetakDirectlyFromModal = function () {
    closeModalPengambilan();
    eksekusiProsesCetak();
};
window.eksekusiProsesCetak = eksekusiProsesCetak;

// Pemeliharaan sesi berkala untuk mencegah CSRF kedaluwarsa
setInterval(() => {
    fetch(window.location.href, { 
        method: 'HEAD', 
        headers: { 'X-Requested-With': 'XMLHttpRequest' } 
    }).catch(() => {});
}, 10 * 60 * 1000);

// Sinkronisasi angka antrean ke header, tombol baris atas, dan tombol modal permintaan
function syncAntrianCount(count) {
    currentTotalAntrian = parseInt(count, 10) || 0;
    
    const elCntText = document.getElementById('cntAntrianText');
    if (elCntText) elCntText.textContent = currentTotalAntrian;

    const elHeaderCnt = document.getElementById('headerAntrianCount');
    if (elHeaderCnt) elHeaderCnt.textContent = currentTotalAntrian;

    const elModalCnt = document.getElementById('cntAntrianModalText');
    if (elModalCnt) elModalCnt.textContent = currentTotalAntrian;
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.custom-modal-overlay').forEach(modal => {
        modal.classList.add('d-none');
    });

    closeSubModalFormAgunan();

    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');

    const countEl = document.getElementById('headerAntrianCount') || document.getElementById('cntAntrianText');
    if (countEl) {
        syncAntrianCount(countEl.textContent.trim());
        if (currentTotalAntrian === 0) savedRolePengambil = null;
    }

    if (searchInput) {
        searchInput.focus();
        let searchTimer = null;

        if (searchForm) {
            searchForm.addEventListener('submit', (e) => e.preventDefault());
        }

        searchInput.addEventListener('input', function () {
            clearTimeout(searchTimer);
            const text = searchInput.value.trim();
            const isNumeric = /^\d+$/.test(text);

            if (text.length === 0) {
                searchTimer = setTimeout(() => { executeLiveSearch(''); }, 300);
                return;
            }

            if ((isNumeric && text.length < 5) || (!isNumeric && text.length < 3)) return;

            searchTimer = setTimeout(() => { executeLiveSearch(text); }, 400);
        });
    }

    const table = document.getElementById('debiturTable');
    if (table) {
        table.addEventListener('click', function (e) {
            const tr = e.target.closest('tbody tr[data-index]');
            if (tr) handleRowClick(tr);
        });

        table.addEventListener('dblclick', function (e) {
            const tr = e.target.closest('tbody tr[data-index]');
            if (tr) handleRowDblClick(tr);
        });
    }

    setTimeout(() => {
        const firstRow = document.querySelector('#debiturTable tbody tr[data-index]');
        if (firstRow) selectRow(firstRow);
    }, 100);

    // AUTO-POPUP & REALTIME POLLING PERMINTAAN BERKAS
    const roleCurrent = (window.USER_ROLE || '').toLowerCase();
    const canApprove = ['brimen', 'administrator', 'admin', 'cs', 'sol'].includes(roleCurrent);

    if (canApprove) {
        if (window.TOTAL_PERMINTAAN_AWAL && window.TOTAL_PERMINTAAN_AWAL > 0) {
            setTimeout(() => {
                bukaModalPermintaanBerkas();
            }, 450);
        }

        setInterval(() => {
            cekPollingPermintaanBerkas();
        }, 30000);
    }
});

function handleRowClick(trElement) {
    clearTimeout(clickTimer);
    clickTimer = setTimeout(() => {
        selectRow(trElement);
    }, 180);
}

function handleRowDblClick(trElement) {
    clearTimeout(clickTimer);
    selectRow(trElement);

    if (!selectedDebiturData) return;

    const isLupus = (selectedDebiturData.status || '').toUpperCase().trim() === 'LUNAS PUTUS' || 
                    selectedDebiturData.sumber_tabel === 'LUNAS_PUTUS';

    if (isLupus) {
        const labelLupus = selectedDebiturData.label_berkas || '-';
        showCustomAlert(
            'ARSIP LUNAS PUTUS',
            `Fasilitas pinjaman atas nama <b>${escapeHtml(selectedDebiturData.nama_debitur)}</b> telah <b>LUNAS PUTUS</b>.<br><br>Dokumen fisik tersimpan di rak arsip dengan label: <b>${escapeHtml(labelLupus)}</b>.<br>Dokumen agunan fisik telah diserahkan kepada nasabah.`,
            'TUTUP'
        );
        return;
    }

    const posBerkas = (selectedDebiturData.posisi_berkas || 'LEMARI').toUpperCase().trim();
    if (posBerkas === 'LEMARI' || posBerkas === '' || posBerkas === '-') {
        openModalPengambilan();
    } else {
        openModalStatusPinjam();
    }
}

function setTextSafe(id, value) {
    const el = document.getElementById(id);
    if (el) el.textContent = (value !== null && value !== undefined && value !== '') ? value : '-';
}

function selectRow(trElement) {
    if (!trElement) return;

    const allRows = document.querySelectorAll('#debiturTable tbody tr');
    allRows.forEach(row => row.classList.remove('selected-row'));
    trElement.classList.add('selected-row');

    let data = null;
    const idx = trElement.getAttribute('data-index');

    if (idx !== null && window.DEBITUR_DATA && window.DEBITUR_DATA[idx]) {
        data = window.DEBITUR_DATA[idx];
    }

    if (!data) return;
    selectedDebiturData = data;

    const formIdInput = document.getElementById('formId');
    if (formIdInput) formIdInput.value = data.id || '';

    const isLupus = (data.status || '').toUpperCase().trim() === 'LUNAS PUTUS' || data.sumber_tabel === 'LUNAS_PUTUS';

    setTextSafe('dispTagStatus', isLupus ? 'ARSIP LUNAS PUTUS' : 'DEBITUR TERPILIH');
    setTextSafe('titleLokasiFisik', isLupus ? 'LOKASI GUDANG ARSIP' : 'LOKASI FISIK BERKAS & AGUNAN');
    setTextSafe('lblTitleBerkas', isLupus ? 'LABEL LUPUS' : 'LABEL BERKAS');
    setTextSafe('lblTitleAgunan', isLupus ? 'STATUS AGUNAN' : 'LABEL AGUNAN');

    setTextSafe('dispNama', data.nama_debitur);
    setTextSafe('dispRekening', data.nomor_rekening);
    setTextSafe('dispCif', `CIF: ${data.cif || '-'}`);

    const plafondFormatted = data.plafond ? 'Rp ' + Number(data.plafond).toLocaleString('id-ID') : '-';
    setTextSafe('dispPlafond', plafondFormatted);

    setTextSafe('dispTglReal', formatDate(data.tgl_real));
    setTextSafe('dispTglJt', formatDate(data.tgl_jt));
    setTextSafe('dispNamaAo', data.pn_pengelola);
    setTextSafe('dispSegmen', data.segmen);
    setTextSafe('dispAlamat', data.alamat);

    const posBerkas = (data.posisi_berkas || 'LEMARI').toUpperCase().trim();
    const posAgunan = (data.posisi_agunan || 'LEMARI').toUpperCase().trim();

    if (isLupus) {
        setTextSafe('dispLabelBerkas', data.label_berkas || '-');
        setTextSafe('dispLabelAgunan', data.posisi_agunan || 'DISERAHKAN');
    } else {
        setTextSafe('dispLabelBerkas', (posBerkas === 'LEMARI') ? '-' : (data.label_berkas || '-'));
        setTextSafe('dispLabelAgunan', (posAgunan === 'LEMARI') ? '-' : (data.label_agunan || '-'));
    }

    const elPosBerkas = document.getElementById('dispPosisiBerkas');
    const elPosAgunan = document.getElementById('dispPosisiAgunan');
    if (elPosBerkas) { elPosBerkas.textContent = posBerkas; elPosBerkas.className = getPillClass(posBerkas); }
    if (elPosAgunan) { elPosAgunan.textContent = posAgunan; elPosAgunan.className = getPillClass(posAgunan); }

    renderAgunanList(data.agunans);
}

function renderAgunanList(agunans) {
    const container = document.getElementById('dispContainerAgunan');
    if (!container) return;

    if (!agunans || !Array.isArray(agunans) || agunans.length === 0) {
        container.innerHTML = '<span class="text-muted-cyber">Tidak ada data agunan terdaftar</span>';
        return;
    }

    let html = '';
    agunans.forEach((ag, idx) => {
        const noUrut = ag.nomor_urut || (idx + 1);
        const jenis = (ag.jenis_agunan || '').toUpperCase().trim();
        const nomor = ag.nomor_agunan || '-';
        const atasNama = ag.atas_nama || '-';
        const luasNopol = ag.luas_nopol || '-';
        const letak = ag.letak_agunan || '-';

        if (jenis.includes('BPKB')) {
            html += `
            <div class="agunan-item-box">
                ${noUrut}. BPKB NO. ${escapeHtml(nomor)} ATAS NAMA ${escapeHtml(atasNama)} NOPOL ${escapeHtml(luasNopol)}
            </div>`;
        } else {
            html += `
            <div class="agunan-item-box">
                ${noUrut}. ${escapeHtml(jenis || 'AGUNAN')} NO. ${escapeHtml(nomor)} ATAS NAMA ${escapeHtml(atasNama)} LUAS ${escapeHtml(luasNopol)} LETAK ${escapeHtml(letak)}
            </div>`;
        }
    });
    container.innerHTML = html;
}

function openModalPengambilan() {
    if (!selectedDebiturData) return;

    document.querySelectorAll('.section-error-highlight').forEach(el => el.classList.remove('section-error-highlight'));

    setTextSafe('modalTargetNama', selectedDebiturData.nama_debitur);
    setTextSafe('modalTargetRek', selectedDebiturData.nomor_rekening);
    setTextSafe('modalTargetCif', `CIF: ${selectedDebiturData.cif || '-'}`);

    const plafondFormatted = selectedDebiturData.plafond ? 'Rp ' + Number(selectedDebiturData.plafond).toLocaleString('id-ID') : '-';
    setTextSafe('modalTargetPlafond', plafondFormatted);
    setTextSafe('modalTargetTglReal', formatDate(selectedDebiturData.tgl_real));
    setTextSafe('modalTargetTglJt', formatDate(selectedDebiturData.tgl_jt));
    setTextSafe('modalTargetAo', selectedDebiturData.pn_pengelola);
    setTextSafe('modalTargetSegmen', selectedDebiturData.segmen);
    setTextSafe('modalTargetAlamat', selectedDebiturData.alamat);

    setTextSafe('modalLabelBerkas', selectedDebiturData.label_berkas);
    setTextSafe('modalLabelAgunan', selectedDebiturData.label_agunan);
    setTextSafe('modalPosBerkas', selectedDebiturData.posisi_berkas || 'LEMARI');
    setTextSafe('modalPosAgunan', selectedDebiturData.posisi_agunan || 'LEMARI');

    const secLokasi = document.getElementById('modalLokasiSection');
    if (secLokasi) secLokasi.classList.add('d-none');

    const boxAgWrap = document.getElementById('boxLokasiAgunanWrapper');
    const boxBkWrap = document.getElementById('boxLokasiBerkasWrapper');
    if (boxAgWrap) boxAgWrap.classList.remove('d-none');
    if (boxBkWrap) boxBkWrap.style.gridColumn = '';

    const secLupus = document.getElementById('modalLupusSection');
    if (secLupus) secLupus.classList.add('d-none');

    const containerRoleAlasan = document.getElementById('containerInputRoleAlasan');
    if (containerRoleAlasan) containerRoleAlasan.classList.remove('d-none');

    const grpAmbil = document.getElementById('groupTombolAmbil');
    const grpPasca = document.getElementById('groupTombolPascaAmbil');
    if (grpAmbil) grpAmbil.classList.remove('d-none');
    if (grpPasca) grpPasca.classList.add('d-none');

    setTextSafe('modalAmbilHeaderTitle', 'OTORISASI PENGAMBILAN DOKUMEN');
    setTextSafe('modalAmbilSubTitle', 'Konfirmasi mutasi dokumen fisik dari lemari penyimpanan');

    const inputRole = document.getElementById('inputPengambilHidden');
    const allRoleChips = document.querySelectorAll('#roleChipsContainer .role-chip');
    allRoleChips.forEach(c => c.classList.remove('chip-active'));

    if (savedRolePengambil && currentTotalAntrian > 0) {
        if (inputRole) inputRole.value = savedRolePengambil;
        const matchedChip = Array.from(allRoleChips).find(c => c.getAttribute('data-role') === savedRolePengambil);
        if (matchedChip) matchedChip.classList.add('chip-active');
    } else {
        if (inputRole) inputRole.value = '';
    }

    const inputAlasan = document.getElementById('inputAlasanAmbil');
    if (inputAlasan) {
        inputAlasan.value = '';
        inputAlasan.placeholder = 'Pilih opsi tombol di atas atau ketik alasan mutasi fisik di sini...';
    }
    const allAlasanChips = document.querySelectorAll('#alasanChipsContainer .alasan-chip');
    allAlasanChips.forEach(c => c.classList.remove('chip-active'));

    const posBerkas = (selectedDebiturData.posisi_berkas || 'LEMARI').toUpperCase().trim();
    const posAgunan = (selectedDebiturData.posisi_agunan || 'LEMARI').toUpperCase().trim();

    const btnBerkasSaja = document.getElementById('btnBerkasSaja');
    const btnBerkasAgunan = document.getElementById('btnBerkasAgunan');

    if (btnBerkasSaja) btnBerkasSaja.disabled = (posBerkas !== 'LEMARI');

    if (btnBerkasAgunan) {
        const punyaAgunan = posAgunan !== 'TANPA AGUNAN' && posAgunan !== '-' && posAgunan !== '';
        btnBerkasAgunan.disabled = !(posBerkas === 'LEMARI' && punyaAgunan && posAgunan === 'LEMARI');
    }

    updateActionButtonsVisual();

    const modal = document.getElementById('modalPengambilanV3');
    if (modal) modal.classList.remove('d-none');
}

function selectRole(roleCode, buttonElement) {
    const inputHidden = document.getElementById('inputPengambilHidden');
    if (inputHidden) inputHidden.value = roleCode;

    const allChips = document.querySelectorAll('#roleChipsContainer .role-chip');
    allChips.forEach(c => c.classList.remove('chip-active'));
    buttonElement.classList.add('chip-active');

    const secRole = buttonElement.closest('.modal-section-card');
    if (secRole) secRole.classList.remove('section-error-highlight');

    updateActionButtonsVisual();
}

/**
 * Pemilihan 6 Tombol Alasan Warna Sejajar
 */
function selectAlasan(val, btnElement) {
    if (val === 'TUKAR AGUNAN') {
        const role = (window.USER_ROLE || '').toLowerCase().trim();

        // 1. BLOKIR ROLE KAUNIT & MANTRI
        if (role === 'kaunit' || role === 'mantri') {
            showCustomAlert(
                'AKSES DITOLAK',
                'Role Anda (<b>' + role.toUpperCase() + '</b>) tidak memiliki izin untuk melakukan transaksi tukar agunan fisik dokumen.',
                'SAYA MENGERTI'
            );
            return;
        }

        if (!selectedDebiturData) return;
        closeModalPengambilan();
        bukaModalTukarAgunanMandiri(selectedDebiturData);
        return;
    }

    if (val === 'LUNAS PUTUS') {
        const namaDeb = selectedDebiturData ? selectedDebiturData.nama_debitur : '-';
        const rekDeb  = selectedDebiturData ? selectedDebiturData.nomor_rekening : '-';

        const confirmHtml = `
            <div style="font-weight: 850; color: #b91c1c; margin-bottom: 6px; font-size: 13px;">
                ⚠️ PERINGATAN: OPSI LUNAS PUTUS DIPILIH!
            </div>
            <div style="font-size: 11.5px; color: #334155; line-height: 1.5; margin-bottom: 8px;">
                Anda memilih alasan <b>LUNAS PUTUS</b> untuk:<br>
                Debitur: <b>${escapeHtml(namaDeb)}</b> (Rek: ${escapeHtml(rekDeb)})
            </div>
            <div style="background: #fff1f2; border: 1.5px solid #fecdd3; border-radius: 7px; padding: 10px; font-size: 11px; color: #9f1239; text-align: left; line-height: 1.45;">
                • Berkas akan masuk ke antrean arsip <b>LUNAS PUTUS (LUPUS)</b>.<br>
                • Struk penarikan lemari &amp; <b>Struk Label LUPUS</b> otomatis dicetak terpisah.<br>
                • Pastikan nasabah benar-benar melakukan pelunasan total dan bukan sekadar pinjaman sementara.
            </div>
        `;

        showCustomConfirm('PERINGATAN LUNAS PUTUS', confirmHtml, function () {
            applySelectAlasan(val, btnElement);
        }, 'YA, SAYA YAKIN LUNAS', 'BATAL');
        return;
    }

    applySelectAlasan(val, btnElement);
}

function applySelectAlasan(val, btnElement) {
    const input = document.getElementById('inputAlasanAmbil');
    const allChips = document.querySelectorAll('#alasanChipsContainer .alasan-chip');
    allChips.forEach(c => c.classList.remove('chip-active'));
    btnElement.classList.add('chip-active');

    if (val === 'LAIN-LAIN') {
        if (input) {
            input.value = '';
            input.focus();
            input.placeholder = 'Ketik alasan mutasi dokumen fisik di sini...';
        }
    } else {
        if (input) input.value = val;
    }

    const secAlasan = btnElement.closest('.modal-section-card');
    if (secAlasan) secAlasan.classList.remove('section-error-highlight');

    updateActionButtonsVisual();
}

function handleManualAlasanInput(text) {
    const allChips = document.querySelectorAll('#alasanChipsContainer .alasan-chip');
    let matched = false;
    allChips.forEach(c => {
        if (c.textContent.trim().toUpperCase() === text.trim().toUpperCase()) {
            c.classList.add('chip-active');
            matched = true;
        } else {
            c.classList.remove('chip-active');
        }
    });

    if (!matched && text.trim() !== '') {
        const lainChip = Array.from(allChips).find(c => c.textContent.includes('LAIN-LAIN'));
        if (lainChip) lainChip.classList.add('chip-active');
    }

    if (text.trim() !== '') {
        const secAlasan = document.getElementById('alasanChipsContainer')?.closest('.modal-section-card');
        if (secAlasan) secAlasan.classList.remove('section-error-highlight');
    }

    updateActionButtonsVisual();
}

function updateActionButtonsVisual() {
    const role = (document.getElementById('inputPengambilHidden')?.value || '').trim();
    const alasan = (document.getElementById('inputAlasanAmbil')?.value || '').trim();
    const isReady = role !== '' && alasan !== '';

    const btn1 = document.getElementById('btnBerkasSaja');
    const btn2 = document.getElementById('btnBerkasAgunan');

    if (btn1 && !btn1.disabled) {
        if (isReady) btn1.classList.add('ready-to-submit');
        else btn1.classList.remove('ready-to-submit');
    }

    if (btn2 && !btn2.disabled) {
        if (isReady) btn2.classList.add('ready-to-submit');
        else btn2.classList.remove('ready-to-submit');
    }
}

function closeModalPengambilan() {
    const modal = document.getElementById('modalPengambilanV3');
    if (modal) modal.classList.add('d-none');
}

function openModalStatusPinjam() {
    if (!selectedDebiturData) return;

    setTextSafe('pinjamTargetNama', selectedDebiturData.nama_debitur);
    setTextSafe('pinjamTargetRek', selectedDebiturData.nomor_rekening);

    const posBerkas = (selectedDebiturData.posisi_berkas || '-').toUpperCase().trim();
    const posAgunan = (selectedDebiturData.posisi_agunan || '-').toUpperCase().trim();

    setTextSafe('pinjamLabelBerkas', selectedDebiturData.label_berkas || '-');
    setTextSafe('pinjamLabelAgunan', selectedDebiturData.label_agunan || '-');

    const elPillBerkas = document.getElementById('pinjamPillBerkas');
    const elPillAgunan = document.getElementById('pinjamPillAgunan');

    if (elPillBerkas) { elPillBerkas.textContent = posBerkas; elPillBerkas.className = getPillClass(posBerkas); }
    if (elPillAgunan) { elPillAgunan.textContent = posAgunan; elPillAgunan.className = getPillClass(posAgunan); }

    const pengambil = selectedDebiturData.pinjam_pengambil || selectedDebiturData.posisi_berkas || '-';
    setTextSafe('pinjamDispPengambil', pengambil);

    const tgl = formatDateTime(selectedDebiturData.pinjam_tanggal);
    setTextSafe('pinjamDispTanggal', tgl);

    setTextSafe('pinjamDispAlasan', selectedDebiturData.pinjam_alasan || 'REALISASI BARU');
    
    const tipeAksiRaw = selectedDebiturData.pinjam_tipe_aksi || 'berkas_saja';
    const tipeText = tipeAksiRaw === 'berkas_agunan' ? 'BERKAS & AGUNAN' : 'BERKAS SAJA';
    setTextSafe('pinjamDispTipe', tipeText);

    setTextSafe('pinjamDispAo', selectedDebiturData.pn_pengelola || '-');

    const elLama = document.getElementById('pinjamDispLama');
    if (elLama) {
        elLama.innerHTML = formatLamaPinjamSLA({
            tanggal_pinjam: selectedDebiturData.pinjam_tanggal,
            alasan_ambil: selectedDebiturData.pinjam_alasan,
            is_lunas_putus: false
        });
    }

    const modal = document.getElementById('modalStatusPinjamV3');
    if (modal) modal.classList.remove('d-none');
}

function closeModalStatusPinjam() {
    const modal = document.getElementById('modalStatusPinjamV3');
    if (modal) modal.classList.add('d-none');
}

function submitFormCyber(tipeAksi) {
    const inputPengambil = document.getElementById('inputPengambilHidden');
    const inputAlasan = document.getElementById('inputAlasanAmbil');

    const valRole = (inputPengambil?.value || '').trim();
    const valAlasan = (inputAlasan?.value || '').trim();

    const secRole = document.getElementById('roleChipsContainer')?.closest('.modal-section-card');
    const secAlasan = document.getElementById('alasanChipsContainer')?.closest('.modal-section-card');

    if (secRole) secRole.classList.remove('section-error-highlight');
    if (secAlasan) secAlasan.classList.remove('section-error-highlight');

    if (!valRole && !valAlasan) {
        if (secRole) secRole.classList.add('section-error-highlight');
        if (secAlasan) secAlasan.classList.add('section-error-highlight');

        const errorHtml = `
            <div style="margin-bottom: 6px; font-weight: 700; color: #991b1b;">
                Otorisasi tidak dapat diproses:
            </div>
            <div style="display: flex; flex-direction: column; gap: 4px; color: #b91c1c; font-size: 11.5px; margin-bottom: 8px;">
                <span>• Role Pengambil Berkas: <b>Belum Dipilih</b></span>
                <span>• Alasan Pengambilan: <b>Belum Dipilih / Diisi</b></span>
            </div>
            <div style="font-size: 11px; color: #64748b;">
                Silakan pilih role pengambil dan tentukan alasan mutasi fisik terlebih dahulu.
            </div>
        `;
        showCustomAlert('SYARAT OTORISASI BELUM LENGKAP', errorHtml, 'SAYA MENGERTI & AKAN MELENGKAPI');
        return;
    }

    if (!valRole) {
        if (secRole) secRole.classList.add('section-error-highlight');
        const errorHtml = `
            <div style="margin-bottom: 6px; font-weight: 700; color: #991b1b;">Role Pengambil Berkas belum ditentukan!</div>
            <div style="font-size: 11.5px; color: #4b5563; line-height: 1.5;">Silakan pilih salah satu role pengambil fisik berkas: <b>CS, MANTRI / AO, SOL, KAUNIT,</b> atau <b>FC</b> pada kotak nomor 1 di atas.</div>
        `;
        showCustomAlert('ROLE PENGAMBIL BELUM DIPILIH', errorHtml, 'SAYA MENGERTI & AKAN MEMILIH');
        return;
    }

    if (!valAlasan) {
        if (secAlasan) secAlasan.classList.add('section-error-highlight');
        const errorHtml = `
            <div style="margin-bottom: 6px; font-weight: 700; color: #991b1b;">Alasan Pengambilan Berkas belum ditentukan!</div>
            <div style="font-size: 11.5px; color: #4b5563; line-height: 1.5;">Silakan pilih salah satu opsi alasan atau ketik alasan secara manual pada kolom nomor 2.</div>
        `;
        showCustomAlert('ALASAN PENGAMBILAN BELUM DIPILIH', errorHtml, 'SAYA MENGERTI & AKAN MEMILIH');
        return;
    }

    const isLunas = valAlasan.toUpperCase().includes('LUNAS');
    const posAgDeb = (selectedDebiturData?.posisi_agunan || '').toUpperCase().trim();
    const labelAgDeb = (selectedDebiturData?.label_agunan || '').trim();
    const punyaAgunanFisik = labelAgDeb !== '' && labelAgDeb !== '-' && posAgDeb !== 'TANPA AGUNAN';

    if (tipeAksi === 'berkas_saja' && isLunas && punyaAgunanFisik) {
        const debNama = selectedDebiturData ? selectedDebiturData.nama_debitur : '-';
        const crossWarnHtml = `
            <div style="font-weight: 850; color: #b91c1c; margin-bottom: 6px; font-size: 13px;">
                ⚠️ KONFIRMASI PENARIKAN TANPA AGUNAN!
            </div>
            <div style="font-size: 11.5px; color: #334155; line-height: 1.5; margin-bottom: 8px;">
                Debitur <b>"${escapeHtml(debNama)}"</b> tercatat memiliki dokumen jaminan pada kotak: <b>${escapeHtml(labelAgDeb)}</b>.<br><br>
                Pelunasan fasilitas kredit umumnya mewajibkan seluruh dokumen agunan asli diambil untuk diserahkan ke nasabah.
            </div>
            <div style="background: #fff1f2; border: 1.5px solid #fecdd3; border-radius: 7px; padding: 10px; font-size: 11px; color: #9f1239; text-align: left; line-height: 1.45;">
                Apakah Anda yakin <b>HANYA</b> mengambil map berkas pinjaman saja tanpa menyertakan dokumen agunan fisik?
            </div>
        `;

        showCustomConfirm('PERIKSA KEMBALI DOKUMEN AGUNAN', crossWarnHtml, function () {
            eksekusiSubmitFormCyber(tipeAksi, valRole, valAlasan);
        }, 'YA, TETAP AMBIL BERKAS SAJA', 'BATAL');
        return;
    }

    eksekusiSubmitFormCyber(tipeAksi, valRole, valAlasan);
}

function eksekusiSubmitFormCyber(tipeAksi, valRole, valAlasan) {
    const form = document.getElementById('formTrxCyber');
    const formTipeAksi = document.getElementById('formTipeAksi');

    formTipeAksi.value = tipeAksi;
    const formData = new FormData(form);
    formData.set('pengambil', valRole);
    formData.set('alasan_ambil', valAlasan);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
        }
    })
        .then(async (res) => {
            if (res.status === 419) {
                showCustomAlert(
                    'SESI KEAMANAN TELAH BERAKHIR',
                    'Sesi halaman Anda telah kedaluwarsa karena tidak ada aktivitas. Halaman akan otomatis dimuat ulang untuk memperbarui token.',
                    'REFRESH SEKARANG'
                );
                setTimeout(() => { window.location.reload(); }, 2000);
                throw new Error('CSRF_EXPIRED');
            }
            return res.json();
        })
        .then(data => {
            if (data.status === 'success') {
                savedRolePengambil = valRole;

                if (data.posisi_berkas && selectedDebiturData) selectedDebiturData.posisi_berkas = data.posisi_berkas;
                if (data.posisi_agunan && selectedDebiturData) selectedDebiturData.posisi_agunan = data.posisi_agunan;
                if (data.pinjam_pengambil && selectedDebiturData) selectedDebiturData.pinjam_pengambil = data.pinjam_pengambil;
                if (data.pinjam_tanggal && selectedDebiturData) selectedDebiturData.pinjam_tanggal = data.pinjam_tanggal;
                if (data.pinjam_alasan && selectedDebiturData) selectedDebiturData.pinjam_alasan = data.pinjam_alasan;
                if (data.pinjam_tipe_aksi && selectedDebiturData) selectedDebiturData.pinjam_tipe_aksi = data.pinjam_tipe_aksi;

                const selectedRow = document.querySelector('#debiturTable tbody tr.selected-row');
                if (selectedRow) selectRow(selectedRow);

                if (data.total_antrian !== undefined) {
                    syncAntrianCount(data.total_antrian);
                    if (data.total_antrian === 0) savedRolePengambil = null;
                }

                const secLokasi = document.getElementById('modalLokasiSection');
                if (secLokasi) secLokasi.classList.remove('d-none');

                const boxAgWrap = document.getElementById('boxLokasiAgunanWrapper');
                const boxBkWrap = document.getElementById('boxLokasiBerkasWrapper');

                if (tipeAksi === 'berkas_saja') {
                    if (boxAgWrap) boxAgWrap.classList.add('d-none');
                    if (boxBkWrap) boxBkWrap.style.gridColumn = 'span 2';
                } else {
                    if (boxAgWrap) boxAgWrap.classList.remove('d-none');
                    if (boxBkWrap) boxBkWrap.style.gridColumn = '';
                }

                const secLupus = document.getElementById('modalLupusSection');
                const valLupus = document.getElementById('modalLabelLupusVal');

                if (data.is_lunas_putus && data.label_lunas_putus) {
                    if (secLupus) secLupus.classList.remove('d-none');
                    if (valLupus) valLupus.textContent = data.label_lunas_putus;
                    setTextSafe('modalAmbilHeaderTitle', 'LUNAS PUTUS: STRUK TERCETAK!');
                    setTextSafe('modalAmbilSubTitle', `Label Baru: ${data.label_lunas_putus} • 2 Struk Terpisah Otomatis Tercetak`);
                } else {
                    if (secLupus) secLupus.classList.add('d-none');
                    setTextSafe('modalAmbilHeaderTitle', 'PENGAMBILAN BERHASIL DICATAT!');
                    setTextSafe('modalAmbilSubTitle', `Status: ${data.posisi_berkas} • Alasan: ${valAlasan} • Antrean: ${currentTotalAntrian}/10`);
                }

                const posBerkasEl = document.getElementById('modalPosBerkas');
                if (posBerkasEl) {
                    posBerkasEl.textContent = data.posisi_berkas || 'BERKAS';
                    posBerkasEl.className = getPillClass(data.posisi_berkas);
                }

                if (tipeAksi === 'berkas_agunan') {
                    const posAgunanEl = document.getElementById('modalPosAgunan');
                    if (posAgunanEl) {
                        posAgunanEl.textContent = 'BERKAS';
                        posAgunanEl.className = getPillClass('BERKAS');
                    }
                }

                const containerRoleAlasan = document.getElementById('containerInputRoleAlasan');
                if (containerRoleAlasan) containerRoleAlasan.classList.add('d-none');

                const grpAmbil = document.getElementById('groupTombolAmbil');
                const grpPasca = document.getElementById('groupTombolPascaAmbil');
                if (grpAmbil) grpAmbil.classList.add('d-none');
                if (grpPasca) grpPasca.classList.remove('d-none');
            } else {
                showCustomAlert('GAGAL MEMPROSES TRANSAKSI', data.message || 'Terjadi kesalahan sistem.', 'TUTUP');
            }
        })
        .catch(err => {
            if (err.message === 'CSRF_EXPIRED') return;
            showCustomAlert('GANGGUAN JARINGAN', 'Gagal memproses transaksi ke server.', 'TUTUP');
        });
}

function ambilBerkasLagi() { 
    closeModalPengambilan(); 
}

// EKSEKUSI CETAK STRUK THERMAL KE PRINTER USB
function eksekusiProsesCetak() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    const updateUrl = document.getElementById('formTrxCyber')?.action || '/cariberkas/update';

    fetch(updateUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ tipe_aksi: 'cetak_manual' })
    })
        .then(async (res) => {
            if (res.status === 419) {
                showCustomAlert('SESI KEDALUWARSA', 'Sesi token habis. Halaman akan dimuat ulang.', 'REFRESH');
                setTimeout(() => { window.location.reload(); }, 1500);
                throw new Error('CSRF_EXPIRED');
            }
            const data = await res.json();
            if (!res.ok) throw new Error(data.message || 'Gagal memproses respons server.');
            return data;
        })
        .then(data => {
            if (data.status === 'success') {
                savedRolePengambil = null;
                syncAntrianCount(0);
                showCyberToast(data.message || 'Perintah cetak berhasil dikirim ke printer!', 'Pencetakan Berhasil!', 'print');
            } else {
                showCustomAlert('PERINGATAN CETAK', data.message || 'Gagal memproses cetak.', 'TUTUP');
            }
        })
        .catch(err => {
            if (err.message === 'CSRF_EXPIRED') return;
            showCustomAlert('GAGAL KONEKSI PRINTER', err.message || 'Koneksi ke printer gagal.', 'TUTUP');
        });
}

function triggerCetakLangsungDariPermintaan() {
    if (currentTotalAntrian <= 0) {
        showCustomAlert('ANTREAN CETAK KOSONG', 'Tidak ada berkas di antrean cetak saat ini. Silakan setujui berkas terlebih dahulu.', 'TUTUP');
        return;
    }
    eksekusiProsesCetak();
}

function bukaModalSedangDipinjam() {
    const modal = document.getElementById('modalSedangDipinjamV3');
    if (!modal) return;
    modal.classList.remove('d-none');
    const filterInput = document.getElementById('regFilterInput');
    if (filterInput) filterInput.value = '';
    currentActiveQuickFilter = 'all';

    const allTabs = document.querySelectorAll('.reg-quick-filter-tabs .tab-filter-btn');
    allTabs.forEach(t => {
        if (t.getAttribute('data-filter') === 'all') t.classList.add('active');
        else t.classList.remove('active');
    });

    muatDataSedangDipinjam();
}

function tutupModalSedangDipinjam() {
    const modal = document.getElementById('modalSedangDipinjamV3');
    if (modal) modal.classList.add('d-none');
}

function muatDataSedangDipinjam() {
    const tbody = document.getElementById('regTableBody');
    const totalEl = document.getElementById('regTotalText');
    if (!tbody) return;

    const role = (window.USER_ROLE || '').toLowerCase().trim();
    const canShowAksi = ['brimen', 'administrator', 'admin', 'cs', 'sol'].includes(role) || (document.getElementById('thColAksi') !== null);
    const initialColspan = canShowAksi ? 11 : 10;

    tbody.innerHTML = `<tr><td colspan="${initialColspan}" style="text-align: center; color: #64748b; padding: 25px; font-weight: 600;">Memuat data...</td></tr>`;

    fetch('/cariberkas/sedang-dipinjam', {
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
        .then(async (res) => {
            const json = await res.json();
            if (!res.ok || json.status !== 'success') {
                throw new Error(json.message || `Server status ${res.status}`);
            }
            return json;
        })
        .then(res => {
            rawDataSedangDipinjam = Array.isArray(res.data) ? res.data : [];
            updateQuickFilterCounters(rawDataSedangDipinjam);
            filterDataPinjam();
        })
        .catch(err => {
            if (totalEl) totalEl.innerText = 'Total: 0 Berkas';
            tbody.innerHTML = `<tr><td colspan="${initialColspan}" style="text-align: center; color: #dc2626; padding: 20px; font-weight: 700;">Gagal memuat data (${escapeHtml(err.message)}).</td></tr>`;
        });
}

function hitungHariKerja(startDateStr) {
    if (!startDateStr || startDateStr === '-') return 0;
    const start = new Date(startDateStr.replace(/-/g, '/'));
    if (isNaN(start.getTime())) return 0;

    const end = new Date();
    if (start > end) return 0;

    let count = 0;
    let cur = new Date(start.getTime());
    cur.setHours(0, 0, 0, 0);
    const endDay = new Date(end.getTime());
    endDay.setHours(0, 0, 0, 0);

    while (cur < endDay) {
        cur.setDate(cur.getDate() + 1);
        const dayOfWeek = cur.getDay();
        if (dayOfWeek !== 0 && dayOfWeek !== 6) {
            count++;
        }
    }
    return count;
}

function formatLamaPinjamSLA(item) {
    const alasan = (item.alasan_ambil || '').toUpperCase().trim();
    const isLunas = item.is_lunas_putus === true || alasan.includes('LUNAS');

    if (isLunas) {
        return `
            <span style="background: #f3e8ff; color: #7c3aed; border: 1px solid #d8b4fe; padding: 3px 8px; border-radius: 4px; font-size: 10px; font-weight: 850; white-space: nowrap;">
                MENUNGGU VALIDASI ARSIP
            </span>
        `;
    }

    const hariKerja = hitungHariKerja(item.tanggal_pinjam);
    const teks = `${hariKerja} HARI KERJA`;

    if (hariKerja > 5) {
        return `
            <span class="badge-sla-overdue" style="background: #fee2e2; color: #b91c1c; border: 1.5px solid #f87171; padding: 3px 8px; border-radius: 4px; font-size: 10px; font-weight: 900; letter-spacing: 0.3px; white-space: nowrap;">
                🚨 OVERDUE (${teks})
            </span>
        `;
    }

    return `
        <span style="background: #fef3c7; color: #b45309; border: 1px solid #fde68a; padding: 3px 8px; border-radius: 4px; font-size: 10px; font-weight: 800; white-space: nowrap;">
            ${teks}
        </span>
    `;
}

function updateQuickFilterCounters(data) {
    const allCount = data.length;
    let regulerCount = 0;
    let lupusCount = 0;
    let overdueCount = 0;

    data.forEach(item => {
        const alasan = (item.alasan_ambil || '').toUpperCase().trim();
        const isLunas = item.is_lunas_putus === true || alasan.includes('LUNAS');

        if (isLunas) {
            lupusCount++;
        } else {
            regulerCount++;
            const hariKerja = hitungHariKerja(item.tanggal_pinjam);
            if (hariKerja > 5) overdueCount++;
        }
    });

    setTextSafe('cntFilterAll', allCount);
    setTextSafe('cntFilterReguler', regulerCount);
    setTextSafe('cntFilterLupus', lupusCount);
    setTextSafe('cntFilterOverdue', overdueCount);
}

function applyQuickFilterPinjam(filterType, btnElement) {
    currentActiveQuickFilter = filterType;

    const allTabs = document.querySelectorAll('.reg-quick-filter-tabs .tab-filter-btn');
    allTabs.forEach(t => t.classList.remove('active'));
    if (btnElement) btnElement.classList.add('active');

    filterDataPinjam();
}

function filterDataPinjam(textKeyword) {
    const input = document.getElementById('regFilterInput');
    const q = (textKeyword !== undefined ? textKeyword : (input?.value || '')).toLowerCase().trim();

    let filtered = rawDataSedangDipinjam;

    if (currentActiveQuickFilter === 'reguler') {
        filtered = filtered.filter(item => {
            const alasan = (item.alasan_ambil || '').toUpperCase();
            return item.is_lunas_putus !== true && !alasan.includes('LUNAS');
        });
    } else if (currentActiveQuickFilter === 'lupus') {
        filtered = filtered.filter(item => {
            const alasan = (item.alasan_ambil || '').toUpperCase();
            return item.is_lunas_putus === true || alasan.includes('LUNAS');
        });
    } else if (currentActiveQuickFilter === 'overdue') {
        filtered = filtered.filter(item => {
            const alasan = (item.alasan_ambil || '').toUpperCase();
            const isLunas = item.is_lunas_putus === true || alasan.includes('LUNAS');
            return !isLunas && hitungHariKerja(item.tanggal_pinjam) > 5;
        });
    }

    if (q) {
        filtered = filtered.filter(item => {
            const deb = (item.nama_debitur || '').toLowerCase();
            const rek = (item.nomor_rekening || '').toLowerCase();
            const cif = (item.cif || '').toLowerCase();
            const pengambil = (item.pengambil || '').toLowerCase();
            const lb = (item.label_berkas || '').toLowerCase();
            const la = (item.label_agunan || '').toLowerCase();
            const al = (item.alasan_ambil || '').toLowerCase();
            const lupus = (item.label_lunas_putus || '').toLowerCase();
            return deb.includes(q) || rek.includes(q) || cif.includes(q) || pengambil.includes(q) || lb.includes(q) || la.includes(q) || al.includes(q) || lupus.includes(q);
        });
    }

    renderTablePinjam(filtered);
}

function renderTablePinjam(data) {
    const tbody = document.getElementById('regTableBody');
    const totalEl = document.getElementById('regTotalText');
    if (!tbody) return;

    const role = (window.USER_ROLE || '').toLowerCase().trim();
    const isBrimen = (role === 'brimen');
    const isBrimenOrAdmin = ['brimen', 'administrator', 'admin'].includes(role);
    const isCs = (role === 'cs');
    const isSol = (role === 'sol');

    const canShowAksi = isBrimenOrAdmin || isCs || isSol || (document.getElementById('thColAksi') !== null);
    const totalColspan = canShowAksi ? 11 : 10;

    if (totalEl) totalEl.innerText = `Total: ${data.length} Berkas`;

    if (!data || data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="${totalColspan}" style="text-align: center; color: #64748b; padding: 25px; font-weight: 600;">Tidak ada berkas yang sesuai dengan kriteria filter saat ini.</td></tr>`;
        return;
    }

    let rows = '';
    data.forEach((item, idx) => {
        let aksiHtml = '';
        const pengambil = (item.pengambil || '').toUpperCase().trim();
        const alasan    = (item.alasan_ambil || '').toUpperCase().trim();
        const isLunasPutus = item.is_lunas_putus === true || alasan.includes('LUNAS');
        const hariKerja = hitungHariKerja(item.tanggal_pinjam);
        const isOverdue = !isLunasPutus && hariKerja > 5;

        if (canShowAksi) {
            if (isLunasPutus) {
                if (isBrimen) {
                    aksiHtml = `
                        <td class="col-aksi-cell" style="white-space: nowrap; text-align: center;">
                            <div style="font-size: 9px; font-weight: 850; color: #7c3aed; margin-bottom: 2px;">
                                ${escapeHtml(item.label_lunas_putus || 'LUPUS')}
                            </div>
                            <div style="display: flex; gap: 4px; justify-content: center;">
                                <button type="button" 
                                        class="btn-action-lupus-validasi" 
                                        onclick="konfirmasiValidasiLupus(${item.id}, ${item.lunas_putus_id || 'null'}, '${escapeHtml(item.nama_debitur)}', '${escapeHtml(item.label_lunas_putus || '-')}')"
                                        title="Validasi fisik berkas lunas dan kosongkan slot lemari aktif">
                                    ✓ Validasi
                                </button>
                                <button type="button" 
                                        class="btn-action-lupus-batal" 
                                        onclick="konfirmasiBatalLupus(${item.id}, ${item.lunas_putus_id || 'null'}, '${escapeHtml(item.nama_debitur)}')"
                                        title="Batalkan pelunasan dan kembalikan posisi ke lemari">
                                    ✕ Batal
                                </button>
                            </div>
                        </td>
                    `;
                } else {
                    aksiHtml = `
                        <td class="col-aksi-cell" style="text-align: center; white-space: nowrap;">
                            <span style="background: #f3e8ff; color: #7c3aed; border: 1px solid #d8b4fe; padding: 2px 7px; border-radius: 4px; font-size: 9.5px; font-weight: 800; display: inline-block;">
                                Menunggu Validasi BRIMEN
                            </span>
                            <div style="font-size: 9px; color: #6b21a8; font-family: monospace; font-weight: 750; margin-top: 2px;">
                                ${escapeHtml(item.label_lunas_putus || '-')}
                            </div>
                        </td>
                    `;
                }
            } else {
                const isDiambilOlehUserIni = (isCs && pengambil === 'CS') || (isSol && pengambil === 'SOL');
                const bukanRealisasi       = !alasan.includes('REALISASI');
                const isTukarAgunan        = alasan.includes('TUKAR AGUNAN');
                const isSementara          = alasan.includes('SEMENTARA');
                const isAgunanSudahUpdate  = (item.is_agunan_updated === true);

                const berhakAksi = isBrimenOrAdmin || (isDiambilOlehUserIni && bukanRealisasi && (isTukarAgunan || isSementara));

                if (berhakAksi) {
                    const badgeUpdate = (isTukarAgunan && isAgunanSudahUpdate) 
                        ? `<div style="font-size: 9px; font-weight: 800; color: #047857; margin-bottom: 2px;">✓ Agunan Diperbarui</div>` 
                        : '';

                    aksiHtml = `
                        <td class="col-aksi-cell" style="white-space: nowrap; text-align: center;">
                            ${badgeUpdate}
                            <button type="button" class="btn-action-kembali" onclick="prosesKembalikanBerkas(${item.id}, '${escapeHtml(item.nama_debitur)}')">
                                Kembalikan
                            </button>
                        </td>
                    `;
                } else {
                    aksiHtml = `
                        <td class="col-aksi-cell" style="text-align: center; color: #94a3b8; font-size: 11px; font-style: italic;">
                            -
                        </td>
                    `;
                }
            }
        }

        const rowOverdueClass = isOverdue ? 'style="background: #fff8f8;"' : '';

        rows += `
            <tr id="row-pinjam-${item.id}" ${rowOverdueClass}>
                <td style="text-align: center; color: #64748b; font-weight: 700;">${idx + 1}</td>
                <td style="text-align: center;"><span class="badge-cif-cyber">${escapeHtml(item.cif)}</span></td>
                <td><span class="text-rek-cyber">${escapeHtml(item.nomor_rekening)}</span></td>
                <td style="font-weight: 750; color: #0f172a;">${escapeHtml(item.nama_debitur)}</td>
                <td style="text-align: center;"><strong style="color: #b45309; font-size:11.5px; background: #fffbeb; border: 1px solid #fde68a; padding: 2px 7px; border-radius: 4px;">${escapeHtml(item.pengambil)}</strong></td>
                <td style="text-align: center;"><span style="font-family: monospace; font-weight:750; color:#2563eb;">${escapeHtml(item.label_berkas)}</span></td>
                <td style="text-align: center;"><span style="font-family: monospace; font-weight:750; color:#2563eb;">${escapeHtml(item.label_agunan || '-')}</span></td>
                <td style="text-align: center; font-size: 11px; color:#475569;">${formatDateTime(item.tanggal_pinjam)}</td>
                <td style="text-align: center;">${formatLamaPinjamSLA(item)}</td>
                <td style="text-align: center;">
                    <span style="background: #f8fafc; border: 1px solid #cbd5e1; color: #334155; padding: 3px 8px; border-radius: 5px; font-size: 10.5px; font-weight: 750; white-space: nowrap;">
                        ${escapeHtml(item.alasan_ambil || 'REALISASI BARU')}
                    </span>
                </td>
                ${aksiHtml}
            </tr>
        `;
    });
    tbody.innerHTML = rows;
}

// =============================================================================
// MODUL AKSI VALIDASI & PEMBATALAN LUNAS PUTUS (KHUSUS ROLE BRIMEN)
// =============================================================================

function konfirmasiValidasiLupus(registerId, lupusId, namaDebitur, labelLupus) {
    const msg = `
        Apakah Anda yakin ingin <b>memvalidasi berkas lunas putus</b> milik debitur <b>"${escapeHtml(namaDebitur)}"</b>?<br><br>
        • Berkas resmi diarsipkan ke label: <b>${escapeHtml(labelLupus)}</b><br>
        • Slot koordinat lemari aktif pada master debitur akan <b>dikosongkan (NULL)</b>.<br>
        • Rincian fisik jaminan pada kotak agunan akan <b>dibersihkan</b>.
    `;

    showCustomConfirm('VALIDASI LUNAS PUTUS', msg, function () {
        eksekusiValidasiLupus(registerId, lupusId);
    }, 'YA, VALIDASI & KOSONGKAN SLOT', 'BATAL');
}

function eksekusiValidasiLupus(registerId, lupusId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    const routeUrl = window.ROUTE_VALIDASI_LUPUS || '/cariberkas/lunas-putus/validasi';

    fetch(routeUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ register_id: registerId, lunas_putus_id: lupusId })
    })
    .then(async (res) => {
        if (res.status === 419) {
            showCustomAlert('SESI KEDALUWARSA', 'Sesi Anda telah berakhir. Halaman akan dimuat ulang.', 'REFRESH');
            setTimeout(() => { window.location.reload(); }, 1500);
            throw new Error('CSRF_EXPIRED');
        }
        const data = await res.json();
        if (!res.ok) throw new Error(data.message || 'Gagal memvalidasi lunas putus.');
        return data;
    })
    .then(data => {
        if (data.status === 'success') {
            showCyberToast(data.message, 'Validasi Lunas Putus Berhasil!', 'check');
            muatDataSedangDipinjam();
            const searchInput = document.getElementById('searchInput');
            if (searchInput) executeLiveSearch(searchInput.value.trim());
        } else {
            showCustomAlert('GAGAL VALIDASI', data.message || 'Gagal memvalidasi berkas.', 'TUTUP');
        }
    })
    .catch(err => {
        if (err.message === 'CSRF_EXPIRED') return;
        showCustomAlert('GANGGUAN SERVER', err.message || 'Terjadi gangguan koneksi server.', 'TUTUP');
    });
}

function konfirmasiBatalLupus(registerId, lupusId, namaDebitur) {
    const msg = `
        Batalkan transaksi lunas putus milik debitur <b>"${escapeHtml(namaDebitur)}"</b>?<br><br>
        Status berkas dan agunan fisik akan dikembalikan ke posisi <b>LEMARI</b> aktif tanpa mengosongkan data.
    `;

    showCustomConfirm('BATALKAN LUNAS PUTUS', msg, function () {
        eksekusiBatalLupus(registerId, lupusId);
    }, 'YA, BATALKAN & KEMBALIKAN', 'BATAL');
}

function eksekusiBatalLupus(registerId, lupusId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    const routeUrl = window.ROUTE_BATAL_LUPUS || '/cariberkas/lunas-putus/batal';

    fetch(routeUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ register_id: registerId, lunas_putus_id: lupusId })
    })
    .then(async (res) => {
        if (res.status === 419) {
            showCustomAlert('SESI KEDALUWARSA', 'Sesi Anda telah berakhir. Halaman akan dimuat ulang.', 'REFRESH');
            setTimeout(() => { window.location.reload(); }, 1500);
            throw new Error('CSRF_EXPIRED');
        }
        const data = await res.json();
        if (!res.ok) throw new Error(data.message || 'Gagal membatalkan lunas putus.');
        return data;
    })
    .then(data => {
        if (data.status === 'success') {
            showCyberToast(data.message, 'Pembatalan Berhasil', 'return');
            muatDataSedangDipinjam();
            const searchInput = document.getElementById('searchInput');
            if (searchInput) executeLiveSearch(searchInput.value.trim());
        } else {
            showCustomAlert('GAGAL PEMBATALAN', data.message || 'Gagal membatalkan lunas putus.', 'TUTUP');
        }
    })
    .catch(err => {
        if (err.message === 'CSRF_EXPIRED') return;
        showCustomAlert('GANGGUAN SERVER', err.message || 'Terjadi gangguan koneksi server.', 'TUTUP');
    });
}

// =============================================================================
// MODUL KHUSUS TRANSAKSI TUKAR AGUNAN MANDIRI (DILENGKAPI POST-SAVE FLOW)
// =============================================================================

function bukaModalTukarAgunanMandiri(debData) {
    if (!debData) return;

    const role = (window.USER_ROLE || '').toLowerCase().trim();

    if (role === 'kaunit' || role === 'mantri') {
        showCustomAlert('AKSES DITOLAK', 'Role Anda tidak memiliki izin transaksi tukar agunan.', 'TUTUP');
        return;
    }

    document.getElementById('taDebiturId').value = debData.id || '';
    document.getElementById('taLabelAgunan').value = debData.label_agunan || '';
    document.getElementById('taDetailIdLama').value = '';
    document.getElementById('taCreatedRegisterId').value = '';

    setTextSafe('taDispNama', debData.nama_debitur);
    setTextSafe('taDispRekening', debData.nomor_rekening);
    setTextSafe('taDispCif', `CIF: ${debData.cif || '-'}`);
    setTextSafe('taDispLabelBerkas', debData.label_berkas || '-');
    setTextSafe('taDispLabelAgunan', debData.label_agunan || '-');

    // Reset Judul Modal ke Semula
    setTextSafe('taModalTitle', 'TRANSAKSI TUKAR AGUNAN NASABAH');
    setTextSafe('taModalSubTitle', 'Verifikasi pertukaran fisik dokumen agunan, perbarui database jaminan, dan cetak struk mutasi');

    // Sembunyikan Banner Pascasimpan & Reset Footer ke Mode Normal
    const banner = document.getElementById('taPostSaveBanner');
    if (banner) banner.classList.add('d-none');

    const footerNormal = document.getElementById('taFooterNormalGroup');
    const footerPost = document.getElementById('taFooterPostSaveGroup');
    if (footerNormal) footerNormal.classList.remove('d-none');
    if (footerPost) footerPost.classList.add('d-none');

    // Buka Kunci Seluruh Elemen Form
    document.querySelectorAll('#formTukarAgunanMandiri input, #formTukarAgunanMandiri button.jenis-chip-btn, #formTukarAgunanMandiri button.role-chip')
        .forEach(el => {
            el.disabled = false;
        });

    // Reset Tombol Ambil Dokumen & Rak Fisik
    const rakWrap = document.getElementById('taRakIndicatorsWrapper');
    const btnAmbil = document.getElementById('btnTaAmbilDokumen');
    if (rakWrap) rakWrap.classList.add('d-none');
    if (btnAmbil) {
        btnAmbil.classList.remove('d-none');
        btnAmbil.disabled = false;
        btnAmbil.innerHTML = `
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.3">
                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                <rect x="6" y="14" width="12" height="8"></rect>
            </svg>
            <span>AMBIL DOKUMEN (CETAK STRUK)</span>
        `;
    }

    // Role Selection
    const boxAdmin = document.getElementById('taRoleContainerAdminBrimen');
    const boxAuto = document.getElementById('taRoleContainerAutoUser');
    const badgeRole = document.getElementById('taBadgeAutoRole');
    const inputRole = document.getElementById('taRolePengambil');

    if (role === 'cs') {
        inputRole.value = 'CS';
        boxAdmin.classList.add('d-none');
        boxAuto.classList.remove('d-none');
        badgeRole.textContent = 'CUSTOMER SERVICE';
        badgeRole.style.background = '#dbeafe';
        badgeRole.style.color = '#1d4ed8';
        badgeRole.style.border = '1.5px solid #93c5fd';
    } else if (role === 'sol') {
        inputRole.value = 'SOL';
        boxAdmin.classList.add('d-none');
        boxAuto.classList.remove('d-none');
        badgeRole.textContent = 'SUPERVISOR OPERASIONAL LAYANAN (SOL)';
        badgeRole.style.background = '#fef3c7';
        badgeRole.style.color = '#b45309';
        badgeRole.style.border = '1.5px solid #fde68a';
    } else {
        inputRole.value = 'CS';
        boxAuto.classList.add('d-none');
        boxAdmin.classList.remove('d-none');
        const roleChips = document.querySelectorAll('#taRoleChipsContainer .role-chip');
        roleChips.forEach(c => c.classList.remove('chip-active'));
        const defaultChip = Array.from(roleChips).find(c => c.getAttribute('data-role') === 'CS');
        if (defaultChip) defaultChip.classList.add('chip-active');
    }

    // Reset Form Input Agunan Baru
    document.getElementById('taInputNomorBaru').value = '';
    document.getElementById('taInputNamaBaru').value = '';
    document.getElementById('taInputLuasBaru').value = '';
    document.getElementById('taInputLetakBaru').value = '';
    document.getElementById('taChkWithHt').checked = false;
    toggleHtFieldsBaru(false);
    document.getElementById('taInputNomorHt').value = '';
    document.getElementById('taInputNilaiHt').value = '';

    // Bersihkan Ghost Text Autocomplete
    const ghostNama = document.getElementById('ghostNamaBaru');
    const ghostLetak = document.getElementById('ghostLetakBaru');
    if (ghostNama) ghostNama.innerHTML = '';
    if (ghostLetak) ghostLetak.innerHTML = '';

    // Isi Datalist Browser Native
    populateDatalist('dlListAtasNama', window.LIST_ATAS_NAMA || []);
    populateDatalist('dlListLetakAgunan', window.LIST_LETAK_AGUNAN || []);

    // Default Pilih Jenis SHM
    pilihJenisAgunanBaru('SHM', document.querySelector('#taContainerJenisChips .jenis-chip-btn'));

    // Muat daftar agunan lama
    muatAgunanLamaKeModalTukar(debData.label_agunan);

    cekKelayakanSimpanTukarAgunan();

    const modal = document.getElementById('modalTukarAgunanMandiri');
    if (modal) modal.classList.remove('d-none');
}

function populateDatalist(elementId, items) {
    const dl = document.getElementById(elementId);
    if (!dl || !Array.isArray(items)) return;
    dl.innerHTML = '';
    items.slice(0, 80).forEach(text => {
        const opt = document.createElement('option');
        opt.value = text;
        dl.appendChild(opt);
    });
}

// 1. PEMILIHAN JENIS AGUNAN (KONDISIONAL KOLOM BPKB VS NON-BPKB)
function pilihJenisAgunanBaru(jenis, btn) {
    const allChips = document.querySelectorAll('#taContainerJenisChips .jenis-chip-btn');
    allChips.forEach(c => c.classList.remove('chip-active'));
    if (btn) btn.classList.add('chip-active');

    const inputHidden = document.getElementById('taJenisAgunanBaru');
    const lbl = document.getElementById('taLblJenisTerpilih');
    const boxManual = document.getElementById('taBoxJenisManual');

    if (jenis === '__MANUAL__') {
        if (boxManual) boxManual.style.display = 'block';
        const txtManual = document.getElementById('taInputJenisManual')?.value || '';
        if (inputHidden) inputHidden.value = txtManual;
        if (lbl) lbl.textContent = txtManual ? `[${txtManual}]` : '[KUSTOM]';
    } else {
        if (boxManual) boxManual.style.display = 'none';
        if (inputHidden) inputHidden.value = jenis;
        if (lbl) lbl.textContent = `[${jenis}]`;
    }

    // KONDISIONAL BPKB: SEMBUNYIKAN LETAK AGUNAN, LEBARKAN NOPOL
    const wrapLetak = document.getElementById('taWrapLetakAgunan');
    const wrapLuas  = document.getElementById('taWrapLuasNopol');
    const lblLuas   = document.getElementById('taLblLuasNopol');
    const inpLuas   = document.getElementById('taInputLuasBaru');

    if (jenis.toUpperCase().includes('BPKB')) {
        if (wrapLetak) wrapLetak.style.display = 'none';
        if (wrapLuas) wrapLuas.style.gridColumn = 'span 2';
        if (lblLuas) lblLuas.textContent = 'NOMOR POLISI (NOPOL) *';
        if (inpLuas) inpLuas.placeholder = 'Ketik Nopol (contoh: 3680BM atau DA6415MAR)...';
    } else {
        if (wrapLetak) wrapLetak.style.display = 'block';
        if (wrapLuas) wrapLuas.style.gridColumn = '';
        if (lblLuas) lblLuas.textContent = 'LUAS TANAH (M2)';
        if (inpLuas) inpLuas.placeholder = 'Ketik angka luas (contoh: 125)...';
    }

    cekKelayakanSimpanTukarAgunan();
}

function syncManualJenisAgunanBaru(val) {
    const inputHidden = document.getElementById('taJenisAgunanBaru');
    const lbl = document.getElementById('taLblJenisTerpilih');
    if (inputHidden) inputHidden.value = val.toUpperCase();
    if (lbl) lbl.textContent = val ? `[${val.toUpperCase()}]` : '[KUSTOM]';
    cekKelayakanSimpanTukarAgunan();
}

// 2. OTOMATISASI FORMAT LUAS TANAH & NOMOR POLISI BPKB (DINAMIS MURNI DARI DB SETTINGS)
function handleLuasNopolBlurBaru(input) {
    let val = (input.value || '').trim();
    if (!val) return;

    const jenis = (document.getElementById('taJenisAgunanBaru')?.value || '').toUpperCase();
    const platRegional = (window.PLAT_REGIONAL || '').toUpperCase().trim();

    if (jenis.includes('BPKB')) {
        input.value = formatNopolBpkb(val, platRegional);
    } else {
        input.value = formatLuasTanah(val);
    }

    cekKelayakanSimpanTukarAgunan();
}

function formatLuasTanah(rawVal) {
    let s = rawVal.trim().toUpperCase();
    if (!s) return '';

    s = s.replace(/\s*M2$/i, '').replace(/\s*M$/i, '').trim();

    if (/^\d+(?:[.,]\d+)?$/.test(s)) {
        return s + ' M2';
    }

    return s;
}

function formatNopolBpkb(rawVal, platRegional = '') {
    let s = rawVal.replace(/[^a-zA-Z0-9]/g, '').toUpperCase();
    if (!s) return '';

    // Ambil kode regional murni dari database settings tanpa hardcode
    const regional = (platRegional !== undefined ? platRegional : (window.PLAT_REGIONAL || '')).toUpperCase().trim();

    // 1. Jika user mengetik angka langsung di depan (contoh: 3680BM)
    const matchAngkaDepan = s.match(/^(\d{1,4})([A-Z]{0,3})$/);
    if (matchAngkaDepan && regional) {
        const nomor = matchAngkaDepan[1];
        const seri = matchAngkaDepan[2] || '';
        return `${regional} ${nomor} ${seri}`;
    }

    // 2. Jika user mengetik kode regional sendiri tanpa spasi (contoh: P3680BM atau DK3680BM)
    if (regional && s.startsWith(regional)) {
        const sisa = s.substring(regional.length);
        const matchSisa = sisa.match(/^(\d{1,4})([A-Z]{0,3})$/);
        if (matchSisa) {
            const nomor = matchSisa[1];
            const seri = matchSisa[2] || '';
            return `${regional} ${nomor} ${seri}`;
        }
    }

    // 3. Plat luar kota / daerah lain lengkap (contoh: DA6415MAR -> DA 6415 MAR)
    const matchLuar = s.match(/^([A-Z]{1,2})(\d{1,4})([A-Z]{1,3})$/);
    if (matchLuar) {
        return `${matchLuar[1]} ${matchLuar[2]} ${matchLuar[3]}`;
    }

    // 4. Plat dengan huruf depan dan angka saja (contoh: DA6415 -> DA 6415)
    const matchLuarNoSeri = s.match(/^([A-Z]{1,2})(\d{1,4})$/);
    if (matchLuarNoSeri) {
        return `${matchLuarNoSeri[1]} ${matchLuarNoSeri[2]}`;
    }

    return s;
}

// 3. FITUR AUTO-RECOMMEND DENGAN TOMBOL TAB (GHOST AUTOCOMPLETE)
function handleGhostAutocomplete(input, ghostId, hintId, dataList) {
    const val = input.value;
    const ghost = document.getElementById(ghostId);
    const hint = document.getElementById(hintId);
    if (!ghost) return;

    if (!val || val.trim().length < 1 || !Array.isArray(dataList)) {
        ghost.innerHTML = '';
        if (hint) hint.style.display = 'none';
        cekKelayakanSimpanTukarAgunan();
        return;
    }

    const valUpper = val.toUpperCase();
    const match = dataList.find(item => item && item.toUpperCase().startsWith(valUpper));

    if (match && match.toUpperCase() !== valUpper) {
        const prefixTyped = val;
        const remainder = match.substring(val.length);

        ghost.innerHTML = `<span style="visibility: hidden;">${escapeHtml(prefixTyped)}</span><span style="color: #94a3b8; font-weight: 700;">${escapeHtml(remainder)}</span>`;
        if (hint) hint.style.display = 'inline';
    } else {
        ghost.innerHTML = '';
        if (hint) hint.style.display = 'none';
    }

    cekKelayakanSimpanTukarAgunan();
}

function handleGhostKeyDown(e, input, ghostId, hintId, dataList) {
    if (e.key === 'Tab') {
        const ghost = document.getElementById(ghostId);
        const hint = document.getElementById(hintId);

        if (ghost && ghost.textContent && ghost.textContent.trim() !== '') {
            const valUpper = input.value.toUpperCase();
            const match = dataList.find(item => item && item.toUpperCase().startsWith(valUpper));

            if (match) {
                e.preventDefault();
                input.value = match.toUpperCase();
                ghost.innerHTML = '';
                if (hint) hint.style.display = 'none';
                input.dispatchEvent(new Event('input'));
                cekKelayakanSimpanTukarAgunan();
            }
        }
    }
}

// 4. EKSEKUSI CETAK STRUK AMBIL FISIK & BUKA BLOKIR RAK LEMARI
function eksekusiCetakAmbilFisik() {
    const btn = document.getElementById('btnTaAmbilDokumen');
    const debiturId = document.getElementById('taDebiturId')?.value;
    const rolePengambil = document.getElementById('taRolePengambil')?.value || 'CS';
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    const routeUrl = window.ROUTE_CETAK_AMBIL_TUKAR || '/cariberkas/tukar-agunan/cetak-ambil';

    if (!debiturId) return;

    btn.disabled = true;
    btn.innerHTML = `<span>Sedang Mengirim ke Printer...</span>`;

    fetch(routeUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            debitur_id: debiturId,
            role_pengambil: rolePengambil
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            showCyberToast('Struk instruksi penarikan berkas telah dicetak!', 'Cetak Berhasil', 'print');

            btn.classList.add('d-none');
            const rakWrap = document.getElementById('taRakIndicatorsWrapper');
            if (rakWrap) {
                rakWrap.classList.remove('d-none');
                setTextSafe('taDispLabelBerkas', data.label_berkas || '-');
                setTextSafe('taDispLabelAgunan', data.label_agunan || '-');
            }
        } else {
            btn.disabled = false;
            btn.innerHTML = `<span>Gagal Cetak, Coba Lagi</span>`;
            showCustomAlert('GAGAL CETAK', data.message || 'Gagal mengirim instruksi cetak ke printer.', 'TUTUP');
        }
    })
    .catch(() => {
        btn.disabled = false;
        btn.innerHTML = `<span>Gagal Koneksi, Coba Lagi</span>`;
        showCustomAlert('GANGGUAN PRINTER', 'Terjadi gangguan koneksi ke printer thermal USB.', 'TUTUP');
    });
}

function muatAgunanLamaKeModalTukar(labelAgunan) {
    const container = document.getElementById('taContainerAgunanLama');
    if (!container) return;

    if (!labelAgunan || labelAgunan === '-' || labelAgunan.trim() === '') {
        container.innerHTML = `<div style="text-align: center; color: #dc2626; padding: 25px; font-size: 11.5px; font-weight: 700;">Debitur ini tidak memiliki label agunan terdaftar di lemari.</div>`;
        return;
    }

    container.innerHTML = `<div style="text-align: center; color: #64748b; padding: 25px; font-size: 11px;">Mengambil rincian dokumen agunan fisik...</div>`;

    fetch(`/cariberkas/cari-agunan?q=${encodeURIComponent(labelAgunan)}`, {
        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(res => {
        if (res.status === 'success' && res.data && res.data.length > 0) {
            const group = res.data[0];
            const items = group.items || [];

            if (items.length === 0) {
                container.innerHTML = `<div style="text-align: center; color: #94a3b8; padding: 25px; font-size: 11px;">Tidak ada dokumen jaminan aktif pada kotak ${labelAgunan}.</div>`;
                return;
            }

            let html = '';
            items.forEach((item, idx) => {
                const checked = idx === 0 ? 'checked' : '';
                if (idx === 0) document.getElementById('taDetailIdLama').value = item.detail_id;

                html += `
                    <label class="ta-agunan-item-card ${idx === 0 ? 'active' : ''}" onclick="pilihRadioAgunanLama(${item.detail_id}, this)">
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <input type="radio" name="taRadioAgunanLama" value="${item.detail_id}" ${checked} style="margin-top: 3px; transform: scale(1.15);">
                            <div style="flex: 1;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span class="badge-cif-cyber" style="background: #ffffff; color: #0f172a; font-weight: 850;">${escapeHtml(item.jenis_agunan || 'AGUNAN')}</span>
                                    <span style="font-size: 10px; color: #64748b; font-weight: 700;">Agunan Ke-${item.nomor_urut || (idx + 1)}</span>
                                </div>
                                <div style="font-weight: 850; color: #0f172a; font-family: monospace; font-size: 12px; margin-top: 3px;">
                                    NO. ${escapeHtml(item.nomor_agunan || '-')}
                                </div>
                                <div style="font-size: 11px; color: #334155; font-weight: 700; margin-top: 1px;">
                                    AN: ${escapeHtml(item.atas_nama || '-')}
                                </div>
                                <div style="font-size: 10px; color: #64748b; margin-top: 2px;">
                                    Luas/Nopol: ${escapeHtml(item.luas_nopol || '-')} • Letak: ${escapeHtml(item.letak_agunan || '-')}
                                </div>
                            </div>
                        </div>
                    </label>
                `;
            });

            container.innerHTML = html;
            cekKelayakanSimpanTukarAgunan();
        } else {
            container.innerHTML = `<div style="text-align: center; color: #dc2626; padding: 25px; font-size: 11.5px; font-weight: 700;">Data jaminan lama tidak ditemukan pada database.</div>`;
        }
    })
    .catch(() => {
        container.innerHTML = `<div style="text-align: center; color: #dc2626; padding: 25px; font-size: 11.5px;">Gagal memuat dokumen lama dari server.</div>`;
    });
}

function pilihRadioAgunanLama(detailId, element) {
    document.getElementById('taDetailIdLama').value = detailId;
    document.querySelectorAll('#taContainerAgunanLama .ta-agunan-item-card').forEach(el => el.classList.remove('active'));
    element.classList.add('active');
    cekKelayakanSimpanTukarAgunan();
}

function pilihRoleTukarAgunan(role, btn) {
    document.getElementById('taRolePengambil').value = role;
    document.querySelectorAll('#taRoleChipsContainer .role-chip').forEach(c => c.classList.remove('chip-active'));
    btn.classList.add('chip-active');
}

function toggleHtFieldsBaru(checked) {
    const container = document.getElementById('taContainerHtInputs');
    const badge = document.getElementById('taBadgeHtStatus');
    if (container) container.style.display = checked ? 'grid' : 'none';
    if (badge) {
        badge.textContent = checked ? '[DENGAN HT]' : '[TANPA HT]';
        badge.style.color = checked ? '#ea580c' : '#64748b';
    }
}

function cekKelayakanSimpanTukarAgunan() {
    const detailLamaId = document.getElementById('taDetailIdLama')?.value;
    const noBaru       = (document.getElementById('taInputNomorBaru')?.value || '').trim();
    const namaBaru     = (document.getElementById('taInputNamaBaru')?.value || '').trim();
    const btnSimpan    = document.getElementById('btnEksekusiTukarAgunan');

    const isValid = detailLamaId && noBaru !== '' && namaBaru !== '';
    if (btnSimpan) {
        btnSimpan.disabled = !isValid;
        if (isValid) {
            btnSimpan.style.opacity = '1';
            btnSimpan.style.cursor = 'pointer';
        } else {
            btnSimpan.style.opacity = '0.45';
            btnSimpan.style.cursor = 'not-allowed';
        }
    }
}

function batalTukarAgunanMandiri() {
    showCustomConfirm(
        'BATALKAN PENUKARAN AGUNAN',
        'Apakah Anda yakin ingin membatalkan transaksi tukar agunan ini?<br><br>Dokumen fisik akan tetap berada di status <b>LEMARI</b> tanpa ada data yang diubah.',
        function () {
            const modal = document.getElementById('modalTukarAgunanMandiri');
            if (modal) modal.classList.add('d-none');
        },
        'YA, BATALKAN',
        'KEMBALI KE FORM'
    );
}

// 5. EKSEKUSI SIMPAN TUKAR AGUNAN: DILENGKAPI POST-SAVE FLOW
function eksekusiSimpanTukarAgunanMandiri() {
    const form = document.getElementById('formTukarAgunanMandiri');
    const formData = new FormData(form);
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    const routeUrl = window.ROUTE_TUKAR_AGUNAN || '/cariberkas/tukar-agunan/proses';

    const namaDeb = document.getElementById('taDispNama')?.textContent || '';
    const noBaru  = document.getElementById('taInputNomorBaru')?.value || '';
    const anBaru  = document.getElementById('taInputNamaBaru')?.value || '';

    const confirmHtml = `
        Pastikan fisik agunan pengganti telah diperiksa dengan benar:<br><br>
        • Debitur: <b>${escapeHtml(namaDeb)}</b><br>
        • Agunan Baru: <b>NO. ${escapeHtml(noBaru)} AN ${escapeHtml(anBaru)}</b><br><br>
        Lanjutkan simpan pembaruan jaminan ke sistem?
    `;

    showCustomConfirm('KONFIRMASI SIMPAN AGUNAN PENGGANTI', confirmHtml, function () {
        fetch(routeUrl, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(async res => {
            const json = await res.json();
            if (!res.ok || json.status !== 'success') {
                throw new Error(json.message || 'Gagal menyimpan transaksi penukaran agunan.');
            }
            return json;
        })
        .then(data => {
            showCyberToast(data.message, 'Tukar Agunan Berhasil!', 'check');

            if (selectedDebiturData) {
                selectedDebiturData.posisi_berkas = data.posisi_berkas;
                selectedDebiturData.posisi_agunan = data.posisi_agunan;
                selectedDebiturData.pinjam_pengambil = data.pinjam_pengambil;
                selectedDebiturData.pinjam_tanggal = data.pinjam_tanggal;
                selectedDebiturData.pinjam_alasan = data.pinjam_alasan;
            }

            // Simpan register_id ke elemen hidden untuk eksekusi pengembalian langsung
            const regIdInput = document.getElementById('taCreatedRegisterId');
            if (regIdInput) regIdInput.value = data.register_id || '';

            // Kunci semua kontrol formulir agar tidak diedit lagi
            document.querySelectorAll('#formTukarAgunanMandiri input, #formTukarAgunanMandiri button.jenis-chip-btn, #formTukarAgunanMandiri button.role-chip')
                .forEach(el => {
                    el.disabled = true;
                });

            // Tampilkan Banner Informasi Sukses Pascasimpan
            const banner = document.getElementById('taPostSaveBanner');
            if (banner) banner.classList.remove('d-none');

            const dispStatus = document.getElementById('taDispStatusPinjamPascata');
            if (dispStatus) dispStatus.textContent = data.posisi_berkas || 'DIPINJAM';

            // Alihkan Tombol Footer ke Mode Pascasimpan
            const footerNormal = document.getElementById('taFooterNormalGroup');
            const footerPost = document.getElementById('taFooterPostSaveGroup');
            if (footerNormal) footerNormal.classList.add('d-none');
            if (footerPost) footerPost.classList.remove('d-none');

            // Perbarui Judul Modal
            setTextSafe('taModalTitle', 'PERUBAHAN AGUNAN TERSIMPAN - STATUS FISIK DIPINJAM');
            setTextSafe('taModalSubTitle', 'Data berhasil diperbarui. Silakan langsung kembalikan dokumen ke lemari atau tutup jendela jika ditunda.');

            // Refresh tabel utama di latar belakang
            const searchInput = document.getElementById('searchInput');
            if (searchInput) executeLiveSearch(searchInput.value.trim());
        })
        .catch(err => {
            showCustomAlert('GAGAL PENUKARAN AGUNAN', err.message || 'Terjadi gangguan koneksi.', 'TUTUP');
        });
    }, 'YA, SIMPAN DATA', 'PERIKSA LAGI');
}

// 6. FUNGSI PENUTUPAN / PENGEMBALIAN LANGSUNG PASCA-SIMPAN
function tutupModalTukarAgunanSelesai() {
    const modal = document.getElementById('modalTukarAgunanMandiri');
    if (modal) modal.classList.add('d-none');
    const searchInput = document.getElementById('searchInput');
    if (searchInput) executeLiveSearch(searchInput.value.trim());
}

function eksekusiKembalikanLangsungDariModal() {
    const regId = document.getElementById('taCreatedRegisterId')?.value;
    const namaDeb = document.getElementById('taDispNama')?.textContent || 'Nasabah';

    if (!regId) {
        showCustomAlert('ID REGISTER TIDAK DITEMUKAN', 'ID catatan register penukaran tidak ditemukan. Silakan lakukan pengembalian melalui tombol Berkas Dipinjam.', 'TUTUP');
        return;
    }

    const msg = `Apakah Anda yakin ingin <b>mengembalikan seluruh dokumen fisik baru dan berkas pinjaman</b> milik <b>"${escapeHtml(namaDeb)}"</b> ke lemari penyimpanan (<b>LEMARI</b>)?`;

    showCustomConfirm('KEMBALIKAN FISIK KE LEMARI', msg, function() {
        const btn = document.getElementById('btnKembalikanLangsungModal');
        if (btn) {
            btn.disabled = true;
            btn.innerHTML = '<span>Sedang Memproses Pengembalian...</span>';
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        const returnRoute = window.ROUTE_KEMBALIKAN_BERKAS || '/cariberkas/kembalikan';

        fetch(returnRoute, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ register_id: regId })
        })
        .then(async (res) => {
            if (res.status === 419) {
                showCustomAlert('SESI KEDALUWARSA', 'Sesi Anda telah berakhir. Halaman akan dimuat ulang.', 'REFRESH');
                setTimeout(() => { window.location.reload(); }, 1500);
                throw new Error('CSRF_EXPIRED');
            }
            const data = await res.json();
            if (!res.ok) throw new Error(data.message || 'Gagal mengembalikan berkas.');
            return data;
        })
        .then(data => {
            if (data.status === 'success') {
                showCyberToast(data.message, 'Dokumen Berhasil Dikembalikan!', 'return');

                // Tutup modal tukar agunan
                const modal = document.getElementById('modalTukarAgunanMandiri');
                if (modal) modal.classList.add('d-none');

                // Update state lokal
                if (selectedDebiturData) {
                    selectedDebiturData.posisi_berkas = 'LEMARI';
                    selectedDebiturData.posisi_agunan = 'LEMARI';
                    selectedDebiturData.pinjam_pengambil = null;
                    selectedDebiturData.pinjam_tanggal = null;
                    selectedDebiturData.pinjam_alasan = null;
                }

                // Refresh tabel pencarian utama
                const searchInput = document.getElementById('searchInput');
                if (searchInput) executeLiveSearch(searchInput.value.trim());
            } else {
                if (btn) {
                    btn.disabled = false;
                    btn.innerHTML = '📦 KEMBALIKAN BERKAS &amp; AGUNAN KE LEMARI SEKARANG';
                }
                showCustomAlert('GAGAL PENGEMBALIAN', data.message || 'Gagal mengembalikan dokumen ke lemari.', 'TUTUP');
            }
        })
        .catch(err => {
            if (err.message === 'CSRF_EXPIRED') return;
            if (btn) {
                btn.disabled = false;
                btn.innerHTML = '📦 KEMBALIKAN BERKAS &amp; AGUNAN KE LEMARI SEKARANG';
            }
            showCustomAlert('GANGGUAN SERVER', err.message || 'Terjadi gangguan koneksi server.', 'TUTUP');
        });
    }, 'YA, KEMBALIKAN KE LEMARI', 'BATAL');
}

// =============================================================================
// MODUL CARI AGUNAN JUMBO
// =============================================================================

function formatRupiahSubModal(input) {
    let val = input.value.replace(/[^0-9]/g, '');
    if (!val) { input.value = ''; return; }
    input.value = 'Rp ' + Number(val).toLocaleString('id-ID');
}

function bukaModalEditAgunan(detailJson) {
    const data = typeof detailJson === 'string' ? JSON.parse(decodeURIComponent(detailJson)) : detailJson;
    if (!data) return;

    bukaModalTukarAgunanMandiri({
        id: selectedDebiturData ? selectedDebiturData.id : '',
        nama_debitur: data.atas_nama || (selectedDebiturData ? selectedDebiturData.nama_debitur : '-'),
        nomor_rekening: selectedDebiturData ? selectedDebiturData.nomor_rekening : '-',
        cif: selectedDebiturData ? selectedDebiturData.cif : '-',
        label_berkas: selectedDebiturData ? selectedDebiturData.label_berkas : '-',
        label_agunan: data.label_agunan || '-'
    });
}

function closeSubModalFormAgunan() {
    const modal = document.getElementById('subModalFormAgunan');
    if (modal) {
        modal.style.setProperty('display', 'none', 'important');
    }
}

function prosesKembalikanBerkas(registerId, namaDebitur) {
    const msg = `Apakah Anda yakin ingin mengembalikan fisik dokumen berkas milik <b>"${escapeHtml(namaDebitur)}"</b> ke lemari penyimpanan (<b>LEMARI</b>)?`;
    showCustomConfirm('KONFIRMASI PENGEMBALIAN BERKAS', msg, function() {
        eksekusiKembalikanBerkas(registerId);
    }, 'YA, KEMBALIKAN', 'BATAL');
}

function eksekusiKembalikanBerkas(registerId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

    fetch('/cariberkas/kembalikan', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ register_id: registerId })
    })
        .then(async (res) => {
            if (res.status === 419) {
                showCustomAlert('SESI KEDALUWARSA', 'Sesi Anda telah berakhir. Halaman akan dimuat ulang.', 'REFRESH');
                setTimeout(() => { window.location.reload(); }, 1500);
                throw new Error('CSRF_EXPIRED');
            }
            const data = await res.json();
            if (!res.ok) {
                throw new Error(data.message || 'Gagal mengembalikan berkas.');
            }
            return data;
        })
        .then(data => {
            if (data.status === 'success') {
                showCyberToast(data.message, 'Pengembalian Berhasil!', 'return');
                muatDataSedangDipinjam();
                const searchInput = document.getElementById('searchInput');
                if (searchInput) executeLiveSearch(searchInput.value.trim());
            } else {
                showCustomAlert('GAGAL PENGEMBALIAN', data.message || 'Gagal mengembalikan berkas.', 'TUTUP');
            }
        })
        .catch(err => {
            if (err.message === 'CSRF_EXPIRED') return;
            showCustomAlert('GAGAL MEMPROSES PENGEMBALIAN', err.message || 'Terjadi gangguan koneksi server.', 'TUTUP');
        });
}

function bukaModalCariAgunan() {
    const modal = document.getElementById('modalCariAgunanV3');
    if (!modal) return;
    modal.classList.remove('d-none');
    const input = document.getElementById('inputLiveCariAgunan');
    if (input) input.value = '';
    muatDataAgunanGlobal('');
}

function tutupModalCariAgunan() {
    if (abortControllerAgunan) {
        abortControllerAgunan.abort();
        abortControllerAgunan = null;
    }
    const modal = document.getElementById('modalCariAgunanV3');
    if (modal) modal.classList.add('d-none');
}

function filterLiveTabelAgunan(keyword) {
    clearTimeout(timerSearchAgunan);
    timerSearchAgunan = setTimeout(() => {
        muatDataAgunanGlobal(keyword.trim());
    }, 280);
}

function muatDataAgunanGlobal(keyword = '') {
    const tbody = document.getElementById('bodyTabelAgunanGlobal');
    const txtTotal = document.getElementById('txtTotalAgunanFound');
    if (!tbody) return;

    if (abortControllerAgunan) {
        abortControllerAgunan.abort();
    }
    abortControllerAgunan = new AbortController();

    tbody.innerHTML = `<tr><td colspan="13" style="text-align: center; color: #2563eb; padding: 30px; font-weight: 700;">Mencari data dokumen agunan...</td></tr>`;

    fetch(`/cariberkas/cari-agunan?q=${encodeURIComponent(keyword)}`, {
        signal: abortControllerAgunan.signal,
        headers: { 
            'Accept': 'application/json', 
            'X-Requested-With': 'XMLHttpRequest' 
        }
    })
        .then(async (res) => {
            const data = await res.json();
            if (!res.ok) throw new Error(data.message || 'Gagal merespons data');
            return data;
        })
        .then(res => {
            if (res.status === 'success') {
                rawDataAgunanGlobal = res.data || [];
                renderTabelAgunanGlobal(rawDataAgunanGlobal);
            } else {
                tbody.innerHTML = `<tr><td colspan="13" style="text-align: center; color: #dc2626; padding: 25px; font-weight: 700;">${escapeHtml(res.message || 'Gagal memuat data agunan.')}</td></tr>`;
            }
        })
        .catch(err => {
            if (err.name === 'AbortError') return;
            tbody.innerHTML = `<tr><td colspan="13" style="text-align: center; color: #dc2626; padding: 25px; font-weight: 700;">Gagal koneksi ke server (${escapeHtml(err.message)}).</td></tr>`;
        });
}

function renderTabelAgunanGlobal(groupedData) {
    const tbody = document.getElementById('bodyTabelAgunanGlobal');
    const txtTotal = document.getElementById('txtTotalAgunanFound');
    if (!tbody) return;

    const tableEl = document.getElementById('tabelAgunanGlobal');
    if (tableEl && !tableEl.classList.contains('tabel-agunan-modern')) {
        tableEl.classList.add('tabel-agunan-modern');
    }

    if (!groupedData || groupedData.length === 0) {
        if (txtTotal) txtTotal.textContent = 'Total: 0 Data';
        tbody.innerHTML = `<tr><td colspan="13" style="text-align: center; color: #64748b; padding: 35px; font-weight: 700;">Data agunan tidak ditemukan.</td></tr>`;
        return;
    }

    let totalBarisAgunan = 0;
    let html = '';
    let nomorUrut = 1;

    groupedData.forEach((group, groupIdx) => {
        const items = group.items || [];
        const rowspan = items.length;
        totalBarisAgunan += rowspan;

        const isEven = (groupIdx % 2 === 0);
        const rowClass = isEven ? 'group-even' : 'group-odd';
        const mergedClass = isEven ? 'merged-cell-even' : 'merged-cell-odd';

        let ketHtml = '';
        if (group.label_berkas && group.label_berkas !== '-' && group.label_berkas.trim() !== '') {
            ketHtml = `<span class="badge-berkas-ada">${escapeHtml(group.label_berkas)}</span>`;
        } else {
            ketHtml = `<span class="badge-tanpa-berkas">Tanpa Berkas</span>`;
        }

        const tanggunganVal = (group.nilai_tanggungan && group.nilai_tanggungan > 0) 
            ? 'Rp ' + Number(group.nilai_tanggungan).toLocaleString('id-ID') 
            : '-';

        items.forEach((item, index) => {
            const isLastRowInGroup = (index === rowspan - 1);
            const borderBottomStyle = isLastRowInGroup 
                ? 'border-bottom: 2.5px solid #475569 !important;' 
                : 'border-bottom: 1px dashed #94a3b8 !important;';

            html += `<tr class="${rowClass}">`;

            if (index === 0) {
                html += `
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: center; color: #0f172a; font-weight: 900; vertical-align: middle; border-bottom: 2.5px solid #475569 !important;">
                        ${nomorUrut}
                    </td>
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: center; vertical-align: middle; border-bottom: 2.5px solid #475569 !important;">
                        <span class="badge-label-agunan">${escapeHtml(group.label_agunan || '-')}</span>
                    </td>
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: center; font-size: 11px; color: #334155; font-weight: 750; vertical-align: middle; border-bottom: 2.5px solid #475569 !important;">
                        ${escapeHtml(group.nomor_ht || '-')}
                    </td>
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: right; font-weight: 800; color: #0f172a; font-family: 'Consolas', monospace; vertical-align: middle; padding-right: 12px; border-bottom: 2.5px solid #475569 !important;">
                        ${tanggunganVal}
                    </td>
                `;
            }

            html += `
                <td style="text-align: center; vertical-align: middle; ${borderBottomStyle}">
                    <span class="badge-agunan-ke">${item.nomor_urut || (index + 1)}</span>
                </td>
                <td style="text-align: center; vertical-align: middle; ${borderBottomStyle}">
                    <span class="badge-cif-cyber" style="font-weight: 850; background: #ffffff; border-color: #64748b;">${escapeHtml(item.jenis_agunan || '-')}</span>
                </td>
                <td style="font-weight: 850; color: #0f172a; font-family: 'Consolas', monospace; font-size: 12px; vertical-align: middle; ${borderBottomStyle}">
                    ${escapeHtml(item.nomor_agunan || '-')}
                </td>
                <td style="font-weight: 750; color: #1e293b; vertical-align: middle; ${borderBottomStyle}">
                    ${escapeHtml(item.atas_nama || '-')}
                </td>
                <td style="color: #334155; font-size: 11.5px; font-weight: 650; vertical-align: middle; ${borderBottomStyle}">
                    ${escapeHtml(item.luas_nopol || '-')}
                </td>
                <td style="color: #475569; font-size: 11.5px; vertical-align: middle; ${borderBottomStyle}">
                    ${escapeHtml(item.letak_agunan || '-')}
                </td>
            `;

            if (index === 0) {
                html += `
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: center; vertical-align: middle; border-bottom: 2.5px solid #475569 !important;">
                        <span class="${getPillClass(group.posisi_agunan)}" style="font-weight: 900;">${escapeHtml(group.posisi_agunan || 'LEMARI')}</span>
                    </td>
                    <td rowspan="${rowspan}" class="${mergedClass}" style="text-align: center; vertical-align: middle; border-bottom: 2.5px solid #475569 !important;">
                        ${ketHtml}
                    </td>
                `;
            }

            const payloadAgunanBaris = encodeURIComponent(JSON.stringify({
                detail_id: item.detail_id || '',
                label_agunan: group.label_agunan || '',
                nomor_ht: group.nomor_ht || '',
                nilai_tanggungan: group.nilai_tanggungan || 0,
                jenis_agunan: item.jenis_agunan || 'SHM',
                nomor_agunan: item.nomor_agunan || '',
                atas_nama: item.atas_nama || '',
                luas_nopol: item.luas_nopol || '',
                letak_agunan: item.letak_agunan || ''
            }));

            html += `
                <td style="text-align: center; vertical-align: middle; ${borderBottomStyle}">
                    <button type="button" 
                            onclick="bukaModalEditAgunan('${payloadAgunanBaris}')" 
                            style="background: #0284c7; color: #ffffff; border: none; border-radius: 4px; padding: 4px 8px; font-size: 10px; font-weight: 800; cursor: pointer;">
                        Edit
                    </button>
                </td>
            `;

            html += '</tr>';
        });

        nomorUrut++;
    });

    if (txtTotal) txtTotal.textContent = `Total: ${totalBarisAgunan} Agunan (${groupedData.length} Kelompok)`;
    tbody.innerHTML = html;
}

// =============================================================================
// MODUL PERMINTAAN BERKAS DARI MANTRI
// =============================================================================

function playSoftAlarmSound() {
    try {
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        if (!AudioContext) return;
        const ctx = new AudioContext();
        if (ctx.state === 'suspended') {
            ctx.resume();
        }

        const now = ctx.currentTime;

        const osc1 = ctx.createOscillator();
        const gain1 = ctx.createGain();
        osc1.type = 'sine';
        osc1.frequency.setValueAtTime(587.33, now);
        gain1.gain.setValueAtTime(0, now);
        gain1.gain.linearRampToValueAtTime(0.22, now + 0.04);
        gain1.gain.exponentialRampToValueAtTime(0.001, now + 0.55);
        osc1.connect(gain1);
        gain1.connect(ctx.destination);
        osc1.start(now);
        osc1.stop(now + 0.55);

        const osc2 = ctx.createOscillator();
        const gain2 = ctx.createGain();
        osc2.type = 'sine';
        osc2.frequency.setValueAtTime(880, now + 0.16);
        gain2.gain.setValueAtTime(0, now + 0.16);
        gain2.gain.linearRampToValueAtTime(0.18, now + 0.20);
        gain2.gain.exponentialRampToValueAtTime(0.001, now + 0.85);
        osc2.connect(gain2);
        gain2.connect(ctx.destination);
        osc2.start(now + 0.16);
        osc2.stop(now + 0.85);
    } catch (e) {}
}

function bukaModalPermintaanBerkas() {
    const modal = document.getElementById('modalPermintaanBerkasV3');
    if (!modal) return;

    modal.classList.remove('d-none');
    const inputFilter = document.getElementById('inputFilterPermintaan');
    if (inputFilter) inputFilter.value = '';

    muatDataPermintaanBerkas();
}

function tutupModalPermintaanBerkas() {
    const modal = document.getElementById('modalPermintaanBerkasV3');
    if (modal) modal.classList.add('d-none');
}

function cekPollingPermintaanBerkas() {
    fetch('/cariberkas/permintaan', {
        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(res => res.json())
    .then(res => {
        if (res.status === 'success') {
            const count = res.total || 0;

            if (count > lastKnownPermintaanCount) {
                playSoftAlarmSound();
                showCyberToast(`Ada ${count - lastKnownPermintaanCount} permintaan berkas baru masuk dari Mantri!`, 'Permintaan Masuk', 'check');
            }
            lastKnownPermintaanCount = count;

            updateBadgePermintaanCount(count);
            if (res.total_antrian !== undefined) syncAntrianCount(res.total_antrian);

            const modal = document.getElementById('modalPermintaanBerkasV3');
            if (modal && !modal.classList.contains('d-none')) {
                rawDataPermintaanBerkas = res.data || [];
                renderTablePermintaan(rawDataPermintaanBerkas);
            }
        }
    })
    .catch(() => {});
}

function updateBadgePermintaanCount(count) {
    const badgeBtn = document.getElementById('badgeBtnPermintaan');
    if (badgeBtn) {
        badgeBtn.textContent = count;
        badgeBtn.style.display = count > 0 ? 'inline-block' : 'none';
    }

    const badgeHeader = document.getElementById('badgeCountPermintaanHeader');
    if (badgeHeader) {
        badgeHeader.textContent = `${count} Permintaan Menunggu`;
    }
}

function muatDataPermintaanBerkas(isManual = false) {
    const tbody = document.getElementById('bodyTabelPermintaanBerkas');
    if (!tbody) return;

    tbody.innerHTML = `<tr><td colspan="10" style="text-align: center; color: #2563eb; padding: 30px; font-weight: 700;">Memuat antrean permintaan berkas...</td></tr>`;

    fetch('/cariberkas/permintaan', {
        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
    })
    .then(async (res) => {
        const json = await res.json();
        if (!res.ok) throw new Error(json.message || 'Gagal memuat antrean.');
        return json;
    })
    .then(res => {
        if (res.status === 'success') {
            rawDataPermintaanBerkas = res.data || [];
            updateBadgePermintaanCount(res.total || 0);
            if (res.total_antrian !== undefined) syncAntrianCount(res.total_antrian);
            renderTablePermintaan(rawDataPermintaanBerkas);
            if (isManual) showCyberToast('Antrean permintaan berhasil diperbarui.', 'Data Segar', 'check');
        } else {
            tbody.innerHTML = `<tr><td colspan="10" style="text-align: center; color: #dc2626; padding: 25px; font-weight: 700;">${escapeHtml(res.message || 'Gagal memuat data.')}</td></tr>`;
        }
    })
    .catch(err => {
        tbody.innerHTML = `<tr><td colspan="10" style="text-align: center; color: #dc2626; padding: 25px; font-weight: 700;">Terjadi gangguan koneksi: ${escapeHtml(err.message)}</td></tr>`;
    });
}

function renderTablePermintaan(data) {
    const tbody = document.getElementById('bodyTabelPermintaanBerkas');
    if (!tbody) return;

    const chkMaster = document.getElementById('chkPilihSemuaPermintaan');
    if (chkMaster) chkMaster.checked = false;
    updateCounterTerpilih();

    if (!data || data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="10" style="text-align: center; color: #64748b; padding: 40px; font-weight: 600;">Tidak ada tiket permintaan berkas yang menunggu persetujuan.</td></tr>`;
        return;
    }

    let html = '';
    data.forEach((item, idx) => {
        const tipeBadge = item.tipe_aksi === 'berkas_agunan'
            ? `<span class="badge-tipe-pinjam badge-tipe-agunan">BERKAS &amp; AGUNAN</span>`
            : `<span class="badge-tipe-pinjam badge-tipe-berkas">BERKAS SAJA</span>`;

        let tglFormatted = '-';
        if (item.created_at) {
            const d = new Date(item.created_at);
            if (!isNaN(d.getTime())) {
                const pad = (n) => String(n).padStart(2, '0');
                const tgl = `${pad(d.getDate())}/${pad(d.getMonth() + 1)}/${d.getFullYear()}`;
                const jam = `${pad(d.getHours())}:${pad(d.getMinutes())} WIB`;
                tglFormatted = `<div style="font-weight: 700; color: #334155;">${tgl}</div><div style="font-size: 9.5px; color: #64748b;">${jam}</div>`;
            }
        }

        html += `
            <tr id="row-permintaan-${item.id}">
                <td style="text-align: center; vertical-align: middle;">
                    <input type="checkbox" class="chk-item-permintaan" value="${item.id}" onchange="updateCounterTerpilih()" style="cursor: pointer; transform: scale(1.15);">
                </td>
                <td style="text-align: center; color: #64748b; font-weight: 750; vertical-align: middle;">${idx + 1}</td>
                <td style="text-align: center; font-size: 10px; vertical-align: middle;">
                    ${tglFormatted}
                </td>
                <td style="vertical-align: middle;">
                    <div style="font-weight: 800; color: #0f172a; font-size: 11px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${escapeHtml(item.nama_pemohon)}">${escapeHtml(item.nama_pemohon)}</div>
                    <div style="font-size: 9.5px; color: #64748b; font-family: monospace;">PN: ${escapeHtml(item.pn_pemohon)}</div>
                </td>
                <td style="vertical-align: middle;">
                    <div style="font-weight: 850; color: #0284c7; font-size: 11.5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${escapeHtml(item.nama_debitur)}">${escapeHtml(item.nama_debitur)}</div>
                    <div class="text-rek-cyber" style="font-size: 10px;">${escapeHtml(item.nomor_rekening)}</div>
                </td>
                <td style="vertical-align: middle; color: #334155; font-weight: 650; font-size: 10.5px;">
                    <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${escapeHtml(item.pn_pengelola || '-')}">
                        ${escapeHtml(item.pn_pengelola || '-')}
                    </div>
                </td>
                <td style="text-align: center; vertical-align: middle;">
                    <div class="box-rak-fisik">
                        <span class="tag-rak-berkas">📁 ${escapeHtml(item.label_berkas || '-')}</span>
                        <span class="tag-rak-agunan">📑 ${escapeHtml(item.label_agunan || '-')}</span>
                    </div>
                </td>
                <td style="text-align: center; vertical-align: middle;">
                    ${tipeBadge}
                </td>
                <td style="vertical-align: middle; font-size: 10px; line-height: 1.35; white-space: normal; word-break: break-word;">
                    <strong style="color: #0f172a;">${escapeHtml(item.alasan_permintaan)}</strong>
                    ${item.catatan ? `<div style="color: #64748b; font-style: italic; font-size: 9.5px; margin-top: 1px;">"${escapeHtml(item.catatan)}"</div>` : ''}
                </td>
                <td style="text-align: center; vertical-align: middle; white-space: nowrap;">
                    <div style="display: flex; gap: 4px; justify-content: center; align-items: center;">
                        <button type="button" 
                                class="btn-table-approve" 
                                onclick="setujuiSatuPermintaan(${item.id}, '${escapeHtml(item.nama_debitur)}')"
                                title="Setujui dan masukkan berkas ke antrean cetak">
                            ✓ Setujui
                        </button>
                        <button type="button" 
                                class="btn-table-reject"
                                onclick="bukaSubModalTolak(${item.id}, '${escapeHtml(item.nama_debitur)}', '${escapeHtml(item.nama_pemohon)}')" 
                                title="Tolak permintaan berkas">
                            ✕ Tolak
                        </button>
                    </div>
                </td>
            </tr>
        `;
    });

    tbody.innerHTML = html;
}

function filterLiveTabelPermintaan(keyword) {
    const q = (keyword || '').toLowerCase().trim();
    if (!q) {
        renderTablePermintaan(rawDataPermintaanBerkas);
        return;
    }

    const filtered = rawDataPermintaanBerkas.filter(item => {
        const pemohon = (item.nama_pemohon || '').toLowerCase();
        const pn = (item.pn_pemohon || '').toLowerCase();
        const deb = (item.nama_debitur || '').toLowerCase();
        const rek = (item.nomor_rekening || '').toLowerCase();
        const alasan = (item.alasan_permintaan || '').toLowerCase();
        const catatan = (item.catatan || '').toLowerCase();
        return pemohon.includes(q) || pn.includes(q) || deb.includes(q) || rek.includes(q) || alasan.includes(q) || catatan.includes(q);
    });

    renderTablePermintaan(filtered);
}

function togglePilihSemuaPermintaan(isChecked) {
    const checkboxes = document.querySelectorAll('#bodyTabelPermintaanBerkas .chk-item-permintaan');
    checkboxes.forEach(cb => { cb.checked = isChecked; });
    updateCounterTerpilih();
}

function updateCounterTerpilih() {
    const checkedItems = document.querySelectorAll('#bodyTabelPermintaanBerkas .chk-item-permintaan:checked');
    const totalChecked = checkedItems.length;
    const infoEl = document.getElementById('txtInfoTerpilih');
    if (infoEl) {
        infoEl.textContent = `${totalChecked} berkas terpilih`;
        infoEl.style.color = totalChecked > 0 ? '#1d4ed8' : '#475569';
    }
}

function setujuiPermintaanTerpilih() {
    if (isProcessingBatchApproval) return;

    const checkedBoxes = Array.from(document.querySelectorAll('#bodyTabelPermintaanBerkas .chk-item-permintaan:checked'));
    let targetIds = [];

    if (checkedBoxes.length > 0) {
        targetIds = checkedBoxes.map(cb => parseInt(cb.value, 10));
    } else {
        targetIds = rawDataPermintaanBerkas.map(i => i.id);
    }

    if (targetIds.length === 0) {
        showCustomAlert('ANTREAN KOSONG', 'Tidak ada data permintaan berkas yang dapat disetujui saat ini.', 'TUTUP');
        return;
    }

    const pesan = `
        Apakah Anda yakin ingin <b>menyetujui ${targetIds.length} permintaan berkas</b> ini?<br><br>
        Seluruh berkas akan dicatat di buku register dan <b>dimasukkan ke antrean cetak</b>. Anda dapat mencetaknya kapan saja melalui tombol <b>"CETAK SEKARANG"</b>.
    `;

    showCustomConfirm('KONFIRMASI APPROVAL BERKAS', pesan, function () {
        eksekusiBatchApprovalKeAntrian(targetIds);
    }, `YA, SETUJUI ${targetIds.length} BERKAS`, 'BATAL');
}

function eksekusiBatchApprovalKeAntrian(targetIds) {
    isProcessingBatchApproval = true;
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
    
    showCyberToast(`Menyetujui ${targetIds.length} berkas ke antrean cetak...`, 'Sedang Memproses', 'check');

    fetch('/cariberkas/permintaan/setujui-semua', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ target_ids: targetIds })
    })
    .then(res => res.json())
    .then(data => {
        isProcessingBatchApproval = false;
        if (data.status === 'success') {
            if (data.total_antrian !== undefined) syncAntrianCount(data.total_antrian);
            showCyberToast(`${data.count} berkas disetujui! Silakan klik tombol CETAK SEKARANG untuk mencetak.`, 'Approval Berhasil!', 'check');
            muatDataPermintaanBerkas();
            const searchInput = document.getElementById('searchInput');
            if (searchInput) executeLiveSearch(searchInput.value.trim());
        } else {
            showCustomAlert('GAGAL MEMPROSES', data.message || 'Gagal memproses approval berkas.', 'TUTUP');
        }
    })
    .catch(err => {
        isProcessingBatchApproval = false;
        showCustomAlert('GANGGUAN KONEKSI', 'Terjadi kesalahan saat memproses approval berkas.', 'TUTUP');
    });
}

function setujuiSatuPermintaan(permintaanId, namaDebitur) {
    const pesan = `Setujui pengeluaran berkas fisik milik debitur <b>"${escapeHtml(namaDebitur)}"</b>?<br><br>Berkas akan dicatat di buku register dan dimasukkan ke antrean cetak.`;
    showCustomConfirm('KONFIRMASI PERSETUJUAN BERKAS', pesan, function () {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

        fetch('/cariberkas/permintaan/setujui', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ permintaan_id: permintaanId })
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                if (data.total_antrian !== undefined) syncAntrianCount(data.total_antrian);
                showCyberToast(data.message, 'Persetujuan Berhasil!', 'check');
                muatDataPermintaanBerkas();
                const searchInput = document.getElementById('searchInput');
                if (searchInput) executeLiveSearch(searchInput.value.trim());
            } else {
                showCustomAlert('GAGAL PERSETUJUAN', data.message || 'Terjadi kesalahan sistem.', 'TUTUP');
            }
        })
        .catch(() => {
            showCustomAlert('GANGGUAN KONEKSI', 'Gagal memproses persetujuan ke server.', 'TUTUP');
        });
    }, 'YA, SETUJUI', 'BATAL');
}

function bukaSubModalTolak(id, namaDebitur, namaMantri) {
    const modal = document.getElementById('modalTolakPermintaanSub');
    if (!modal) return;

    document.getElementById('subTolakPermintaanId').value = id;
    setTextSafe('subTolakNamaDebitur', namaDebitur);
    setTextSafe('subTolakNamaMantri', namaMantri);

    const inputAlasan = document.getElementById('subTolakInputAlasan');
    if (inputAlasan) inputAlasan.value = '';

    modal.classList.remove('d-none');
}

function tutupSubModalTolak() {
    const modal = document.getElementById('modalTolakPermintaanSub');
    if (modal) modal.classList.add('d-none');
}

function setAlasanTolakPreset(text) {
    const input = document.getElementById('subTolakInputAlasan');
    if (input) input.value = text;
}

function eksekusiTolakPermintaan() {
    const id = document.getElementById('subTolakPermintaanId')?.value;
    const alasan = (document.getElementById('subTolakInputAlasan')?.value || '').trim();

    if (!id || !alasan) {
        showCustomAlert('ALASAN WAJIB DIISI', 'Silakan berikan alasan penolakan berkas terlebih dahulu.', 'SAYA AKAN MENGISI');
        return;
    }

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

    fetch('/cariberkas/permintaan/tolak', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            permintaan_id: id,
            alasan_penolakan: alasan
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            tutupSubModalTolak();
            showCyberToast(data.message, 'Permintaan Ditolak', 'return');
            muatDataPermintaanBerkas();
        } else {
            showCustomAlert('GAGAL MENOLAK', data.message || 'Terjadi kesalahan sistem.', 'TUTUP');
        }
    })
    .catch(() => {
        showCustomAlert('GANGGUAN KONEKSI', 'Gagal memproses penolakan berkas ke server.', 'TUTUP');
    });
}

// =============================================================================
// HELPER & UTILITIES
// =============================================================================

function showCustomConfirm(title, messageHtml, onConfirm, btnYesText = 'YA, LANJUTKAN', btnNoText = 'BATAL') {
    const modal = document.getElementById('customConfirmModal');
    if (!modal) return;
    setTextSafe('confirmModalTitle', title);
    const msgEl = document.getElementById('confirmModalMsg');
    if (msgEl) msgEl.innerHTML = messageHtml;

    const btnYes = modal.querySelector('.btn-confirm-yes');
    if (btnYes) btnYes.textContent = btnYesText;

    const btnCancel = modal.querySelector('.btn-confirm-cancel');
    if (btnCancel) btnCancel.textContent = btnNoText;

    pendingConfirmCallback = onConfirm;
    modal.classList.remove('d-none');
}

function closeCustomConfirm() {
    const modal = document.getElementById('customConfirmModal');
    if (modal) modal.classList.add('d-none');
    pendingConfirmCallback = null;
}

function handleConfirmAccept() {
    if (typeof pendingConfirmCallback === 'function') {
        const cb = pendingConfirmCallback;
        pendingConfirmCallback = null;
        closeCustomConfirm();
        cb();
    } else {
        closeCustomConfirm();
    }
}

function showCyberToast(msg, title = 'Notifikasi Sukses', iconType = 'check') {
    const toast = document.getElementById('cyberToast');
    const msgEl = document.getElementById('cyberToastMsg');
    const titleEl = document.getElementById('cyberToastTitle');
    const iconEl = document.getElementById('cyberToastIcon');
    if (!toast || !msgEl) return;

    if (titleEl) titleEl.textContent = title;
    msgEl.textContent = msg;

    if (iconEl) {
        if (iconType === 'print') {
            iconEl.innerHTML = `<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>`;
        } else if (iconType === 'return') {
            iconEl.innerHTML = `<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 10h10a5 5 0 0 1 5 5v2"></path><polyline points="7 6 3 10 7 14"></polyline><path d="M21 15v2"></path></svg>`;
        } else {
            iconEl.innerHTML = `&#10003;`;
        }
    }

    clearTimeout(toastTimer);
    toast.classList.remove('d-none');
    void toast.offsetWidth;
    toast.classList.add('toast-show');

    toastTimer = setTimeout(() => {
        toast.classList.remove('toast-show');
        setTimeout(() => { toast.classList.add('d-none'); }, 300);
    }, 3500);
}

function getPillClass(val) {
    const text = (val || '').toUpperCase().trim();
    if (text === 'LEMARI') return 'status-pill pill-lemari';
    if (text === 'BERKAS') return 'status-pill pill-berkas';
    if (text === 'GUDANG ARSIP' || text === 'LUNAS PUTUS') return 'status-pill pill-lupus';
    if (text === 'DISERAHKAN' || text === 'DISERAHKAN KE NASABAH') return 'status-pill pill-diserahkan';
    if (text === 'TANPA AGUNAN' || text === '-' || text === '') return 'status-pill pill-empty';
    return 'status-pill pill-pinjam';
}

function formatDate(dateStr) {
    if (!dateStr || dateStr === '-') return '-';
    const date = new Date(dateStr);
    if (isNaN(date.getTime())) return dateStr;
    return `${String(date.getDate()).padStart(2, '0')}/${String(date.getMonth() + 1).padStart(2, '0')}/${date.getFullYear()}`;
}

function formatDateTime(dateStr) {
    if (!dateStr || dateStr === '-') return 'Belum tercatat';
    const date = new Date(dateStr);
    if (isNaN(date.getTime())) return dateStr;
    const pad = (n) => String(n).padStart(2, '0');
    return `${pad(date.getDate())}/${pad(date.getMonth() + 1)}/${date.getFullYear()} • ${pad(date.getHours())}:${pad(date.getMinutes())} WIB`;
}

function escapeHtml(text) {
    if (!text) return '-';
    return String(text)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
}

function showCustomAlert(title, messageHtml, btnText = 'TUTUP') {
    const modal = document.getElementById('customAlertModal');
    if (modal) {
        const titleEl = document.getElementById('alertModalTitle');
        const msgEl = document.getElementById('alertModalMsg');
        const btnEl = modal.querySelector('.btn-siren-ack');
        if (titleEl) titleEl.textContent = title;
        if (msgEl) msgEl.innerHTML = messageHtml;
        if (btnEl) btnEl.textContent = btnText;
        modal.classList.remove('d-none');
    } else {
        alert(title + "\n\n" + messageHtml.replace(/<[^>]*>?/gm, ''));
    }
}

function closeCustomAlert() {
    const modal = document.getElementById('customAlertModal');
    if (modal) modal.classList.add('d-none');
}

function executeLiveSearch(keyword) {
    const tableBody = document.querySelector('#debiturTable tbody');
    if (!tableBody) return;

    fetch(`/cariberkas?search=${encodeURIComponent(keyword)}`, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
        .then(res => res.json())
        .then(res => {
            if (!res.data || res.data.length === 0) {
                tableBody.innerHTML = '<tr><td colspan="7" class="empty-cyber-row"><p>Data debitur tidak ditemukan.</p></td></tr>';
                return;
            }

            window.DEBITUR_DATA = res.data;

            let html = '';
            res.data.forEach((item, index) => {
                const st = (item.status || '-').toUpperCase().trim();
                let badgeClass = 'st-dh';
                if (st === 'LUNAS PUTUS') {
                    badgeClass = 'st-lunas-putus';
                } else if (st === 'LUNAS') {
                    badgeClass = 'st-lunas';
                } else if (st === 'AKTIF') {
                    badgeClass = 'st-aktif';
                }

                const plafondFormatted = item.plafond ? 'Rp ' + Number(item.plafond).toLocaleString('id-ID') : '-';

                html += `
            <tr tabindex="0" 
                data-index="${index}"
                data-id="${item.id}"
                data-sumber="${item.sumber_tabel || 'DEBITUR'}"
                onclick="handleRowClick(this)" 
                ondblclick="handleRowDblClick(this)">
                <td style="text-align: center;" class="cell-muted">${res.first_item + index}</td>
                <td><span class="badge-cif-cyber">${escapeHtml(item.cif)}</span></td>
                <td><span class="text-rek-cyber">${escapeHtml(item.nomor_rekening)}</span></td>
                <td class="text-nama-cyber">${escapeHtml(item.nama_debitur)}</td>
                <td class="text-plafond">${plafondFormatted}</td>
                <td><span class="text-ao-cyber">${escapeHtml(item.pn_pengelola)}</span></td>
                <td style="text-align: center;"><span class="badge-status-cyber ${badgeClass}">${escapeHtml(item.status)}</span></td>
            </tr>`;
            });

            tableBody.innerHTML = html;
            if (res.total_antrian !== undefined) syncAntrianCount(res.total_antrian);
            if (res.total_permintaan !== undefined) updateBadgePermintaanCount(res.total_permintaan);

            const firstRow = tableBody.querySelector('tr[data-index]');
            if (firstRow) selectRow(firstRow);
        });
}