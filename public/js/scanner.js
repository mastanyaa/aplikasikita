/**
 * BRIMEN SCANNER V3 - COMPLETE STANDALONE ORCHESTRATOR
 * - Delay Insert: Register scans baru ditulis saat dokumen SPH sukses dipindai.
 * - Auto-Bypass: Berkas DH atau berkas yang sudah pernah discan langsung diarahkan ke Registrasi Lemari.
 * - Lock Waktu: Waktu scan dikunci tepat saat scan selesai, sebelum modal lemari dibuka.
 * - Deteksi Hardware Riil: Membedakan Agent mati dengan Hardware Scanner offline fisik.
 * - Central Staging Folder: Terintegrasi dengan D:\BRIMEN SCAN\BELUM UPLOAD\{subFolder}.
 * - Proteksi Anti-Scan Ganda: Menolak proses pemindaian jika file PDF sudah ada di antrean.
 * - Live Status Monitor: Menampilkan indikator online/offline scanner di dashboard baris input.
 */

let activeDebitur = null;
let searchDebounceTimer = null;

const LOCAL_AGENT_URL = 'http://127.0.0.1:3000';
let activeScanAbortController = null;
let computedFolderPath = '';
let feederPollInterval = null;

let currentDocQueue = [];
let currentQueueIndex = 0;
let totalSheetsCount = 0;
let countdownTimer = null;
let introDebiturTimer = null;
let remainingSeconds = 15;
let remainingIntroSeconds = 10;
let isExecutingScan = false;

let scanStartTime = null;
let scannedDocsDetail = [];

let currentFeedTab = 'pending';
let currentTablePage = 1;
let isTableLoading = false;
let hasMoreTableData = true;
let searchTableDebounce = null;
let currentSearchKeyword = '';

let playerXP = parseInt(localStorage.getItem('brimen_scanner_xp') || '0');
let playerLevel = parseInt(localStorage.getItem('brimen_scanner_lvl') || '1');
let currentStreak = parseInt(localStorage.getItem('brimen_scanner_streak') || '1');

let audioCtx = null;
let isAudioEnabled = true;
let isVoiceEnabled = true;
let isLofiPlaying = false;
let lofiInterval = null;

let speechRecognizer = null;
let isListening = false;

function formatTanggalIndo(tglStr) {
    if (!tglStr || tglStr === '-' || tglStr === 'NULL') return '-';
    try {
        const parts = tglStr.trim().split(/[-/]/);
        if (parts.length === 3) {
            if (parts[0].length === 4) {
                return `${parts[2].padStart(2, '0')}/${parts[1].padStart(2, '0')}/${parts[0]}`;
            } else if (parts[2].length === 4) {
                return `${parts[0].padStart(2, '0')}/${parts[1].padStart(2, '0')}/${parts[2]}`;
            }
        }
    } catch (e) { }
    return tglStr;
}

function resetStampDisplay() {
    const stamp = document.getElementById('stampSlamBadge');
    if (stamp) {
        stamp.classList.remove('anim-slam');
        stamp.style.display = 'none';
    }
}

function cancelAndCloseScannerModal() {
    stopFeederAutoSensorWatch();
    clearInterval(introDebiturTimer);
    clearInterval(countdownTimer);
    isExecutingScan = false;

    scanStartTime = null;
    scannedDocsDetail = [];

    if (activeScanAbortController) {
        activeScanAbortController.abort();
        activeScanAbortController = null;
    }

    if ('speechSynthesis' in window) window.speechSynthesis.cancel();

    const paper = document.getElementById('animPaperSheet');
    const laser = document.getElementById('animLaserBeam');
    if (paper) paper.classList.remove('anim-paper-scan-glide');
    if (laser) laser.classList.remove('anim-laser-active');

    resetStampDisplay();

    const modal = document.getElementById('modalScannerMonitor');
    if (modal) modal.style.display = 'none';

    const inputMain = document.getElementById('inputNomorRekening');
    if (inputMain) {
        inputMain.value = '';
        inputMain.focus();
    }

    const statusEl = document.getElementById('v3TriggerStatus');
    if (statusEl) {
        statusEl.innerHTML = `<span>Siap memproses nomor rekening berikutnya...</span>`;
    }
}

function initAudio() {
    if (!audioCtx) {
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        audioCtx = new AudioContext();
    }
    if (audioCtx && audioCtx.state === 'suspended') {
        audioCtx.resume();
    }
}

function playTone(freq, type = 'sine', duration = 0.08, vol = 0.05) {
    if (!isAudioEnabled) return;
    try {
        initAudio();
        const osc = audioCtx.createOscillator();
        const gain = audioCtx.createGain();
        osc.type = type;
        osc.frequency.setValueAtTime(freq, audioCtx.currentTime);
        gain.gain.setValueAtTime(vol, audioCtx.currentTime);
        gain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + duration);
        osc.connect(gain);
        gain.connect(audioCtx.destination);
        osc.start();
        osc.stop(audioCtx.currentTime + duration);
    } catch (e) { }
}

const SoundFX = {
    beepTick: () => playTone(880, 'sine', 0.04, 0.03),
    scanSweep: () => {
        if (!isAudioEnabled) return;
        try {
            initAudio();
            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.type = 'triangle';
            osc.frequency.setValueAtTime(180, audioCtx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(740, audioCtx.currentTime + 0.3);
            gain.gain.setValueAtTime(0.03, audioCtx.currentTime);
            gain.gain.linearRampToValueAtTime(0.001, audioCtx.currentTime + 0.3);
            osc.connect(gain);
            gain.connect(audioCtx.destination);
            osc.start();
            osc.stop(audioCtx.currentTime + 0.3);
        } catch (e) { }
    },
    stampSlam: () => {
        if (!isAudioEnabled) return;
        try {
            initAudio();
            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.type = 'sawtooth';
            osc.frequency.setValueAtTime(120, audioCtx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(30, audioCtx.currentTime + 0.18);
            gain.gain.setValueAtTime(0.12, audioCtx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.18);
            osc.connect(gain);
            gain.connect(audioCtx.destination);
            osc.start();
            osc.stop(audioCtx.currentTime + 0.18);
        } catch (e) { }
    },
    victoryChord: () => {
        if (!isAudioEnabled) return;
        const chord = [523.25, 659.25, 783.99, 1046.50];
        chord.forEach((n, i) => setTimeout(() => playTone(n, 'sine', 0.4, 0.06), i * 100));
    }
};

function toggleLofiBeats() {
    initAudio();
    isLofiPlaying = !isLofiPlaying;
    const txt = document.getElementById('lofiStatusText');
    if (isLofiPlaying) {
        if (txt) txt.innerText = 'LO-FI ON';
        const chordProgression = [
            [261.63, 329.63, 392.00],
            [220.00, 261.63, 329.63],
            [174.61, 220.00, 261.63],
            [196.00, 246.94, 293.66]
        ];
        let chordIdx = 0;
        lofiInterval = setInterval(() => {
            if (!isLofiPlaying) return;
            const currentChord = chordProgression[chordIdx % chordProgression.length];
            chordIdx++;
            currentChord.forEach(f => playTone(f, 'sine', 1.8, 0.015));
        }, 3000);
    } else {
        if (txt) txt.innerText = 'LO-FI OFF';
        if (lofiInterval) clearInterval(lofiInterval);
    }
}

function toggleAudioFx() {
    isAudioEnabled = !isAudioEnabled;
    const icon = document.getElementById('soundIcon');
    if (icon) icon.className = isAudioEnabled ? 'fas fa-volume-up' : 'fas fa-volume-mute';
}

function toggleVoiceSpeech() {
    isVoiceEnabled = !isVoiceEnabled;
    const txt = document.getElementById('voiceStatusText');
    if (txt) txt.innerText = isVoiceEnabled ? 'VOICE ON' : 'VOICE OFF';
    if (!isVoiceEnabled && 'speechSynthesis' in window) window.speechSynthesis.cancel();
}

function speakRobo(text) {
    if (!isVoiceEnabled || !('speechSynthesis' in window)) return;
    window.speechSynthesis.cancel();

    const cleanText = text.replace(/<[^>]*>?/gm, '');
    const utter = new SpeechSynthesisUtterance(cleanText);
    utter.lang = 'id-ID';
    utter.rate = 1.15;
    utter.pitch = 1.25;
    window.speechSynthesis.speak(utter);
}

function initSpeechRecognizer() {
    const SpeechRec = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!SpeechRec) return;

    speechRecognizer = new SpeechRec();
    speechRecognizer.lang = 'id-ID';
    speechRecognizer.continuous = false;
    speechRecognizer.interimResults = false;

    speechRecognizer.onstart = () => {
        isListening = true;
        const txt = document.getElementById('micListenText');
        if (txt) txt.innerText = 'Mendengarkan...';
    };

    speechRecognizer.onresult = (event) => {
        const spokenText = event.results[0][0].transcript.toLowerCase();
        handleSpokenInput(spokenText);
    };

    speechRecognizer.onerror = () => stopListening();
    speechRecognizer.onend = () => stopListening();
}

function toggleVoiceListening() {
    if (!speechRecognizer) initSpeechRecognizer();
    if (!speechRecognizer) {
        showCyberAlert('FITUR SUARA', 'Browser Anda belum mendukung modul mikrofon langsung. Silakan gunakan tombol percakapan cepat.');
        return;
    }
    if (isListening) {
        speechRecognizer.stop();
        stopListening();
    } else {
        try { speechRecognizer.start(); } catch (e) { stopListening(); }
    }
}

function stopListening() {
    isListening = false;
    const txt = document.getElementById('micListenText');
    if (txt) txt.innerText = 'Ajak Bicara';
}

function triggerSmallTalk(topic) {
    const responses = {
        capek: { text: 'Tarik napas dulu kawan! Minum kopi dulu biar gak tegang!', speak: 'Tarik napas dulu! Minum kopi dulu kawan, jangan tegang!' },
        ngopi: { text: 'Setuju banget! Secangkir kopi bikin mata melek dan berkas lekas beres!', speak: 'Setuju! Secangkir kopi bikin mata melek dan berkas beres!' },
        semangat: { text: 'Kamu keren banget hari ini! Skill kamu udah setara operator level dewa!', speak: 'Kamu keren banget hari ini! Semangat terus kawan!' }
    };
    const item = responses[topic] || { text: 'Aku siap mendampingi kamu opname berkas!', speak: 'Aku siap mendampingi kamu!' };
    setBotEmotion('waiting', item.text, item.speak);
}

function handleSpokenInput(text) {
    if (text.includes('capek')) triggerSmallTalk('capek');
    else if (text.includes('kopi')) triggerSmallTalk('ngopi');
    else triggerSmallTalk('semangat');
}

// ==============================================================================
// PEMANTAU LIVE STATUS SCANNER DI DASHBOARD (SEBELAH KIRI COMMAND V3)
// ==============================================================================
function checkDashboardScannerStatus() {
    const pill = document.getElementById('pillScannerStatus');
    const dot = document.getElementById('dotScannerStatus');
    const txt = document.getElementById('textScannerStatus');
    if (!pill || !dot || !txt) return;

    fetch(`${LOCAL_AGENT_URL}/health`, { signal: AbortSignal.timeout(2000) })
        .then(res => res.json())
        .then(data => {
            if (data.scanner_connected) {
                dot.style.background = '#10b981';
                dot.style.boxShadow = '0 0 6px rgba(16, 185, 129, 0.5)';
                txt.innerText = 'SCANNER ONLINE';
                pill.style.color = '#15803d';
                pill.style.borderColor = '#bbf7d0';
                pill.style.background = '#f0fdf4';
            } else {
                dot.style.background = '#ef4444';
                dot.style.boxShadow = '0 0 6px rgba(239, 68, 68, 0.5)';
                txt.innerText = 'SCANNER OFFLINE';
                pill.style.color = '#b91c1c';
                pill.style.borderColor = '#fecaca';
                pill.style.background = '#fef2f2';
            }
        })
        .catch(() => {
            dot.style.background = '#f59e0b';
            dot.style.boxShadow = 'none';
            txt.innerText = 'AGENT OFFLINE';
            pill.style.color = '#b45309';
            pill.style.borderColor = '#fde68a';
            pill.style.background = '#fffbeb';
        });
}

function onInputRekeningV3(query) {
    clearTimeout(searchDebounceTimer);
    const q = query.trim();

    if (q.length < 5) {
        document.getElementById('v3TriggerStatus').innerHTML = `
            <span>Siap memproses berkas debitur. Masukkan minimal 5 digit...</span>
        `;
        return;
    }

    document.getElementById('v3TriggerStatus').innerHTML = `
        <span style="color: #f59e0b;"><i class="fas fa-spinner fa-spin"></i> Memeriksa data rekening ${q}...</span>
    `;

    searchDebounceTimer = setTimeout(() => {
        fetch(`/scanner/search?q=${encodeURIComponent(q)}`)
            .then(res => res.json())
            .then(res => {
                if (res.status === 'success' && res.data && res.data.length > 0) {
                    const item = res.data[0];
                    activeDebitur = item;

                    scannedDocsDetail = [];
                    window.scannedDocsDetail = [];

                    if (item.status_sumber === 'DH' || item.source_table === 'data_lw325ph') {
                        document.getElementById('v3TriggerStatus').innerHTML = `
                            <span style="color: #7e22ce; font-weight: 900;"><i class="fas fa-history"></i> BERKAS DH TERDETEKSI. MEMBUKA REGISTRASI LEMARI...</span>
                        `;
                        speakRobo(`Berkas ${item.nama_debitur} berstatus hapus buku. Langsung membuka registrasi lemari.`);

                        setTimeout(() => {
                            if (typeof openRegistrasiModal === 'function') openRegistrasiModal(item);
                        }, 300);

                    } else if (item.status_scan_db === 'SCAN BERHASIL') {
                        document.getElementById('v3TriggerStatus').innerHTML = `
                            <span style="color: #15803d; font-weight: 900;"><i class="fas fa-check-double"></i> BERKAS SUDAH SELESAI SCAN. MEMBUKA REGISTRASI LEMARI...</span>
                        `;
                        speakRobo(`Berkas ${item.nama_debitur} sudah selesai dipindai. Langsung membuka registrasi lemari.`);

                        setTimeout(() => {
                            if (typeof openRegistrasiModal === 'function') openRegistrasiModal(item);
                        }, 300);

                    } else {
                        document.getElementById('v3TriggerStatus').innerHTML = `
                            <span style="color: #15803d; font-weight: 900;"><i class="fas fa-check"></i> DEBITUR DITEMUKAN: ${item.nama_debitur}</span>
                        `;
                        openScannerModal(item);
                    }

                } else {
                    document.getElementById('v3TriggerStatus').innerHTML = `
                        <span style="color: #dc2626;"><i class="fas fa-times"></i> Rekening [${q}] tidak ditemukan di data harian maupun PH!</span>
                    `;
                }
            })
            .catch(err => {
                console.error('[SEARCH ERROR]', err);
                document.getElementById('v3TriggerStatus').innerHTML = `
                    <span style="color: #dc2626;"><i class="fas fa-exclamation-triangle"></i> Gagal memeriksa rekening.</span>
                `;
            });
    }, 400);
}

async function openScannerModal(item) {
    const modal = document.getElementById('modalScannerMonitor');
    if (modal) modal.style.display = 'flex';

    fetch(`${LOCAL_AGENT_URL}/health`, { signal: AbortSignal.timeout(2000) })
        .then(res => res.json())
        .then(agentInfo => {
            if (!agentInfo.naps2_found) {
                showCyberAlert('NAPS2 TIDAK DITEMUKAN', 'NAPS Console tidak terdeteksi di direktori program PC operator.');
            } else if (agentInfo.scanner_connected === false) {
                showCyberAlert(
                    'HARDWARE SCANNER OFFLINE',
                    'Kabel USB scanner fisik tidak terdeteksi oleh Windows atau daya scanner dalam posisi mati. Pastikan kabel USB terpasang erat dan tombol power scanner menyala!'
                );
            }
        })
        .catch(() => {
            showCyberAlert(
                'AGENT SERVICE BELUM AKTIF',
                'Aplikasi background Agent lokal (Port 3000) belum dijalankan. Jalankan "node agent.js" di terminal PC operator terlebih dahulu.'
            );
        });

    const now = new Date();
    const pad = (n) => String(n).padStart(2, '0');
    scanStartTime = `${now.getFullYear()}-${pad(now.getMonth() + 1)}-${pad(now.getDate())} ${pad(now.getHours())}:${pad(now.getMinutes())}:${pad(now.getSeconds())}`;
    scannedDocsDetail = [];

    const isKur = !!item.is_kur;
    const badgeEl = document.getElementById('modalBadgeSegmen');
    if (badgeEl) {
        badgeEl.className = isKur ? 'badge-segment badge-segment-kur' : 'badge-segment badge-segment-nonkur';
        badgeEl.innerText = `SEGMEN: ${(item.segmen || (isKur ? 'KUR' : 'NON-KUR')).toUpperCase()}`;
    }

    const setSafe = (id, val) => {
        const el = document.getElementById(id);
        if (el) el.innerText = (val !== null && val !== undefined && val !== '') ? val : '-';
    };

    setSafe('modalDebNama', item.nama_debitur);
    setSafe('modalDebRekening', item.nomor_rekening);
    setSafe('modalDebCif', item.cif);
    setSafe('modalDebPlafond', item.plafon ? 'Rp ' + Number(item.plafon).toLocaleString('id-ID') : '-');
    setSafe('modalDebTglReal', formatTanggalIndo(item.tgl_realisasi));
    setSafe('modalDebAo', item.pn_pengelola);

    computedFolderPath = item.scan_output_folder || 'D:\\BRIMEN SCAN\\BELUM UPLOAD';
    setSafe('modalTargetFolderPath', computedFolderPath);

    const cleanRek = String(item.nomor_rekening || '').replace(/[^0-9]/g, '');

    if (isKur) {
        currentDocQueue = [
            { code: 'SPH', fullName: 'Surat Pengakuan Hutang', label: `1_SPH_${cleanRek}.PDF`, isMandatory: true, status: 'WAIT' },
            { code: 'SP', fullName: 'Surat Permohonan', label: `2_SP_${cleanRek}.PDF`, isMandatory: true, status: 'WAIT' }
        ];
    } else {
        currentDocQueue = [
            { code: 'SPH', fullName: 'Surat Pengakuan Hutang', label: `1_SPH_${cleanRek}.PDF`, isMandatory: true, status: 'WAIT' },
            { code: 'SP', fullName: 'Surat Permohonan', label: `2_SP_${cleanRek}.PDF`, isMandatory: true, status: 'WAIT' },
            { code: 'RIPLAY', fullName: 'Ringkasan Informasi Produk', label: `3_RIPLAY_${cleanRek}.PDF`, isMandatory: false, status: 'WAIT' },
            { code: 'BAST', fullName: 'Berita Acara Serah Terima', label: `4_BAST_${cleanRek}.PDF`, isMandatory: false, status: 'WAIT' }
        ];
    }

    currentQueueIndex = 0;
    totalSheetsCount = 0;
    setSafe('modalSheetCounter', '0');

    resetStampDisplay();
    renderManifestRows();
    renderRealDocumentVisual(currentDocQueue[0]);
    start10SecondsIntro(item);
}

function renderRealDocumentVisual(doc) {
    resetStampDisplay();
    const titleEl = document.getElementById('paperDocTitle');
    const debEl = document.getElementById('paperDocDebitur');
    const plafEl = document.getElementById('paperDocPlafond');

    if (titleEl) titleEl.innerText = doc.fullName.toUpperCase();
    if (debEl) debEl.innerText = `Debitur: ${activeDebitur?.nama_debitur || '-'}`;
    if (plafEl) plafEl.innerText = `Plafond: ${activeDebitur?.plafon ? 'Rp ' + Number(activeDebitur.plafon).toLocaleString('id-ID') : '-'}`;
}

function renderManifestRows() {
    const container = document.getElementById('modalManifestContainer');
    const summary = document.getElementById('manifestCountSummary');
    if (!container) return;

    container.innerHTML = '';
    let completedCount = 0;

    currentDocQueue.forEach(doc => {
        if (doc.status === 'DONE' || doc.status === 'SKIPPED') completedCount++;

        const row = document.createElement('div');
        row.className = `manifest-row ${doc.status === 'DONE' ? 'done' : (doc.status === 'ACTIVE' ? 'active' : (doc.status === 'SKIPPED' ? 'skipped' : ''))}`;

        let statusBadge = '<span style="color:#64748b;">[MENUNGGU]</span>';
        if (doc.status === 'ACTIVE') statusBadge = '<span style="color:#2563eb; font-weight:800;">[MEMINDAI...]</span>';
        if (doc.status === 'DONE') statusBadge = '<span style="color:#15803d;"><i class="fas fa-check-circle"></i> SUKSES</span>';
        if (doc.status === 'SKIPPED') statusBadge = '<span style="color:#94a3b8;">[DILEWATI]</span>';

        row.innerHTML = `
            <div style="display:flex; flex-direction:column;">
                <span>${doc.label}</span>
                <small style="color:#64748b; font-size:0.65rem;">${doc.fullName}</small>
            </div>
            <span>${statusBadge}</span>
        `;
        container.appendChild(row);
    });

    if (summary) summary.innerText = `${completedCount}/${currentDocQueue.length} BERKAS`;
}

function start10SecondsIntro(item) {
    clearInterval(introDebiturTimer);
    clearInterval(countdownTimer);
    remainingIntroSeconds = 10;
    resetStampDisplay();

    const timerText = document.getElementById('modalTimerText');
    const timerNum = document.getElementById('modalTimerNumber');
    const progressFill = document.getElementById('modalProgressBar');
    const liveStatus = document.getElementById('modalScanLiveStatus');

    if (liveStatus) liveStatus.innerHTML = `<span class="pulse-dot"></span><span>Menyiapkan berkas ${item.nama_debitur}...</span>`;
    if (timerText) timerText.innerText = `Validasi Debitur: Masukkan lembar Surat Pengakuan Hutang (SPH)...`;
    if (timerNum) timerNum.innerText = `${remainingIntroSeconds}s`;
    if (progressFill) progressFill.style.width = '100%';

    const nominalPlafond = item.plafon ? 'Rp ' + Number(item.plafon).toLocaleString('id-ID') : '';
    setBotEmotion(
        'waiting',
        `Halo! Ini berkas atas nama <strong>${item.nama_debitur}</strong>, plafond <strong>${nominalPlafond}</strong>. Masukkan lembar <strong>Surat Pengakuan Hutang (SPH)</strong> ke feeder scanner...`,
        `Halo! Ini berkas atas nama ${item.nama_debitur}. Persiapkan Dokumen Yang Akan Di-Scan!`
    );

    startFeederAutoSensorWatch();

    introDebiturTimer = setInterval(() => {
        remainingIntroSeconds--;
        if (timerNum) timerNum.innerText = `${remainingIntroSeconds}s`;
        if (progressFill) progressFill.style.width = `${(remainingIntroSeconds / 10) * 100}%`;

        if (remainingIntroSeconds <= 0) {
            clearInterval(introDebiturTimer);
            start15SecondsCountdown(0);
        }
    }, 1000);
}

function start15SecondsCountdown(index) {
    clearInterval(countdownTimer);
    remainingSeconds = 15;
    resetStampDisplay();

    const doc = currentDocQueue[index];
    currentQueueIndex = index;
    renderRealDocumentVisual(doc);

    const timerText = document.getElementById('modalTimerText');
    const timerNum = document.getElementById('modalTimerNumber');
    const progressFill = document.getElementById('modalProgressBar');
    const liveStatus = document.getElementById('modalScanLiveStatus');
    const optActions = document.getElementById('modalOptionalActions');

    if (optActions) optActions.style.display = !doc.isMandatory ? 'flex' : 'none';

    if (liveStatus) liveStatus.innerHTML = `<span class="pulse-dot"></span><span>Menunggu kertas ${doc.code} di feeder...</span>`;
    if (timerText) timerText.innerText = `Jeda siapkan ${doc.fullName} (${doc.code}): Masukkan ke feeder...`;
    if (timerNum) timerNum.innerText = `${remainingSeconds}s`;
    if (progressFill) progressFill.style.width = '100%';

    setBotEmotion('waiting', `Masukkan lembar <strong>${doc.fullName} (${doc.code})</strong> ke feeder scanner!`, `Masukkan ${doc.fullName} ke scanner!`);
    startFeederAutoSensorWatch();

    countdownTimer = setInterval(() => {
        remainingSeconds--;
        if (timerNum) timerNum.innerText = `${remainingSeconds}s`;
        if (progressFill) progressFill.style.width = `${(remainingSeconds / 15) * 100}%`;

        if (remainingSeconds <= 0) {
            clearInterval(countdownTimer);
            startDocProcess(index);
        }
    }, 1000);
}

function startFeederAutoSensorWatch() {
    stopFeederAutoSensorWatch();
    feederPollInterval = setInterval(async () => {
        if (isExecutingScan) return;
        try {
            const res = await fetch(`${LOCAL_AGENT_URL}/feeder-status`, { signal: AbortSignal.timeout(2500) });
            if (res.ok) {
                const data = await res.json();
                const liveStatus = document.getElementById('modalScanLiveStatus');

                if (data.scanner_connected === false) {
                    if (liveStatus) {
                        liveStatus.innerHTML = `<span style="color:#dc2626; font-weight:800;"><i class="fas fa-plug"></i> HARDWARE SCANNER OFFLINE (Periksa USB / Daya)</span>`;
                    }
                    return;
                }

                if (data.scanner_connected === true && liveStatus && liveStatus.innerText.includes('HARDWARE SCANNER OFFLINE')) {
                    const doc = currentDocQueue[currentQueueIndex];
                    liveStatus.innerHTML = `<span class="pulse-dot"></span><span>Menunggu kertas ${doc ? doc.code : ''} di feeder...</span>`;
                }

                if (data.has_paper && !isExecutingScan) {
                    stopFeederAutoSensorWatch();
                    triggerImmediateScan();
                }
            }
        } catch (e) {
            const liveStatus = document.getElementById('modalScanLiveStatus');
            if (liveStatus && !isExecutingScan) {
                liveStatus.innerHTML = `<span style="color:#f59e0b; font-weight:800;"><i class="fas fa-exclamation-circle"></i> AGENT PORT 3000 TERPUTUS</span>`;
            }
        }
    }, 1500);
}

function stopFeederAutoSensorWatch() {
    if (feederPollInterval) {
        clearInterval(feederPollInterval);
        feederPollInterval = null;
    }
}

function triggerImmediateScan() {
    if (isExecutingScan) return;
    stopFeederAutoSensorWatch();
    clearInterval(introDebiturTimer);
    clearInterval(countdownTimer);
    SoundFX.beepTick();
    startDocProcess(currentQueueIndex);
}

async function startDocProcess(index) {
    if (index >= currentDocQueue.length) {
        finishAllScans();
        return;
    }

    isExecutingScan = true;
    stopFeederAutoSensorWatch();
    clearInterval(countdownTimer);
    resetStampDisplay();

    currentQueueIndex = index;
    const doc = currentDocQueue[index];
    doc.status = 'ACTIVE';
    renderManifestRows();

    const paper = document.getElementById('animPaperSheet');
    const laser = document.getElementById('animLaserBeam');
    const optActions = document.getElementById('modalOptionalActions');
    if (optActions) optActions.style.display = 'none';

    SoundFX.scanSweep();
    setBotEmotion('eating', `Scanner sedang menarik lembar <strong>${doc.fullName} (${doc.code})</strong>...`);

    if (paper) paper.classList.add('anim-paper-scan-glide');
    if (laser) laser.classList.add('anim-laser-active');

    activeScanAbortController = new AbortController();

    try {
        const response = await fetch(`${LOCAL_AGENT_URL}/scan`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                folder: computedFolderPath,
                filename: doc.label,
                doc_code: doc.code,
                doc_name: doc.fullName
            }),
            signal: activeScanAbortController.signal
        });

        const resData = await response.json();

        if (paper) paper.classList.remove('anim-paper-scan-glide');
        if (laser) laser.classList.remove('anim-laser-active');
        isExecutingScan = false;

        if (response.ok && resData.status === 'success') {
            const physicalSheets = resData.sheets || 1;
            totalSheetsCount += physicalSheets;

            const counterEl = document.getElementById('modalSheetCounter');
            if (counterEl) {
                counterEl.innerText = totalSheetsCount;
                counterEl.classList.add('anim-pop');
                setTimeout(() => counterEl.classList.remove('anim-pop'), 400);
            }

            scannedDocsDetail.push({
                kode: doc.code,
                nama_dokumen: doc.fullName,
                file_name: doc.label,
                lembar_fisik: physicalSheets,
                waktu_scan: new Date().toLocaleTimeString('id-ID')
            });

            window.scannedDocsDetail = scannedDocsDetail;

            if (doc.code === 'SPH' && activeDebitur) {
                fetch('/scanner/start-scan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                    },
                    body: JSON.stringify({
                        nomor_rekening: activeDebitur.nomor_rekening,
                        cif: activeDebitur.cif,
                        nama_debitur: activeDebitur.nama_debitur,
                        segmen: activeDebitur.segmen,
                        target_folder: computedFolderPath,
                        waktu_mulai: scanStartTime,
                        total_lembar: totalSheetsCount,
                        detail_dokumen: scannedDocsDetail
                    })
                }).catch(() => {});
            }

            triggerStampSlam();
            doc.status = 'DONE';
            renderManifestRows();

            setTimeout(() => {
                if (index + 1 < currentDocQueue.length) {
                    start15SecondsCountdown(index + 1);
                } else {
                    finishAllScans();
                }
            }, 1200);

        } else {
            handleScanFailure(index, resData.message || 'Gagal memindai lembar fisik');
        }
    } catch (err) {
        if (paper) paper.classList.remove('anim-paper-scan-glide');
        if (laser) laser.classList.remove('anim-laser-active');
        isExecutingScan = false;

        if (err.name !== 'AbortError') {
            handleScanFailure(index, 'Koneksi ke Agent Port 3000 terputus');
        }
    }
}

function handleScanFailure(index, errorMsg) {
    isExecutingScan = false;
    resetStampDisplay();

    const doc = currentDocQueue[index];
    const liveStatus = document.getElementById('modalScanLiveStatus');
    if (liveStatus) {
        liveStatus.innerHTML = `<span style="color:#dc2626;"><i class="fas fa-exclamation-triangle"></i> ${errorMsg}</span>`;
    }

    const errLower = errorMsg.toLowerCase();

    if (errLower.includes('sudah ada di antrean') || errLower.includes('tidak dapat diproses 2x')) {
        setBotEmotion('waiting', `Berkas <strong>${doc.code}</strong> sudah ada di antrean BELUM UPLOAD! Lewati atau periksa folder.`, 'Berkas sudah ada di antrean belum upload.');
        showCyberAlert('BERKAS SUDAH DI-SCAN', errorMsg);
    } else if (errLower.includes('hardware') || errLower.includes('tidak terdeteksi') || errLower.includes('offline') || errLower.includes('usb')) {
        setBotEmotion('waiting', `Hardware scanner fisik mati atau kabel USB terlepas!`, 'Scanner fisik tidak terhubung.');
        showCyberAlert('HARDWARE SCANNER OFFLINE', errorMsg);
    } else {
        setBotEmotion('waiting', `Feeder kosong. Masukkan kertas ${doc.code}, scanner otomatis menarik!`, 'Pindai gagal, periksa scanner!');
    }

    const optActions = document.getElementById('modalOptionalActions');
    const btnSkip = document.getElementById('btnSkipDoc');

    if (optActions) {
        optActions.style.display = 'flex';
        if (btnSkip) btnSkip.style.display = 'inline-flex';
    }

    startFeederAutoSensorWatch();
}

function skipOptionalDoc() {
    clearInterval(countdownTimer);
    resetStampDisplay();
    if (currentQueueIndex < currentDocQueue.length) {
        currentDocQueue[currentQueueIndex].status = 'SKIPPED';
        renderManifestRows();
        startDocProcess(currentQueueIndex + 1);
    }
}

function retryCurrentDoc() {
    clearInterval(countdownTimer);
    resetStampDisplay();
    startDocProcess(currentQueueIndex);
}

function finishAllScans() {
    stopFeederAutoSensorWatch();
    clearInterval(countdownTimer);
    clearInterval(introDebiturTimer);
    isExecutingScan = false;

    if (activeDebitur) {
        fetch('/scanner/finish-scan', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
            },
            body: JSON.stringify({
                nomor_rekening: activeDebitur.nomor_rekening,
                total_lembar: totalSheetsCount,
                detail_dokumen: scannedDocsDetail
            })
        }).catch(() => {});
    }

    currentStreak++;
    localStorage.setItem('brimen_scanner_streak', currentStreak);
    updateXPDisplay();

    SoundFX.victoryChord();
    triggerCyberConfetti();

    setBotEmotion('celebrate', `🎉 <strong>SELESAI!</strong> Seluruh lembar berkas ${activeDebitur?.nama_debitur || ''} berhasil dipindai!`, 'Selesai! Berkas siap masuk lemari.');

    setTimeout(() => {
        const modal = document.getElementById('modalScannerMonitor');
        if (modal) modal.style.display = 'none';

        if (typeof openRegistrasiModal === 'function') {
            openRegistrasiModal(activeDebitur);
        }
    }, 2000);
}

window.switchTableFeedMode = function (tabMode) {
    if (currentFeedTab === tabMode) return;
    currentFeedTab = tabMode;

    const btnPending = document.getElementById('tabPendingUpload');
    const btnAll = document.getElementById('tabAllRegister');

    if (tabMode === 'pending') {
        if (btnPending) btnPending.className = 'btn-toggle-tab active-amber';
        if (btnAll) btnAll.className = 'btn-toggle-tab';
    } else {
        if (btnPending) btnPending.className = 'btn-toggle-tab';
        if (btnAll) btnAll.className = 'btn-toggle-tab active-cyan';
    }

    currentTablePage = 1;
    hasMoreTableData = true;
    fetchTableFeedData(true);
};

window.onSearchTableInput = function (keyword) {
    clearTimeout(searchTableDebounce);
    searchTableDebounce = setTimeout(() => {
        currentSearchKeyword = keyword.trim();
        currentTablePage = 1;
        hasMoreTableData = true;
        fetchTableFeedData(true);
    }, 350);
};

window.handleTableInfiniteScroll = function (container) {
    if (isTableLoading || !hasMoreTableData) return;
    if (container.scrollTop + container.clientHeight >= container.scrollHeight - 40) {
        currentTablePage++;
        fetchTableFeedData(false);
    }
};

function fetchTableFeedData(isReset = false) {
    if (isTableLoading) return;
    isTableLoading = true;

    const loader = document.getElementById('tableInfiniteLoader');
    const tbody = document.getElementById('v3FeedTableBody');
    if (loader) loader.style.display = 'block';

    const url = `/scanner/register-data?tab=${currentFeedTab}&page=${currentTablePage}&search=${encodeURIComponent(currentSearchKeyword)}`;

    fetch(url)
        .then(res => res.json())
        .then(res => {
            isTableLoading = false;
            if (loader) loader.style.display = 'none';

            if (res.status === 'success') {
                hasMoreTableData = res.has_more;

                if (currentFeedTab === 'pending') {
                    setSafeElText('badgeTabPendingCount', res.total);
                } else {
                    setSafeElText('badgeTabAllCount', res.total);
                }

                if (isReset && tbody) {
                    tbody.innerHTML = '';
                    if (res.data.length === 0) {
                        tbody.innerHTML = `
                            <tr>
                                <td colspan="11" style="text-align: center; color: #64748b; padding: 24px;">
                                    ${currentFeedTab === 'pending' ? 'Semua berkas scan sudah ter-upload (Tidak ada antrean pending)' : 'Tidak ada data register yang ditemukan.'}
                                </td>
                            </tr>
                        `;
                        return;
                    }
                }

                if (tbody) {
                    res.data.forEach(row => {
                        const tr = document.createElement('tr');
                        const isUploaded = row.status_upload && row.status_upload !== 'BELUM' && row.status_upload !== 'PENDING';
                        const badgeUpload = isUploaded
                            ? '<span class="badge-upload-done"><i class="fas fa-check"></i> UPLOADED</span>'
                            : '<span class="badge-upload-pending"><i class="fas fa-clock"></i> PENDING</span>';

                        const berkasBadge = (row.label_berkas && row.label_berkas !== '-')
                            ? `<span class="badge-slot">${row.label_berkas}</span>`
                            : '<span style="color: #64748b;">-</span>';

                        const agunanBadge = (row.label_agunan && row.label_agunan !== '-')
                            ? `<span class="badge-slot" style="color: #a855f7; border-color: #a855f7;">${row.label_agunan}</span>`
                            : '<span style="color: #64748b;">-</span>';

                        tr.innerHTML = `
                            <td style="color: #64748b; font-family: monospace; font-size: 0.72rem;">${row.formatted_time}</td>
                            <td style="color: #2563eb; font-weight: 800; font-family: monospace;">${row.nomor_rekening}</td>
                            <td style="color: #334155; font-family: monospace; font-size: 0.7rem;">${row.cif || '-'}</td>
                            <td style="font-weight: 800; color: #0f172a;">${(row.nama_debitur || '-').toUpperCase()}</td>
                            <td><span style="color: #64748b; font-size: 0.7rem;">${row.segmen ?? '-'}</span></td>
                            <td style="text-align: center;"><span class="badge-status-green">${row.status_scan || 'SCAN BERHASIL'}</span></td>
                            <td style="text-align: center;">${badgeUpload}</td>
                            <td style="text-align: center; color: #d97706; font-family: monospace; font-weight: 800;">${row.persentase_upload || '0%'}</td>
                            <td style="color: #64748b; font-size: 0.72rem; font-family: monospace;">${row.tgl_upload_formatted || '-'}</td>
                            <td style="text-align: center;">${berkasBadge}</td>
                            <td style="text-align: center;">${agunanBadge}</td>
                        `;
                        tbody.appendChild(tr);
                    });
                }
            }
        })
        .catch(err => {
            isTableLoading = false;
            if (loader) loader.style.display = 'none';
            console.error('[TABLE FEED ERROR]', err);
        });
}

function loadV3DashboardStats() {
    fetch('/scanner/stats')
        .then(res => res.json())
        .then(res => {
            if (res.status === 'success') {
                setSafeElText('dashBelumOpname', res.totalBelumOpname);
                setSafeElText('dashLemariHariIni', res.totalMasukLemariHariIni);
                setSafeElText('dashBelumUpload', res.totalBelumUpload);
                setSafeElText('dashBerkasTerisi', res.kapasitasBerkasTerisi);
                setSafeElText('dashBerkasKosong', res.kapasitasBerkasKosong);
                setSafeElText('dashAgunanTerisi', res.kapasitasAgunanTerisi);
                setSafeElText('dashAgunanKosong', res.kapasitasAgunanKosong);
                setSafeElText('badgeTabPendingCount', res.totalBelumUpload);
                setSafeElText('badgeTabAllCount', res.totalAllRegister);
                setSafeElText('dashTotalAgunan', res.totalFisikAgunan);

                setSafeElText('chipShm', res.countSHM);
                setSafeElText('chipBpkb', res.countBPKB);
                setSafeElText('chipAjb', res.countAJB);
                setSafeElText('chipAphb', res.countAPHB);
                setSafeElText('chipHibah', res.countAktaHibah);
                setSafeElText('chipSk', res.countSK);
                setSafeElText('chipPetok', res.countPetok);
                setSafeElText('chipHt', res.countHT);
            }
        })
        .catch(() => { });
}

function setSafeElText(id, val) {
    const el = document.getElementById(id);
    if (el && val !== undefined) el.innerText = val;
}

function updateXPDisplay() {
    const requiredXP = playerLevel * 250;
    const percentage = Math.min(100, Math.round((playerXP / requiredXP) * 100));
    const lvlEl = document.getElementById('playerLevelTitle');
    const txtEl = document.getElementById('expTextValue');
    const barEl = document.getElementById('expFillBar');
    const streakEl = document.getElementById('streakCountText');

    if (lvlEl) lvlEl.innerText = `LVL ${playerLevel}`;
    if (txtEl) txtEl.innerText = `${playerXP} / ${requiredXP}`;
    if (barEl) barEl.style.width = `${percentage}%`;
    if (streakEl) streakEl.innerText = `STREAK: ${currentStreak}x`;
}

function triggerStampSlam() {
    const stamp = document.getElementById('stampSlamBadge');
    if (stamp) {
        stamp.style.display = 'block';
        stamp.classList.remove('anim-slam');
        void stamp.offsetWidth;
        stamp.classList.add('anim-slam');
    }
    SoundFX.stampSlam();
}

function triggerCyberConfetti() {
    const canvas = document.getElementById('celebrationCanvas');
    if (!canvas || !canvas.parentElement) return;
    const ctx = canvas.getContext('2d');
    canvas.width = canvas.parentElement.clientWidth;
    canvas.height = canvas.parentElement.clientHeight;

    const particles = [];
    const colors = ['#2563eb', '#10b981', '#f59e0b', '#a855f7'];

    for (let i = 0; i < 35; i++) {
        particles.push({
            x: canvas.width / 2,
            y: canvas.height / 2,
            vx: (Math.random() - 0.5) * 10,
            vy: (Math.random() - 0.5) * 10 - 2,
            size: Math.random() * 4 + 2,
            color: colors[Math.floor(Math.random() * colors.length)],
            alpha: 1,
            decay: Math.random() * 0.025 + 0.02
        });
    }

    function renderParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        let activeCount = 0;
        particles.forEach(p => {
            if (p.alpha > 0) {
                activeCount++;
                p.x += p.vx;
                p.y += p.vy;
                p.vy += 0.2;
                p.alpha -= p.decay;
                ctx.save();
                ctx.globalAlpha = Math.max(0, p.alpha);
                ctx.fillStyle = p.color;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
        });
        if (activeCount > 0) requestAnimationFrame(renderParticles);
    }
    renderParticles();
}

function setBotEmotion(emotion, message, speechText = null) {
    const rig = document.getElementById('botAvatarRig');
    const speechEl = document.getElementById('botSpeechText');
    const speechPill = document.getElementById('botSpeedPill');

    if (speechEl && message) speechEl.innerHTML = message;
    if (speechText) speakRobo(speechText);
    if (!rig) return;

    rig.className = 'bot-avatar-wrap';

    if (emotion === 'eating') {
        rig.classList.add('anim-bot-eating');
        if (speechPill) speechPill.innerText = 'MEMINDAI...';
    } else if (emotion === 'waiting') {
        rig.classList.add('anim-bot-idle');
        if (speechPill) speechPill.innerText = 'STANDBY';
    } else if (emotion === 'celebrate') {
        rig.classList.add('anim-bot-celebrate');
        if (speechPill) speechPill.innerText = 'BERHASIL!';
    }
}

function copyTargetFolderPath() {
    if (!computedFolderPath) return;
    navigator.clipboard.writeText(computedFolderPath).then(() => {
        const btn = document.querySelector('.modal-scanner-footer-path button');
        if (btn) {
            const ori = btn.innerHTML;
            btn.innerHTML = `<i class="fas fa-check" style="color:#10b981;"></i> TERSALIN!`;
            setTimeout(() => { btn.innerHTML = ori; }, 1800);
        }
    });
}

function showCyberAlert(title, message) {
    const modal = document.getElementById('cyberAlertModal');
    const titleEl = document.getElementById('cyberAlertTitle');
    const msgEl = document.getElementById('cyberAlertMessage');
    if (titleEl) titleEl.innerText = title;
    if (msgEl) msgEl.innerText = message;
    if (modal) modal.style.display = 'flex';
}

function closeCyberAlert() {
    const modal = document.getElementById('cyberAlertModal');
    if (modal) modal.style.display = 'none';
}

document.addEventListener('DOMContentLoaded', () => {
    updateXPDisplay();
    currentFeedTab = 'pending';
    currentTablePage = 1;
    fetchTableFeedData(true);
    setInterval(loadV3DashboardStats, 15000);

    // Live monitor status scanner
    checkDashboardScannerStatus();
    setInterval(checkDashboardScannerStatus, 4000);
});