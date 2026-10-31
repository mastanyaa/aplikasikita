/**
 * BRIMEN REGISTRASI V3 - ENGINE ORCHESTRATOR
 * - Auto-Fetch Agunan Fisik: Menarik otomatis dokumen eksisting saat koordinat agunan dipilih/dibuka.
 * - Form Agunan Prefill: Form edit otomatis terisi data lengkap tanpa kosongan.
 * - Relokasi Bersih: Mencatat slot asal agar slot lama dikosongkan tanpa data ganda.
 * - Alarm Sirine Hazard & Suplesi Cerdas: Mendeteksi suplesi debitur yang sama agar tidak memicu alarm palsu.
 * - Tombol Aksi Solid: Tombol Ubah & Hapus dengan styling tegas agar tidak menciut menjadi kotak kosong.
 */

let currentRegDebitur = null;
let currentSlotMode = 'existing'; // 'existing' | 'recommend' | 'manual'
let targetSlotBerkas = '-';
let targetSlotAgunan = '-';
let slotLamaBerkas = '-';
let slotLamaAgunan = '-';

let agunanItems = [];
let masterHtData = { nomor_ht: '', nilai_tanggungan: 0 };
let isTanpaAgunanState = false;
let deleteAgunanTargetIndex = -1;

let agunanHelpers = {
    plat_regional: 'P',
    jenis_list: [],
    atas_nama: [],
    letak_agunan: []
};

// ==============================================================================
// 1. INISIALISASI & PEMBUKAAN MODAL REGISTRASI
// ==============================================================================
window.openRegistrasiModal = function (debiturData) {
    if (!debiturData) return;
    currentRegDebitur = debiturData;

    loadAgunanHelpersData();

    // Catat slot asal
    slotLamaBerkas = (debiturData.label_berkas && debiturData.label_berkas !== '-') ? debiturData.label_berkas.trim() : '-';
    slotLamaAgunan = (debiturData.label_agunan && debiturData.label_agunan !== '-') ? debiturData.label_agunan.trim() : '-';

    // Set Data Debitur Header
    setElementText('regDebNama', debiturData.nama_debitur || '-');
    setElementText('regDebRekening', debiturData.nomor_rekening || '-');

    // Setup OPSI A (Eksisting)
    setElementText('lblExistingBerkas', slotLamaBerkas);
    setElementText('lblExistingAgunan', slotLamaAgunan);

    // Setup OPSI B (Rekomendasi Sistem)
    const recBerkas = debiturData.auto_label_berkas || '-';
    const recAgunan = debiturData.auto_label_agunan || '-';
    setElementText('lblRecommendBerkas', recBerkas);
    setElementText('lblRecommendAgunan', recAgunan);

    // Tombol Pindah Slot Baru
    const btnPindah = document.getElementById('btnTriggerPindah');
    if (btnPindah) {
        btnPindah.style.display = (slotLamaBerkas !== '-' && recBerkas !== '-' && slotLamaBerkas !== recBerkas) ? 'inline-flex' : 'none';
    }

    // Render Dokumen Terdaftar dari Scan
    renderMiniManifestScanned();

    // Reset State Checkbox Tanpa Agunan
    isTanpaAgunanState = false;
    const chkTanpa = document.getElementById('chkTanpaAgunan');
    if (chkTanpa) chkTanpa.checked = false;

    // Muat dokumen agunan bawaan debitur jika tersedia
    agunanItems = [];
    masterHtData = { nomor_ht: '', nilai_tanggungan: 0 };

    if (debiturData.agunan_list && Array.isArray(debiturData.agunan_list) && debiturData.agunan_list.length > 0) {
        agunanItems = debiturData.agunan_list.map(it => ({
            jenis_agunan: it.jenis_agunan || 'SHM',
            nomor_agunan: it.nomor_agunan || '-',
            atas_nama: it.atas_nama || '-',
            luas_nopol: it.luas_nopol || '-',
            letak_agunan: it.letak_agunan || '-',
            nomor_ht: it.nomor_ht || '',
            nilai_tanggungan: it.nilai_tanggungan || 0
        }));

        masterHtData = {
            nomor_ht: debiturData.agunan_list[0]?.nomor_ht || '',
            nilai_tanggungan: debiturData.agunan_list[0]?.nilai_tanggungan || 0
        };
    }

    renderAgunanTable();

    // Tentukan mode awal
    if (slotLamaBerkas !== '-') {
        selectSlotMode('existing');
    } else if (recBerkas !== '-') {
        selectSlotMode('recommend');
    } else {
        selectSlotMode('manual');
    }

    const modal = document.getElementById('modalRegistrasiV3');
    if (modal) modal.style.display = 'flex';
};

window.closeRegistrasiModal = function () {
    const modal = document.getElementById('modalRegistrasiV3');
    if (modal) modal.style.display = 'none';

    const inputMain = document.getElementById('inputNomorRekening');
    if (inputMain) {
        inputMain.value = '';
        inputMain.focus();
    }
};

function renderMiniManifestScanned() {
    const container = document.getElementById('regMiniManifestContainer');
    if (!container) return;
    container.innerHTML = '';

    const docs = window.scannedDocsDetail || [];
    if (docs.length === 0) {
        container.innerHTML = `
            <div class="mini-manifest-item"><span>1_SPH.PDF</span><span style="color: #15803d;">Terdaftar</span></div>
            <div class="mini-manifest-item"><span>2_SP.PDF</span><span style="color: #15803d;">Terdaftar</span></div>
        `;
        return;
    }

    docs.forEach(doc => {
        const item = document.createElement('div');
        item.className = 'mini-manifest-item';
        item.innerHTML = `
            <span>${doc.file_name || doc.kode}</span>
            <span style="color: #15803d;">${doc.lembar_fisik || 1} Lembar</span>
        `;
        container.appendChild(item);
    });
}

// ==============================================================================
// 2. PEMILIHAN MODE SLOT & PENARIKAN OTOMATIS DOKUMEN AGUNAN
// ==============================================================================
window.selectSlotMode = function (mode) {
    currentSlotMode = mode;

    const cardExisting = document.getElementById('cardSlotExisting');
    const cardRecommend = document.getElementById('cardSlotRecommend');
    const hudBadge = document.getElementById('hudOriginBadge');

    if (mode === 'existing') {
        if (cardExisting) cardExisting.className = 'slot-mode-card card-selected';
        if (cardRecommend) cardRecommend.className = 'slot-mode-card';
        if (hudBadge) {
            hudBadge.innerText = 'BERKAS LAMA (EKSISTING)';
            hudBadge.style.background = '#dcfce7';
            hudBadge.style.color = '#15803d';
            hudBadge.style.borderColor = '#86efac';
        }
        targetSlotBerkas = slotLamaBerkas;
        targetSlotAgunan = slotLamaAgunan;
    } else if (mode === 'recommend') {
        if (cardExisting) cardExisting.className = 'slot-mode-card';
        if (cardRecommend) cardRecommend.className = 'slot-mode-card card-selected-orange';
        if (hudBadge) {
            hudBadge.innerText = 'REKOMENDASI SISTEM';
            hudBadge.style.background = '#fef3c7';
            hudBadge.style.color = '#b45309';
            hudBadge.style.borderColor = '#fde68a';
        }
        targetSlotBerkas = currentRegDebitur?.auto_label_berkas || '-';
        targetSlotAgunan = currentRegDebitur?.auto_label_agunan || '-';
    } else {
        if (cardExisting) cardExisting.className = 'slot-mode-card';
        if (cardRecommend) cardRecommend.className = 'slot-mode-card';
        if (hudBadge) {
            hudBadge.innerText = 'KOORDINAT MANUAL';
            hudBadge.style.background = '#e0f2fe';
            hudBadge.style.color = '#0369a1';
            hudBadge.style.borderColor = '#7dd3fc';
        }
    }

    applyTargetCoordinatesToInputs();
    fetchAndSyncSlotDetails(targetSlotBerkas, targetSlotAgunan);
};

window.triggerPindahSlotBaru = function () {
    selectSlotMode('recommend');
    showCyberNotice('Dialihkan ke rekomendasi label kosong baru.');
};

function applyTargetCoordinatesToInputs() {
    setElementText('hudTargetBerkas', targetSlotBerkas);
    setElementText('hudTargetAgunan', targetSlotAgunan);

    const inpBerkas = document.getElementById('inputTargetSlotBerkas');
    const inpAgunan = document.getElementById('inputTargetSlotAgunan');

    if (inpBerkas) inpBerkas.value = targetSlotBerkas;
    if (inpAgunan) inpAgunan.value = targetSlotAgunan;
}

/**
 * Tarik Otomatis Data Dokumen Agunan Fisik di Slot
 */
function fetchAndSyncSlotDetails(berkasLabel, agunanLabel) {
    if (!agunanLabel || agunanLabel === '-') {
        agunanItems = [];
        masterHtData = { nomor_ht: '', nilai_tanggungan: 0 };
        renderAgunanTable();
        return;
    }

    const norek = currentRegDebitur?.nomor_rekening || '';
    const cif = currentRegDebitur?.cif || '';
    const namaDeb = currentRegDebitur?.nama_debitur || '';

    const url = `/scanner/check-slot?label_berkas=${encodeURIComponent(berkasLabel)}&label_agunan=${encodeURIComponent(agunanLabel)}&nomor_rekening=${encodeURIComponent(norek)}&cif=${encodeURIComponent(cif)}&nama_debitur=${encodeURIComponent(namaDeb)}`;

    fetch(url)
        .then(res => res.json())
        .then(res => {
            const agData = res.target_agunan_data;

            if (agData && agData.has_data && Array.isArray(agData.items) && agData.items.length > 0) {
                agunanItems = agData.items.map(item => ({
                    jenis_agunan: item.jenis_agunan || 'SHM',
                    nomor_agunan: item.nomor_agunan || '-',
                    atas_nama: item.atas_nama || '-',
                    luas_nopol: item.luas_nopol || '-',
                    letak_agunan: item.letak_agunan || '-',
                    nomor_ht: agData.nomor_ht || '',
                    nilai_tanggungan: agData.nilai_tanggungan || 0
                }));

                masterHtData = {
                    nomor_ht: agData.nomor_ht || '',
                    nilai_tanggungan: agData.nilai_tanggungan || 0
                };

                renderAgunanTable();
            } else {
                // Pertahankan agunan_list bawaan pencarian jika slotnya cocok dengan slot lama
                if (currentSlotMode === 'existing' && currentRegDebitur?.agunan_list && currentRegDebitur.agunan_list.length > 0) {
                    agunanItems = currentRegDebitur.agunan_list.map(it => ({
                        jenis_agunan: it.jenis_agunan || 'SHM',
                        nomor_agunan: it.nomor_agunan || '-',
                        atas_nama: it.atas_nama || '-',
                        luas_nopol: it.luas_nopol || '-',
                        letak_agunan: it.letak_agunan || '-',
                        nomor_ht: it.nomor_ht || '',
                        nilai_tanggungan: it.nilai_tanggungan || 0
                    }));
                } else if (currentSlotMode !== 'existing') {
                    agunanItems = [];
                    masterHtData = { nomor_ht: '', nilai_tanggungan: 0 };
                }
                renderAgunanTable();
            }
        })
        .catch(() => {
            if (currentSlotMode === 'existing' && currentRegDebitur?.agunan_list && currentRegDebitur.agunan_list.length > 0) {
                agunanItems = currentRegDebitur.agunan_list.map(it => ({
                    jenis_agunan: it.jenis_agunan || 'SHM',
                    nomor_agunan: it.nomor_agunan || '-',
                    atas_nama: it.atas_nama || '-',
                    luas_nopol: it.luas_nopol || '-',
                    letak_agunan: it.letak_agunan || '-',
                    nomor_ht: it.nomor_ht || '',
                    nilai_tanggungan: it.nilai_tanggungan || 0
                }));
            }
            renderAgunanTable();
        });
}

// ==============================================================================
// 3. TABEL & KONTROL AGUNAN FISIK (TOMBOL AKSI SOLID DAN JELAS)
// ==============================================================================
function renderAgunanTable() {
    const tbody = document.getElementById('tableBodyAgunan');
    const counter = document.getElementById('countAgunanItems');
    if (counter) counter.innerText = agunanItems.length;

    if (!tbody) return;
    tbody.innerHTML = '';

    if (agunanItems.length === 0) {
        tbody.innerHTML = `
            <tr>
                <td colspan="7" style="text-align: center; color: #94a3b8; padding: 14px;">
                    Belum ada data agunan fisik terlampir. Klik tombol [+ Tambah Agunan].
                </td>
            </tr>
        `;
        return;
    }

    agunanItems.forEach((item, index) => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td style="text-align: center; color: #64748b; font-weight: 800;">${index + 1}</td>
            <td><strong style="color: #0284c7;">${item.jenis_agunan}</strong></td>
            <td style="font-family: 'Consolas', monospace; font-weight: 800;">${item.nomor_agunan}</td>
            <td><strong>${item.atas_nama}</strong></td>
            <td>${item.luas_nopol}</td>
            <td style="max-width: 180px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">${item.letak_agunan}</td>
            <td style="text-align: center; white-space: nowrap;">
                <button type="button" onclick="openEditSubModalAgunan(${index})" style="background: #e0f2fe; color: #0284c7; border: 1px solid #7dd3fc; padding: 3px 9px; border-radius: 5px; font-size: 0.7rem; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 4px; margin-right: 4px;" title="Ubah Data Agunan">
                    <i class="fas fa-edit"></i> Ubah
                </button>
                <button type="button" onclick="confirmHapusAgunanItem(${index})" style="background: #fee2e2; color: #dc2626; border: 1px solid #fca5a5; padding: 3px 9px; border-radius: 5px; font-size: 0.7rem; font-weight: 800; cursor: pointer; display: inline-flex; align-items: center; gap: 4px;" title="Hapus Dokumen Agunan">
                    <i class="fas fa-trash-alt"></i> Hapus
                </button>
            </td>
        `;
        tbody.appendChild(tr);
    });
}

window.toggleTanpaAgunanAction = function (checked) {
    isTanpaAgunanState = checked;
    const content = document.getElementById('wrapperAgunanContent');
    const inpAgunan = document.getElementById('inputTargetSlotAgunan');
    const inpPosisi = document.getElementById('inputPosisiAgunan');
    const hudChip = document.querySelector('.hud-chip.chip-agunan');

    if (checked) {
        if (content) content.style.opacity = '0.4';
        if (content) content.style.pointerEvents = 'none';
        if (inpAgunan) inpAgunan.value = '-';
        if (inpPosisi) inpPosisi.value = 'TANPA AGUNAN';
        if (hudChip) hudChip.style.opacity = '0.4';
        targetSlotAgunan = '-';
        setElementText('hudTargetAgunan', '-');
    } else {
        if (content) content.style.opacity = '1';
        if (content) content.style.pointerEvents = 'auto';
        if (inpPosisi) inpPosisi.value = 'LEMARI';
        if (hudChip) hudChip.style.opacity = '1';
        targetSlotAgunan = (currentSlotMode === 'existing') ? slotLamaAgunan : (currentRegDebitur?.auto_label_agunan || '-');
        applyTargetCoordinatesToInputs();
        fetchAndSyncSlotDetails(targetSlotBerkas, targetSlotAgunan);
    }
};

// ==============================================================================
// 4. SUB-MODAL FORM AGUNAN (TAMBAH & EDIT PREFILLED)
// ==============================================================================
window.openSubModalFormAgunan = function () {
    resetSubModalForm();
    document.getElementById('subAgunanEditIndex').value = '-1';
    setElementText('subModalTitle', 'Entry Dokumen Agunan');
    setElementText('subModalTargetLabelAgunan', targetSlotAgunan);

    // Prefill nama pemilik jika ada debitur aktif
    const inpNama = document.getElementById('subItemNama');
    if (inpNama && currentRegDebitur?.nama_debitur) {
        inpNama.value = currentRegDebitur.nama_debitur.toUpperCase();
    }

    const modal = document.getElementById('subModalFormAgunan');
    if (modal) modal.style.display = 'flex';
};

window.openEditSubModalAgunan = function (index) {
    const item = agunanItems[index];
    if (!item) return;

    resetSubModalForm();
    document.getElementById('subAgunanEditIndex').value = index;
    setElementText('subModalTitle', `Edit Dokumen Agunan #${index + 1}`);
    setElementText('subModalTargetLabelAgunan', targetSlotAgunan);

    // Prefill Hak Tanggungan
    if (item.nomor_ht || masterHtData.nomor_ht) {
        const chkHt = document.getElementById('chkWithHt');
        if (chkHt) {
            chkHt.checked = true;
            toggleHtFields(true);
        }
        const inpHt = document.getElementById('subItemNomorHt');
        const inpNilai = document.getElementById('subItemNilaiHt');
        if (inpHt) inpHt.value = item.nomor_ht || masterHtData.nomor_ht;
        if (inpNilai) {
            const val = item.nilai_tanggungan || masterHtData.nilai_tanggungan || 0;
            inpNilai.value = val ? 'Rp ' + Number(val).toLocaleString('id-ID') : '';
        }
    }

    // Prefill Jenis Agunan
    selectJenisChipByValue(item.jenis_agunan);

    // Prefill Field Dokumen
    const inpNomor = document.getElementById('subItemNomor');
    const inpNama = document.getElementById('subItemNama');
    const inpLuas = document.getElementById('subItemLuas');
    const inpLetak = document.getElementById('subItemLetak');

    if (inpNomor) inpNomor.value = item.nomor_agunan !== '-' ? item.nomor_agunan : '';
    if (inpNama) inpNama.value = item.atas_nama !== '-' ? item.atas_nama : '';
    if (inpLuas) inpLuas.value = item.luas_nopol !== '-' ? item.luas_nopol : '';
    if (inpLetak) inpLetak.value = item.letak_agunan !== '-' ? item.letak_agunan : '';

    const modal = document.getElementById('subModalFormAgunan');
    if (modal) modal.style.display = 'flex';
};

window.closeSubModalFormAgunan = function () {
    const modal = document.getElementById('subModalFormAgunan');
    if (modal) modal.style.display = 'none';
};

function resetSubModalForm() {
    const alertBox = document.getElementById('subModalAlert');
    if (alertBox) alertBox.style.display = 'none';

    const chkHt = document.getElementById('chkWithHt');
    if (chkHt) chkHt.checked = false;
    toggleHtFields(false);

    const inpHt = document.getElementById('subItemNomorHt');
    const inpNilai = document.getElementById('subItemNilaiHt');
    const inpNomor = document.getElementById('subItemNomor');
    const inpNama = document.getElementById('subItemNama');
    const inpNamaGhost = document.getElementById('subItemNamaGhost');
    const inpLuas = document.getElementById('subItemLuas');
    const inpLetak = document.getElementById('subItemLetak');
    const inpLetakGhost = document.getElementById('subItemLetakGhost');
    const chkYmp = document.getElementById('chkYmpPemilik');

    if (inpHt) inpHt.value = '';
    if (inpNilai) inpNilai.value = '';
    if (inpNomor) inpNomor.value = '';
    if (inpNama) inpNama.value = '';
    if (inpNamaGhost) inpNamaGhost.value = '';
    if (inpLuas) inpLuas.value = '';
    if (inpLetak) inpLetak.value = '';
    if (inpLetakGhost) inpLetakGhost.value = '';
    if (chkYmp) chkYmp.checked = false;

    selectJenisChipByValue('SHM');
}

window.toggleHtFields = function (checked) {
    const box = document.getElementById('containerHtInputs');
    const badge = document.getElementById('badgeHtStatus');
    if (box) box.style.display = checked ? 'flex' : 'none';
    if (badge) {
        badge.innerText = checked ? '[DIBEBANKAN HT]' : '[TANPA HT]';
        badge.style.color = checked ? '#0284c7' : '#64748b';
    }
};

window.selectJenisChip = function (jenis, btn) {
    document.querySelectorAll('.jenis-chip-btn').forEach(b => b.classList.remove('chip-active'));
    if (btn) btn.classList.add('chip-active');

    const inpJenis = document.getElementById('subItemJenis');
    const lblJenis = document.getElementById('lblTerpilihJenis');
    const boxManual = document.getElementById('boxInputManualJenis');

    if (jenis === '__MANUAL__') {
        if (boxManual) boxManual.style.display = 'block';
        if (inpJenis) inpJenis.value = '';
        if (lblJenis) lblJenis.innerText = '[MANUAL]';
    } else {
        if (boxManual) boxManual.style.display = 'none';
        if (inpJenis) inpJenis.value = jenis;
        if (lblJenis) lblJenis.innerText = `[${jenis}]`;
    }
};

function selectJenisChipByValue(val) {
    const buttons = document.querySelectorAll('.jenis-chip-btn');
    let matched = false;

    buttons.forEach(b => {
        if (b.innerText.trim().toUpperCase() === val.toUpperCase()) {
            b.click();
            matched = true;
        }
    });

    if (!matched && val) {
        const btnManual = buttons[buttons.length - 1];
        if (btnManual) btnManual.click();
        const inpTxt = document.getElementById('subItemJenisManualText');
        if (inpTxt) inpTxt.value = val;
        const inpJenis = document.getElementById('subItemJenis');
        if (inpJenis) inpJenis.value = val;
    }
}

window.syncManualJenisValue = function (val) {
    const inpJenis = document.getElementById('subItemJenis');
    if (inpJenis) inpJenis.value = val.trim().toUpperCase();
};

window.toggleYmpDebitur = function (checked) {
    const inpNama = document.getElementById('subItemNama');
    if (checked && currentRegDebitur?.nama_debitur && inpNama) {
        inpNama.value = currentRegDebitur.nama_debitur.toUpperCase();
    }
};

window.formatRupiahSubModal = function (input) {
    const val = input.value.replace(/[^0-9]/g, '');
    input.value = val ? 'Rp ' + Number(val).toLocaleString('id-ID') : '';
};

window.handleNomorAgunanBlur = function (input) {
    input.value = input.value.trim().toUpperCase();
};

window.handleLuasNopolBlur = function (input) {
    let val = input.value.trim().toUpperCase();
    const jenis = document.getElementById('subItemJenis')?.value || '';
    if (val && !val.includes('M2') && (jenis === 'SHM' || jenis.includes('AJB') || jenis.includes('PETOK'))) {
        if (!isNaN(val)) val = `${val} M2`;
    }
    input.value = val;
};

window.saveAgunanItemFromSubModal = function () {
    const editIndex = parseInt(document.getElementById('subAgunanEditIndex')?.value || '-1', 10);
    const jenis = (document.getElementById('subItemJenis')?.value || 'SHM').trim();
    const nomor = (document.getElementById('subItemNomor')?.value || '').trim();
    const nama = (document.getElementById('subItemNama')?.value || '').trim();
    const luas = (document.getElementById('subItemLuas')?.value || '').trim();
    const letak = (document.getElementById('subItemLetak')?.value || '').trim();

    const isWithHt = document.getElementById('chkWithHt')?.checked;
    const nomorHt = (document.getElementById('subItemNomorHt')?.value || '').trim();
    const nilaiHtRaw = (document.getElementById('subItemNilaiHt')?.value || '').replace(/[^0-9]/g, '');
    const nilaiHt = nilaiHtRaw ? parseInt(nilaiHtRaw, 10) : 0;

    const alertBox = document.getElementById('subModalAlert');
    const alertText = document.getElementById('subModalAlertText');

    if (!jenis || !nomor || !nama) {
        if (alertBox && alertText) {
            alertText.innerText = 'Jenis agunan, nomor sertifikat/dokumen, dan nama pemilik wajib diisi!';
            alertBox.style.display = 'block';
        }
        return;
    }

    if (isWithHt && (!nomorHt || nilaiHt <= 0)) {
        if (alertBox && alertText) {
            alertText.innerText = 'Nomor akta HT dan nilai pertanggungan wajib diisi jika dibebankan HT!';
            alertBox.style.display = 'block';
        }
        return;
    }

    const itemData = {
        jenis_agunan: jenis.toUpperCase(),
        nomor_agunan: nomor.toUpperCase(),
        atas_nama: nama.toUpperCase(),
        luas_nopol: luas ? luas.toUpperCase() : '-',
        letak_agunan: letak ? letak.toUpperCase() : '-',
        nomor_ht: isWithHt ? nomorHt : '',
        nilai_tanggungan: isWithHt ? nilaiHt : 0
    };

    if (isWithHt) {
        masterHtData = { nomor_ht: nomorHt, nilai_tanggungan: nilaiHt };
    }

    if (editIndex >= 0 && editIndex < agunanItems.length) {
        agunanItems[editIndex] = itemData;
    } else {
        agunanItems.push(itemData);
    }

    closeSubModalFormAgunan();
    renderAgunanTable();
};

// ==============================================================================
// 5. HAPUS AGUNAN
// ==============================================================================
window.confirmHapusAgunanItem = function (index) {
    const item = agunanItems[index];
    if (!item) return;

    deleteAgunanTargetIndex = index;
    setElementText('delPreviewJenis', item.jenis_agunan);
    setElementText('delPreviewNomor', item.nomor_agunan);
    setElementText('delPreviewNama', item.atas_nama);

    const modal = document.getElementById('modalConfirmHapusAgunan');
    if (modal) modal.style.display = 'flex';
};

window.closeConfirmHapusAgunan = function () {
    deleteAgunanTargetIndex = -1;
    const modal = document.getElementById('modalConfirmHapusAgunan');
    if (modal) modal.style.display = 'none';
};

window.executeHapusAgunanItem = function () {
    if (deleteAgunanTargetIndex >= 0 && deleteAgunanTargetIndex < agunanItems.length) {
        agunanItems.splice(deleteAgunanTargetIndex, 1);
        renderAgunanTable();
    }
    closeConfirmHapusAgunan();
};

// ==============================================================================
// 6. MODAL KOORDINAT MANUAL
// ==============================================================================
window.openModalManualSlot = function () {
    parseCoordinatesToInputs('berkas', targetSlotBerkas !== '-' ? targetSlotBerkas : 'I-A-1-1');
    parseCoordinatesToInputs('agunan', targetSlotAgunan !== '-' ? targetSlotAgunan : 'II-A-1-1');

    updateManualSlotPreview('berkas');
    updateManualSlotPreview('agunan');

    const alertBox = document.getElementById('manualSlotAlert');
    if (alertBox) alertBox.style.display = 'none';

    const modal = document.getElementById('subModalManualSlot');
    if (modal) modal.style.display = 'flex';
};

window.closeModalManualSlot = function () {
    const modal = document.getElementById('subModalManualSlot');
    if (modal) modal.style.display = 'none';
};

function parseCoordinatesToInputs(type, code) {
    const parts = (code || '').split('-');
    const prefix = type === 'berkas' ? 'inpManualBerkas' : 'inpManualAgunan';

    const r = document.getElementById(`${prefix}Ruang`);
    const l = document.getElementById(`${prefix}Lemari`);
    const k = document.getElementById(`${prefix}Rak`);
    const u = document.getElementById(`${prefix}Urut`);

    if (r) r.value = parts[0] || (type === 'berkas' ? 'I' : 'II');
    if (l) l.value = parts[1] || 'A';
    if (k) k.value = parts[2] || '1';
    if (u) u.value = parts[3] || '1';
}

window.updateManualSlotPreview = function (type) {
    const prefix = type === 'berkas' ? 'inpManualBerkas' : 'inpManualAgunan';
    const r = (document.getElementById(`${prefix}Ruang`)?.value || '').trim();
    const l = (document.getElementById(`${prefix}Lemari`)?.value || '').trim();
    const k = (document.getElementById(`${prefix}Rak`)?.value || '').trim();
    const u = (document.getElementById(`${prefix}Urut`)?.value || '').trim();

    const formatted = `${r}-${l}-${k}-${u}`.toUpperCase();
    const preview = document.getElementById(type === 'berkas' ? 'previewManualBerkas' : 'previewManualAgunan');
    if (preview) preview.innerText = formatted;
};

window.quickFillSlot = function (type, mode) {
    if (mode === 'recommend') {
        const val = type === 'berkas' ? (currentRegDebitur?.auto_label_berkas || 'I-A-1-1') : (currentRegDebitur?.auto_label_agunan || 'II-A-1-1');
        parseCoordinatesToInputs(type, val);
        updateManualSlotPreview(type);
    }
};

window.applyManualSlotChanges = function () {
    const previewBerkas = document.getElementById('previewManualBerkas')?.innerText || '';
    const previewAgunan = document.getElementById('previewManualAgunan')?.innerText || '';

    if (!previewBerkas || previewBerkas.includes('--')) {
        const alertBox = document.getElementById('manualSlotAlert');
        if (alertBox) alertBox.style.display = 'block';
        return;
    }

    targetSlotBerkas = previewBerkas;
    targetSlotAgunan = isTanpaAgunanState ? '-' : previewAgunan;

    closeModalManualSlot();
    selectSlotMode('manual');
    showCyberNotice(`Koordinat manual berhasil diterapkan: Berkas [${targetSlotBerkas}], Agunan [${targetSlotAgunan}]`);
};

// ==============================================================================
// 7. DIALOG KONFIRMASI SIMPAN (SUPLESI CERDAS & PROTEKSI SIRINE BENTROK)
// ==============================================================================
window.submitRegistrasiLengkap = function () {
    if (!targetSlotBerkas || targetSlotBerkas === '-') {
        showCyberAlert('VALIDASI GAGAL', 'Label berkas fisik wajib ditentukan!');
        return;
    }

    if (!isTanpaAgunanState && (!targetSlotAgunan || targetSlotAgunan === '-')) {
        showCyberAlert('VALIDASI GAGAL', 'Label agunan target belum ditentukan. Jika tanpa jaminan, centang [Tanpa Agunan].');
        return;
    }

    // Tampilkan data ke preview dialog
    setElementText('confDebNama', currentRegDebitur?.nama_debitur || '-');
    setElementText('confDebRekening', currentRegDebitur?.nomor_rekening || '-');
    setElementText('confSlotBerkas', targetSlotBerkas);
    setElementText('confSlotAgunan', targetSlotAgunan);

    const btnExec = document.getElementById('btnExecuteFinalSave');
    const chkOverride = document.getElementById('chkForceOverride');
    const sirenBanner = document.getElementById('bannerSirenHazard');
    const cardBentrokBerkas = document.getElementById('confCardBentrokBerkas');
    const cardBentrokAgunan = document.getElementById('confCardBentrokAgunan');
    const boxDialog = document.getElementById('boxDialogConfirmSimpan');

    // Reset State Dialog
    if (chkOverride) chkOverride.checked = false;
    if (sirenBanner) sirenBanner.style.display = 'none';
    if (cardBentrokBerkas) cardBentrokBerkas.style.display = 'none';
    if (cardBentrokAgunan) cardBentrokAgunan.style.display = 'none';
    if (boxDialog) boxDialog.classList.remove('hazard-siren-mode');
    if (btnExec) {
        btnExec.disabled = false;
        btnExec.style.opacity = '1';
        btnExec.style.cursor = 'pointer';
    }

    // Pengecekan Bentrok ke Server dengan menyertakan CIF dan Nama Debitur (Deteksi Suplesi)
    const norek = currentRegDebitur?.nomor_rekening || '';
    const cif = currentRegDebitur?.cif || '';
    const namaDeb = currentRegDebitur?.nama_debitur || '';

    const urlCheck = `/scanner/check-slot?label_berkas=${encodeURIComponent(targetSlotBerkas)}&label_agunan=${encodeURIComponent(targetSlotAgunan)}&nomor_rekening=${encodeURIComponent(norek)}&cif=${encodeURIComponent(cif)}&nama_debitur=${encodeURIComponent(namaDeb)}`;

    fetch(urlCheck)
        .then(res => res.json())
        .then(res => {
            const hasConflict = res.has_berkas_conflict || res.has_agunan_conflict;

            // KONDISI 1: ADA PENGHUNI LAIN (BENTROK MURNI DENGAN ORANG LAIN)
            if (hasConflict) {
                if (sirenBanner) sirenBanner.style.display = 'flex';
                if (boxDialog) boxDialog.classList.add('hazard-siren-mode');

                // Kunci Tombol Simpan sampai Dicentang
                if (btnExec) {
                    btnExec.disabled = true;
                    btnExec.style.opacity = '0.5';
                    btnExec.style.cursor = 'not-allowed';
                }

                // Tampilkan Data Penghuni Berkas
                if (res.has_berkas_conflict && res.occupant_berkas) {
                    if (cardBentrokBerkas) cardBentrokBerkas.style.display = 'block';
                    setElementText('confBerkasLabel', targetSlotBerkas);
                    setElementText('confBerkasNama', res.occupant_berkas.nama_debitur);
                    setElementText('confBerkasRekening', res.occupant_berkas.nomor_rekening);
                }

                // Tampilkan Data Penghuni Agunan
                if (res.has_agunan_conflict && res.occupant_agunan) {
                    if (cardBentrokAgunan) cardBentrokAgunan.style.display = 'block';
                    setElementText('confAgunanLabel', targetSlotAgunan);
                    setElementText('confAgunanNama', res.occupant_agunan.nama_debitur || 'TERDAFTAR DI SISTEM');
                    setElementText('confAgunanRekening', res.occupant_agunan.nomor_rekening || '-');
                }

            // KONDISI 2: AMAN (SLOT KOSONG MURNI ATAU SUPLESI DENGAN DEBITUR SENDIRI)
            } else {
                if (sirenBanner) sirenBanner.style.display = 'none';
                if (boxDialog) boxDialog.classList.remove('hazard-siren-mode');
                if (btnExec) {
                    btnExec.disabled = false;
                    btnExec.style.opacity = '1';
                    btnExec.style.cursor = 'pointer';
                }
            }

            const dialog = document.getElementById('dialogConfirmSimpan');
            if (dialog) dialog.style.display = 'flex';
        })
        .catch(() => {
            const dialog = document.getElementById('dialogConfirmSimpan');
            if (dialog) dialog.style.display = 'flex';
        });
};

window.closeConfirmDialog = function () {
    const dialog = document.getElementById('dialogConfirmSimpan');
    if (dialog) dialog.style.display = 'none';
};

window.toggleOverrideConfirm = function (checked) {
    const btnExec = document.getElementById('btnExecuteFinalSave');
    if (btnExec) {
        btnExec.disabled = !checked;
        btnExec.style.opacity = checked ? '1' : '0.5';
        btnExec.style.cursor = checked ? 'pointer' : 'not-allowed';
    }
};

window.executeFinalSave = function () {
    const btnExec = document.getElementById('btnExecuteFinalSave');
    if (btnExec) {
        btnExec.disabled = true;
        btnExec.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Menyimpan...`;
    }

    const payload = {
        nomor_rekening: currentRegDebitur?.nomor_rekening,
        cif: currentRegDebitur?.cif,
        nama_debitur: currentRegDebitur?.nama_debitur,
        segmen: currentRegDebitur?.segmen,
        label_berkas: targetSlotBerkas,
        label_agunan: isTanpaAgunanState ? '-' : targetSlotAgunan,
        tanpa_agunan: isTanpaAgunanState,
        is_pindah_slot: (currentSlotMode === 'recommend' || currentSlotMode === 'manual'),
        slot_lama_berkas: slotLamaBerkas,
        slot_lama_agunan: slotLamaAgunan,
        force_override: document.getElementById('chkForceOverride')?.checked || false,
        nomor_ht: masterHtData.nomor_ht,
        nilai_tanggungan: masterHtData.nilai_tanggungan,
        agunan_items: agunanItems
    };

    fetch('/scanner/save-registrasi', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
        },
        body: JSON.stringify(payload)
    })
        .then(res => res.json())
        .then(res => {
            if (btnExec) {
                btnExec.disabled = false;
                btnExec.innerHTML = `<i class="fas fa-check"></i> Ya, Simpan Sekarang`;
            }

            if (res.status === 'success') {
                closeConfirmDialog();
                closeRegistrasiModal();

                showCyberNotice(res.message || 'Berkas berhasil disimpan ke lemari!');

                // Refresh tabel dashboard feed & KPI
                if (typeof fetchTableFeedData === 'function') fetchTableFeedData(true);
                if (typeof loadV3DashboardStats === 'function') loadV3DashboardStats();

            } else {
                showCyberAlert('GAGAL MENYIMPAN', res.message || 'Terjadi kesalahan sistem saat menyimpan registrasi.');
            }
        })
        .catch(() => {
            if (btnExec) {
                btnExec.disabled = false;
                btnExec.innerHTML = `<i class="fas fa-check"></i> Ya, Simpan Sekarang`;
            }
            showCyberAlert('ERROR SERVER', 'Gagal berkomunikasi dengan server backend.');
        });
};

// ==============================================================================
// 8. HELPER AUTOCOMPLETE & NOTICE
// ==============================================================================
function loadAgunanHelpersData() {
    fetch('/scanner/agunan-helpers')
        .then(res => res.json())
        .then(res => {
            if (res.status === 'success') {
                agunanHelpers = res;
                setupGhostAutocomplete();
            }
        })
        .catch(() => {});
}

function setupGhostAutocomplete() {
    setupSingleGhost('subItemNama', 'subItemNamaGhost', agunanHelpers.atas_nama || []);
    setupSingleGhost('subItemLetak', 'subItemLetakGhost', agunanHelpers.letak_agunan || []);
}

function setupSingleGhost(realId, ghostId, suggestionList) {
    const real = document.getElementById(realId);
    const ghost = document.getElementById(ghostId);
    if (!real || !ghost) return;

    real.addEventListener('input', () => {
        const val = real.value.trim().toUpperCase();
        if (!val || suggestionList.length === 0) {
            ghost.value = '';
            return;
        }

        const match = suggestionList.find(s => s.toUpperCase().startsWith(val));
        if (match) {
            ghost.value = real.value + match.substring(real.value.length);
        } else {
            ghost.value = '';
        }
    });

    real.addEventListener('keydown', (e) => {
        if (e.key === 'Tab' && ghost.value) {
            e.preventDefault();
            real.value = ghost.value;
            ghost.value = '';
        }
    });
}

function showCyberNotice(msg) {
    const bar = document.getElementById('regCyberNotice');
    const txt = document.getElementById('regNoticeText');
    if (bar && txt) {
        txt.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
        bar.style.display = 'flex';
        setTimeout(() => hideCyberNotice(), 5000);
    }
}

window.hideCyberNotice = function () {
    const bar = document.getElementById('regCyberNotice');
    if (bar) bar.style.display = 'none';
};

function setElementText(id, val) {
    const el = document.getElementById(id);
    if (el) el.innerText = (val !== null && val !== undefined && val !== '') ? val : '-';
}