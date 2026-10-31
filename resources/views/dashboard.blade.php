@extends('layouts.app')

@section('title', 'Monitoring Kredit ' . $kodeUker)

@section('content')
@include('dashboard.css')

@php
    $fmt = function($val, $isCurrency = false, $isBracketNeg = true) {
        if ($val === null || $val === '' || floatval($val) == 0) return '-';
        $num = floatval($val);
        $formatted = $isCurrency ? number_format(abs($num), 0, ',', '.') : abs($num);
        if ($num < 0) {
            return $isBracketNeg ? "({$formatted})" : "-{$formatted}";
        }
        return $formatted;
    };

    // Helper Khusus Tabel DELTA: Panah Murni Tanpa +/- dan jika bulatannya 0 wajib '-'
    $fmtDelta = function($val, $isCurrency = false) {
        if ($val === null || $val === '') return '-';
        $num = floatval($val);
        $rounded = (int)round(abs($num));
        if ($rounded === 0) return '-';

        $formatted = $isCurrency ? number_format($rounded, 0, ',', '.') : (string)$rounded;
        if ($num > 0) {
            return "↑ {$formatted}";
        } elseif ($num < 0) {
            return "↓ {$formatted}";
        }
        return '-';
    };

    $kcLabel = $kanca 
        ? (str_starts_with(strtoupper($kanca), 'KC') ? strtoupper($kanca) : 'KC ' . strtoupper($kanca))
        : '';

    // Bersihkan nama cabang murni tanpa awalan KC / KCK
    $cleanKancaName = trim(preg_replace('/^(KC|KCK)\s+/i', '', (string)$kanca));

    // Bersihkan kata nama kanca dari nama uker khusus untuk judul header
    $namaUkerHeader = $namaUker;
    if (!empty($cleanKancaName)) {
        $namaUkerHeader = trim(preg_replace('/\b' . preg_quote($cleanKancaName, '/') . '\b/i', '', $namaUkerHeader));
        $namaUkerHeader = preg_replace('/\s+/', ' ', $namaUkerHeader) ?: $namaUker;
    }

    $headerNpddClean = preg_replace('/\s+Update\s+Data.*$/i', '', $labelCnplHeader);
    $headerJtClean   = preg_replace('/\s+Update\s+Data.*$/i', '', $labelJtHeader);

    $umurTunggakan = [
        'LANCAR' => '(0)',
        'SML-1'  => '(1-30)',
        'SML-2'  => '(31-60)',
        'SML-3'  => '(61-90)',
        'KL'     => '(91-120)',
        'D-1'    => '(121-150)',
        'D-2'    => '(151-180)',
        'M'      => '(≥ 181)',
        '> 270'  => '(> 270)',
    ];
@endphp

<div class="sheet-wrapper">
    <div class="report-header">
        <div class="header-left">
            <h1 class="header-title">
                MONITORING KREDIT {{ $kodeUker }} ({{ strtoupper($namaUkerHeader) }}{{ $kcLabel ? " {$kcLabel}" : '' }})
            </h1>
            <div class="header-sub">
                Monitoring Posisi Portofolio Kredit, Mutasi Kolektibilitas (Kol 1 - 5), Arus Kas & Likuiditas Unit Kerja
            </div>
        </div>
        <div class="header-right" style="display: flex; align-items: center; gap: 8px;">
            <div class="date-box" style="display: inline-flex; align-items: center; gap: 4px;">
                <span>Posisi Data LW321: <b id="hdr_tgl_lw321">{{ $tglLw321 }}</b></span> &nbsp;|&nbsp; 
                <span>Posisi Data LW325PH: <b id="hdr_tgl_ph">{{ $tglPh !== '-' ? $tglPh : 'Belum Ada Data' }}</b></span> &nbsp;|&nbsp; 
                <span>Posisi Data Baseline: <b>{{ $tglBulanan }}</b></span>
            </div>            
        </div>
    </div>

    
    <div class="grid-row-1-2">
        <div>
            <div class="section-bar">
                <span>{{ $tglBulanan }} &mdash; POSISI AKHIR BULAN LALU</span>
                <span class="section-tag">BASELINE</span>
            </div>
            <table class="sheet-table">
                <colgroup>
                    <col style="width: 110px;">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 23px;"><col style="width: 43px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;"><col style="width: 32px;">
                    <col class="col-gap">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col class="col-gap">
                    <col style="width: 28px;"><col style="width: 52px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2">NAMA MANTRI</th>
                        <th colspan="2">1 (LANCAR)</th><th colspan="2">2 (SML)</th><th colspan="2">3 (KL)</th><th colspan="2">4 (D)</th><th colspan="2">5 (MACET)</th>
                        <th colspan="2" class="th-highlight">TOTAL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-npl-head border-left-solid border-right-solid">NPL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-highlight">BULANAN</th>
                        <th colspan="3" class="th-highlight">MUSIMAN</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2">REALISASI</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2" class="th-sml-head">SML BARU</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub border-left-solid">DEB</th><th class="th-sub">OS</th><th class="th-sub border-right-solid">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $t_deb1 = $t_os1 = $t_deb2 = $t_os2 = $t_deb3 = $t_os3 = $t_deb4 = $t_os4 = $t_deb5 = $t_os5 = 0;
                        $t_tot_deb = $t_tot_os = $t_npl_deb = $t_npl_os = $t_real_deb = $t_real_os = 0;
                        $t_bl_deb = $t_bl_os = $t_ms_deb = $t_ms_os = $t_new_sml_deb = $t_new_sml_os = 0;
                    @endphp
                    @foreach($mantriList as $idx => $m)
                        @php
                            $row = $posisi3107[$idx] ?? [];
                            $d   = $delta[$idx] ?? [];
                            $tot_deb = ($row['deb1']??0) + ($row['deb2']??0) + ($row['deb3']??0) + ($row['deb4']??0) + ($row['deb5']??0);
                            $tot_os  = ($row['os1']??0) + ($row['os2']??0) + ($row['os3']??0) + ($row['os4']??0) + ($row['os5']??0);
                            $npl_pct = $tot_os > 0 ? (($row['os_npl']??0) / $tot_os) * 100 : 0;

                            $bl_deb = $row['deb_bulanan'] ?? 0;
                            $bl_os  = $row['os_bulanan'] ?? 0;
                            $bl_pct = $row['pct_bulanan'] ?? ($tot_os > 0 ? ($bl_os / $tot_os) * 100 : 0);

                            $ms_deb = $row['deb_musiman'] ?? 0;
                            $ms_os  = $row['os_musiman'] ?? 0;
                            $ms_pct = $row['pct_musiman'] ?? ($tot_os > 0 ? ($ms_os / $tot_os) * 100 : 0);

                            $new_sml_deb = $d['new_sml_deb'] ?? 0;
                            $new_sml_os  = $d['new_sml_os'] ?? 0;

                            $t_deb1 += $row['deb1']??0; $t_os1 += $row['os1']??0;
                            $t_deb2 += $row['deb2']??0; $t_os2 += $row['os2']??0;
                            $t_deb3 += $row['deb3']??0; $t_os3 += $row['os3']??0;
                            $t_deb4 += $row['deb4']??0; $t_os4 += $row['os4']??0;
                            $t_deb5 += $row['deb5']??0; $t_os5 += $row['os5']??0;
                            $t_tot_deb += $tot_deb; $t_tot_os += $tot_os;
                            $t_bl_deb += $bl_deb; $t_bl_os += $bl_os;
                            $t_ms_deb += $ms_deb; $t_ms_os += $ms_os;
                            $t_npl_deb += $row['deb_npl']??0; $t_npl_os += $row['os_npl']??0;
                            $t_real_deb += $row['real_deb']??0; $t_real_os += $row['real_os']??0;
                            $t_new_sml_deb += $new_sml_deb; $t_new_sml_os += $new_sml_os;

                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                            $namaClean = str_contains($m, '-') ? trim(last(explode('-', $m))) ?: '-' : $m;
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="td-left font-bold" style="{{ $isMutasiRow ? 'color: #dc2626;' : '' }}">{{ $namaClean }}</td>
                            
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol1', 'bulanan', 'Data Debitur Kol 1 (Lancar)')">{{ $fmt($row['deb1']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol1', 'bulanan', 'Baki Debet Kol 1 (Lancar)')">{{ $fmt($row['os1']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol2', 'bulanan', 'Data Debitur Kol 2 (SML)')">{{ $fmt($row['deb2']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol2', 'bulanan', 'Baki Debet Kol 2 (SML)')">{{ $fmt($row['os2']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol3', 'bulanan', 'Data Debitur Kol 3 (KL)')">{{ $fmt($row['deb3']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol3', 'bulanan', 'Baki Debet Kol 3 (KL)')">{{ $fmt($row['os3']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol4', 'bulanan', 'Data Debitur Kol 4 (D)')">{{ $fmt($row['deb4']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol4', 'bulanan', 'Baki Debet Kol 4 (D)')">{{ $fmt($row['os4']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol5', 'bulanan', 'Data Debitur Kol 5 (Macet)')">{{ $fmt($row['deb5']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol5', 'bulanan', 'Baki Debet Kol 5 (Macet)')">{{ $fmt($row['os5']??0, true) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'all', 'bulanan', 'Total Data Debitur Kelolaan')">{{ $fmt($tot_deb) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'all', 'bulanan', 'Total Baki Debet Kelolaan')">{{ $fmt($tot_os, true) }}</td>
                            
                            <td class="col-gap"></td>
                            <td class="border-left-solid clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'npl', 'bulanan', 'Data Debitur NPL (Kol 3, 4, 5)')">{{ $fmt($row['deb_npl']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'npl', 'bulanan', 'Baki Debet NPL')">{{ $fmt($row['os_npl']??0, true) }}</td>
                            <td class="border-right-solid font-bold">{{ number_format($npl_pct, 2, ',', '.') }}%</td>
                            
                            <td class="col-gap"></td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan', 'bulanan', 'Data Debitur Pinjaman Bulanan')">{{ $fmt($bl_deb) }}</td>
                            <td class="clickable font-bold" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan', 'bulanan', 'Baki Debet Bulanan')">{{ $fmt($bl_os, true) }}</td>
                            <td style="font-size: 8px; color: #334155; font-weight: bold;">{{ $bl_pct > 0 ? number_format($bl_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="clickable" style="color: #0369a1;" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman', 'bulanan', 'Data Debitur Pinjaman Musiman')">{{ $fmt($ms_deb) }}</td>
                            <td class="clickable font-bold" style="color: #0369a1;" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman', 'bulanan', 'Baki Debet Musiman')">{{ $fmt($ms_os, true) }}</td>
                            <td style="font-size: 8px; color: #0284c7; font-weight: bold;">{{ $ms_pct > 0 ? number_format($ms_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="col-gap"></td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'realisasi_bulanan', 'bulanan', 'Data Debitur Realisasi Bulan Lalu')">{{ $fmt($row['real_deb']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'realisasi_bulanan', 'bulanan', 'Plafon Realisasi Bulan Lalu')">{{ $fmt($row['real_os']??0, true) }}</td>

                            <td class="col-gap"></td>
                            <td class="clickable font-bold {{ $new_sml_deb > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('{{ addslashes($m) }}', 'new_sml', 'delta', 'Debitur SML Baru (Lancar ➔ DPK)')" data-cell="base_{{ $idx }}_new_sml_deb">{{ $fmt($new_sml_deb) }}</td>
                            <td class="clickable font-bold {{ $new_sml_os > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('{{ addslashes($m) }}', 'new_sml', 'delta', 'Baki Debet SML Baru (Lancar ➔ DPK)')" data-cell="base_{{ $idx }}_new_sml_os">{{ $fmt($new_sml_os, true) }}</td>
                        </tr>
                    @endforeach
                    @php
                        $t_npl_pct = $t_tot_os > 0 ? ($t_npl_os / $t_tot_os) * 100 : 0;
                        $t_bl_pct  = $t_tot_os > 0 ? ($t_bl_os / $t_tot_os) * 100 : 0;
                        $t_ms_pct  = $t_tot_os > 0 ? ($t_ms_os / $t_tot_os) * 100 : 0;
                    @endphp
                    <tr class="row-total-formal font-bold">
                        <td class="td-center clickable" onclick="openUniversalModal('TOTAL', 'all', 'bulanan', 'Seluruh Data Debitur Unit: {{ $tglBulanan }}')">TOTAL UNIT</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol1', 'bulanan', 'Data Debitur Kol 1 (Lancar) Unit')">{{ $fmt($t_deb1) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol1', 'bulanan', 'Total Baki Debet Kol 1 (Lancar) Unit')">{{ $fmt($t_os1, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol2', 'bulanan', 'Data Debitur Kol 2 (SML) Unit')">{{ $fmt($t_deb2) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol2', 'bulanan', 'Total Baki Debet Kol 2 (SML) Unit')">{{ $fmt($t_os2, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol3', 'bulanan', 'Data Debitur Kol 3 (KL) Unit')">{{ $fmt($t_deb3) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol3', 'bulanan', 'Total Baki Debet Kol 3 (KL) Unit')">{{ $fmt($t_os3, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol4', 'bulanan', 'Data Debitur Kol 4 (D) Unit')">{{ $fmt($t_deb4) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol4', 'bulanan', 'Total Baki Debet Kol 4 (D) Unit')">{{ $fmt($t_os4, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol5', 'bulanan', 'Data Debitur Kol 5 (Macet) Unit')">{{ $fmt($t_deb5) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol5', 'bulanan', 'Total Baki Debet Kol 5 (Macet) Unit')">{{ $fmt($t_os5, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'all', 'bulanan', 'Total Seluruh Data Debitur Unit')">{{ $fmt($t_tot_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'all', 'bulanan', 'Total Seluruh Baki Debet Unit')">{{ $fmt($t_tot_os, true) }}</td>
                        <td class="col-gap"></td>
                        <td class="border-left-solid clickable" onclick="openUniversalModal('TOTAL', 'npl', 'bulanan', 'Data Debitur NPL Unit')">{{ $fmt($t_npl_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'npl', 'bulanan', 'Total Baki Debet NPL Unit')">{{ $fmt($t_npl_os, true) }}</td>
                        <td class="border-right-solid font-bold">{{ number_format($t_npl_pct, 2, ',', '.') }}%</td>
                        <td class="col-gap"></td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'bulanan', 'bulanan', 'Data Debitur Pinjaman Bulanan Unit')">{{ $fmt($t_bl_deb) }}</td>
                        <td class="clickable font-bold" onclick="openUniversalModal('TOTAL', 'bulanan', 'bulanan', 'Total Baki Debet Bulanan Unit')">{{ $fmt($t_bl_os, true) }}</td>
                        <td class="font-bold">{{ number_format($t_bl_pct, 1, ',', '.') }}%</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'musiman', 'bulanan', 'Data Debitur Pinjaman Musiman Unit')">{{ $fmt($t_ms_deb) }}</td>
                        <td class="clickable font-bold" onclick="openUniversalModal('TOTAL', 'musiman', 'bulanan', 'Total Baki Debet Musiman Unit')">{{ $fmt($t_ms_os, true) }}</td>
                        <td class="font-bold">{{ number_format($t_ms_pct, 1, ',', '.') }}%</td>
                        <td class="col-gap"></td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'realisasi_bulanan', 'bulanan', 'Data Debitur Realisasi Bulan Lalu Unit')">{{ $fmt($t_real_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'realisasi_bulanan', 'bulanan', 'Total Realisasi Bulan Lalu Unit')">{{ $fmt($t_real_os, true) }}</td>
                        <td class="col-gap"></td>
                        <td class="clickable font-bold {{ $t_new_sml_deb > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('TOTAL', 'new_sml', 'delta', 'Total Unit Debitur SML Baru')" data-cell="base_tot_new_sml_deb">{{ $fmt($t_new_sml_deb) }}</td>
                        <td class="clickable font-bold {{ $t_new_sml_os > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('TOTAL', 'new_sml', 'delta', 'Total Unit Baki Debet SML Baru')" data-cell="base_tot_new_sml_os">{{ $fmt($t_new_sml_os, true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <div class="section-bar">
                <span>{{ $headerNpddClean }}</span>
            </div>
            <table class="sheet-table" style="width: 100%; table-layout: fixed;">
                <colgroup>
                    <col style="width: 26px;"><col style="width: 42px;">
                    <col style="width: 26px;"><col style="width: 36px;">
                    <col style="width: 26px;"><col style="width: 50px;">
                    <col style="width: 26px;"><col style="width: 48px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2" class="th-sub clickable" style="vertical-align: middle; font-size: 8px;" onclick="openUniversalModal('TOTAL', 'cnpl_all', 'bulanan', 'Semua Data Debitur NPDD {{ $labelCnplSubHeader }}')">DEB</th>
                        <th rowspan="2" class="th-sub clickable" style="vertical-align: middle; font-size: 8px;" onclick="openUniversalModal('TOTAL', 'cnpl_all', 'bulanan', 'Semua Data Baki Debet NPDD {{ $labelCnplSubHeader }}')">OS</th>
                        <th colspan="2" class="clickable" style="font-size: 8px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'cnpl_blm', 'harian', 'Data Debitur NPDD Belum Bayar')">BLM BAYAR</th>
                        <th colspan="2" class="clickable" style="font-size: 8px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'cnpl_sdh', 'bulanan', 'Data Debitur NPDD Sudah Bayar')">SDH BAYAR</th>
                        <th colspan="2" class="th-npl-head clickable" style="font-size: 8px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'new_npl', 'delta', 'Data Debitur NPL Baru')">NPL BARU</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tot_cnpl_deb = $tot_cnpl_os = $tot_cnpl_blm_deb = $tot_cnpl_blm_os = $tot_cnpl_sdh_deb = $tot_cnpl_sdh_os = 0;
                        $tot_new_npl_deb = $tot_new_npl_os = 0;
                    @endphp
                    @foreach($mantriList as $idx => $m)
                        @php
                            $row = $posisi0608[$idx] ?? [];
                            $d   = $delta[$idx] ?? [];
                            $tot_cnpl_deb     += ($row['cnpl_deb'] ?? 0);
                            $tot_cnpl_os      += ($row['cnpl_os'] ?? 0);
                            $tot_cnpl_blm_deb += ($row['cnpl_blm_deb'] ?? 0);
                            $tot_cnpl_blm_os  += ($row['cnpl_blm_os'] ?? 0);
                            $tot_cnpl_sdh_deb += ($row['cnpl_sdh_deb'] ?? 0);
                            $tot_cnpl_sdh_os  += ($row['cnpl_sdh_os'] ?? 0);

                            $new_npl_deb = $d['new_npl_deb'] ?? 0;
                            $new_npl_os  = $d['new_npl_os'] ?? 0;
                            $tot_new_npl_deb += $new_npl_deb;
                            $tot_new_npl_os  += $new_npl_os;
                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_all', 'bulanan', 'Data Debitur NPDD Posisi Awal')" data-cell="cnpl_{{ $idx }}_deb">{{ $fmt($row['cnpl_deb']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_all', 'bulanan', 'Data Debitur NPDD Posisi Awal (OS)')" data-cell="cnpl_{{ $idx }}_os">{{ $fmt($row['cnpl_os']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_blm', 'harian', 'Data Debitur NPDD Belum Bayar')" data-cell="cnpl_{{ $idx }}_blm_deb">{{ $fmt($row['cnpl_blm_deb']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_blm', 'harian', 'Data Debitur NPDD Belum Bayar (OS)')" data-cell="cnpl_{{ $idx }}_blm_os">{{ $fmt($row['cnpl_blm_os']??0, true) }}</td>
                            <td class="{{ ($row['cnpl_sdh_deb']??0) < 0 ? 'val-neg' : '' }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_sdh', 'bulanan', 'Data Debitur NPDD Sudah Bayar')" data-cell="cnpl_{{ $idx }}_sdh_deb">{{ $fmt($row['cnpl_sdh_deb']??0) }}</td>
                            <td class="{{ ($row['cnpl_sdh_os']??0) < 0 ? 'val-neg' : '' }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'cnpl_sdh', 'bulanan', 'Data Debitur NPDD Sudah Bayar (OS)')" data-cell="cnpl_{{ $idx }}_sdh_os">{{ $fmt($row['cnpl_sdh_os']??0, true) }}</td>
                            <td class="clickable font-bold {{ $new_npl_deb > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('{{ addslashes($m) }}', 'new_npl', 'delta', 'Debitur NPL Baru (DPK ➔ Kurang Lancar)')" data-cell="cnpl_{{ $idx }}_new_npl_deb">{{ $fmt($new_npl_deb) }}</td>
                            <td class="clickable font-bold {{ $new_npl_os > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('{{ addslashes($m) }}', 'new_npl', 'delta', 'Baki Debet NPL Baru (DPK ➔ Kurang Lancar)')" data-cell="cnpl_{{ $idx }}_new_npl_os">{{ $fmt($new_npl_os, true) }}</td>
                        </tr>
                    @endforeach
                    <tr class="row-total-formal font-bold">
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_all', 'bulanan', 'Total Data Debitur NPDD Posisi Awal')" data-cell="cnpl_tot_deb">{{ $fmt($tot_cnpl_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_all', 'bulanan', 'Total Baki Debet NPDD Posisi Awal')" data-cell="cnpl_tot_os">{{ $fmt($tot_cnpl_os, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_blm', 'harian', 'Total Data Debitur NPDD Belum Bayar')" data-cell="cnpl_tot_blm_deb">{{ $fmt($tot_cnpl_blm_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_blm', 'harian', 'Total Baki Debet NPDD Belum Bayar')" data-cell="cnpl_tot_blm_os">{{ $fmt($tot_cnpl_blm_os, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_sdh', 'bulanan', 'Total Data Debitur NPDD Sudah Bayar')" data-cell="cnpl_tot_sdh_deb">{{ $fmt($tot_cnpl_sdh_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'cnpl_sdh', 'bulanan', 'Total Baki Debet NPDD Sudah Bayar')" data-cell="cnpl_tot_sdh_os">{{ $fmt($tot_cnpl_sdh_os, true) }}</td>
                        <td class="clickable font-bold {{ $tot_new_npl_deb > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('TOTAL', 'new_npl', 'delta', 'Total Unit Debitur NPL Baru')" data-cell="cnpl_tot_new_npl_deb">{{ $fmt($tot_new_npl_deb) }}</td>
                        <td class="clickable font-bold {{ $tot_new_npl_os > 0 ? 'val-neg' : '' }}" onclick="openUniversalModal('TOTAL', 'new_npl', 'delta', 'Total Unit Baki Debet NPL Baru')" data-cell="cnpl_tot_new_npl_os">{{ $fmt($tot_new_npl_os, true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
    <div class="grid-row-1-2">
        <div>
            <div class="section-bar">
                <span><span id="txtTglHarianRealtime">{{ $tglHarian }}</span> &mdash; POSISI SAAT INI (DATA BERJALAN)</span>
                <span class="section-tag">REALTIME</span>
            </div>
            <table class="sheet-table">
                <colgroup>
                    <col style="width: 110px;">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 23px;"><col style="width: 43px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;"><col style="width: 32px;">
                    <col class="col-gap">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col class="col-gap">
                    <col style="width: 28px;"><col style="width: 52px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2">NAMA MANTRI</th>
                        <th colspan="2">1 (LANCAR)</th><th colspan="2">2 (SML)</th><th colspan="2">3 (KL)</th><th colspan="2">4 (D)</th><th colspan="2">5 (MACET)</th>
                        <th colspan="2" class="th-highlight">TOTAL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-npl-head border-left-solid border-right-solid">NPL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-highlight">BULANAN</th>
                        <th colspan="3" class="th-highlight">MUSIMAN</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2">REALISASI</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2">Nett Disbursement</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub border-left-solid">DEB</th><th class="th-sub">OS</th><th class="th-sub border-right-solid">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">Nett</th><th class="th-sub">Kuadran</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $th_deb1 = $th_os1 = $th_deb2 = $th_os2 = $th_deb3 = $th_os3 = $th_deb4 = $th_os4 = $th_deb5 = $th_os5 = 0;
                        $th_tot_deb = $th_tot_os = $th_npl_deb = $th_npl_os = 0;
                        $th_bl_deb = $th_bl_os = $th_ms_deb = $th_ms_os = 0;
                        $th_real_deb = $th_real_os = $th_nett_os = 0;
                    @endphp
                    @foreach($mantriList as $idx => $m)
                        @php
                            $row = $posisi0608[$idx] ?? [];
                            $tot_deb = ($row['deb1']??0) + ($row['deb2']??0) + ($row['deb3']??0) + ($row['deb4']??0) + ($row['deb5']??0);
                            $tot_os  = ($row['os1']??0) + ($row['os2']??0) + ($row['os3']??0) + ($row['os4']??0) + ($row['os5']??0);
                            $npl_pct = $tot_os > 0 ? (($row['os_npl']??0) / $tot_os) * 100 : 0;

                            $bl_deb = $row['deb_bulanan'] ?? 0;
                            $bl_os  = $row['os_bulanan'] ?? 0;
                            $bl_pct = $row['pct_bulanan'] ?? ($tot_os > 0 ? ($bl_os / $tot_os) * 100 : 0);

                            $ms_deb = $row['deb_musiman'] ?? 0;
                            $ms_os  = $row['os_musiman'] ?? 0;
                            $ms_pct = $row['pct_musiman'] ?? ($tot_os > 0 ? ($ms_os / $tot_os) * 100 : 0);

                            $real_deb = $row['real_deb'] ?? 0;
                            $real_os  = $row['real_os'] ?? 0;
                            $nett_os  = $row['nett_os'] ?? 0;
                            $kuadran  = $row['kuadran'] ?? '-';

                            $th_deb1 += $row['deb1']??0; $th_os1 += $row['os1']??0;
                            $th_deb2 += $row['deb2']??0; $th_os2 += $row['os2']??0;
                            $th_deb3 += $row['deb3']??0; $th_os3 += $row['os3']??0;
                            $th_deb4 += $row['deb4']??0; $th_os4 += $row['os4']??0;
                            $th_deb5 += $row['deb5']??0; $th_os5 += $row['os5']??0;
                            $th_tot_deb += $tot_deb; $th_tot_os += $tot_os;
                            $th_bl_deb += $bl_deb; $th_bl_os += $bl_os;
                            $th_ms_deb += $ms_deb; $th_ms_os += $ms_os;
                            $th_npl_deb += $row['deb_npl']??0; $th_npl_os += $row['os_npl']??0;

                            $th_real_deb += $real_deb;
                            $th_real_os  += $real_os;
                            $th_nett_os  += $nett_os;

                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                            $namaClean = str_contains($m, '-') ? trim(last(explode('-', $m))) ?: '-' : $m;

                            $badgeKdClass = match($kuadran) {
                                'High'        => 'kd-high',
                                'Mid'         => 'kd-mid',
                                'Low'         => 'kd-low',
                                'Extreme Low' => 'kd-ext-low',
                                default       => ''
                            };
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="td-left font-bold" style="{{ $isMutasiRow ? 'color: #dc2626;' : '' }}">{{ $namaClean }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol1_harian', 'harian', 'Data Debitur Kol 1 (Lancar) Realtime')" data-cell="h_{{ $idx }}_deb1">{{ $fmt($row['deb1']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol1_harian', 'harian', 'Baki Debet Kol 1 (Lancar) Realtime')" data-cell="h_{{ $idx }}_os1">{{ $fmt($row['os1']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol2_harian', 'harian', 'Data Debitur Kol 2 (SML) Realtime')" data-cell="h_{{ $idx }}_deb2">{{ $fmt($row['deb2']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol2_harian', 'harian', 'Baki Debet Kol 2 (SML) Realtime')" data-cell="h_{{ $idx }}_os2">{{ $fmt($row['os2']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol3_harian', 'harian', 'Data Debitur Kol 3 (KL) Realtime')" data-cell="h_{{ $idx }}_deb3">{{ $fmt($row['deb3']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol3_harian', 'harian', 'Baki Debet Kol 3 (KL) Realtime')" data-cell="h_{{ $idx }}_os3">{{ $fmt($row['os3']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol4_harian', 'harian', 'Data Debitur Kol 4 (D) Realtime')" data-cell="h_{{ $idx }}_deb4">{{ $fmt($row['deb4']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol4_harian', 'harian', 'Baki Debet Kol 4 (D) Realtime')" data-cell="h_{{ $idx }}_os4">{{ $fmt($row['os4']??0, true) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol5_harian', 'harian', 'Data Debitur Kol 5 (Macet) Realtime')" data-cell="h_{{ $idx }}_deb5">{{ $fmt($row['deb5']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'kol5_harian', 'harian', 'Baki Debet Kol 5 (Macet) Realtime')" data-cell="h_{{ $idx }}_os5">{{ $fmt($row['os5']??0, true) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'all_harian', 'harian', 'Total Data Debitur Realtime')" data-cell="h_{{ $idx }}_tot_deb">{{ $fmt($tot_deb) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'all_harian', 'harian', 'Total Baki Debet Realtime')" data-cell="h_{{ $idx }}_tot_os">{{ $fmt($tot_os, true) }}</td>
                            
                            <td class="col-gap"></td>
                            <td class="border-left-solid clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'npl_harian', 'harian', 'Data Debitur NPL Realtime')" data-cell="h_{{ $idx }}_deb_npl">{{ $fmt($row['deb_npl']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'npl_harian', 'harian', 'Baki Debet NPL Realtime')" data-cell="h_{{ $idx }}_os_npl">{{ $fmt($row['os_npl']??0, true) }}</td>
                            <td class="border-right-solid font-bold" data-cell="h_{{ $idx }}_npl_pct">{{ number_format($npl_pct, 2, ',', '.') }}%</td>
                            
                            <td class="col-gap"></td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan_harian', 'harian', 'Data Debitur Pinjaman Bulanan Realtime')" data-cell="h_{{ $idx }}_deb_bulanan">{{ $fmt($bl_deb) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan_harian', 'harian', 'Baki Debet Bulanan Realtime')" data-cell="h_{{ $idx }}_os_bulanan">{{ $fmt($bl_os, true) }}</td>
                            <td style="font-size: 8px; color: #334155; font-weight: bold;" data-cell="h_{{ $idx }}_pct_bulanan">{{ $bl_pct > 0 ? number_format($bl_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="clickable" style="color: #0369a1;" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman_harian', 'harian', 'Data Debitur Pinjaman Musiman Realtime')" data-cell="h_{{ $idx }}_deb_musiman">{{ $fmt($ms_deb) }}</td>
                            <td class="font-bold clickable" style="color: #0369a1;" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman_harian', 'harian', 'Baki Debet Musiman Realtime')" data-cell="h_{{ $idx }}_os_musiman">{{ $fmt($ms_os, true) }}</td>
                            <td style="font-size: 8px; color: #0284c7; font-weight: bold;" data-cell="h_{{ $idx }}_pct_musiman">{{ $ms_pct > 0 ? number_format($ms_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="col-gap"></td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'realisasi_mtd', 'harian', 'Data Debitur Realisasi MTD')" data-cell="h_{{ $idx }}_real_deb">{{ $fmt($real_deb) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'realisasi_mtd', 'harian', 'Plafond Realisasi MTD')" data-cell="h_{{ $idx }}_real_os">{{ $fmt($real_os, true) }}</td>
                            
                            <td class="col-gap"></td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'nett_disbursement', 'harian', 'Rincian Nett Disbursement')" data-cell="h_{{ $idx }}_nett_os">
                                {{ $fmt($nett_os, true) }}
                            </td>
                            <td class="td-center font-bold" data-cell="h_{{ $idx }}_kuadran">
                                @if($kuadran !== '-')
                                    <span class="kd-badge {{ $badgeKdClass }}">{{ $kuadran }}</span>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @php
                        $th_npl_pct = $th_tot_os > 0 ? ($th_npl_os / $th_tot_os) * 100 : 0;
                        $th_bl_pct  = $th_tot_os > 0 ? ($th_bl_os / $th_tot_os) * 100 : 0;
                        $th_ms_pct  = $th_tot_os > 0 ? ($th_ms_os / $th_tot_os) * 100 : 0;
                    @endphp
                    <tr class="row-total-formal font-bold">
                        <td class="td-center clickable" onclick="openUniversalModal('TOTAL', 'all_harian', 'harian', 'Seluruh Data Debitur Realtime Unit')">TOTAL UNIT</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol1_harian', 'harian', 'Data Debitur Kol 1 (Lancar) Realtime Unit')" data-cell="h_tot_deb1">{{ $fmt($th_deb1) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol1_harian', 'harian', 'Total Baki Debet Kol 1 (Lancar) Realtime Unit')" data-cell="h_tot_os1">{{ $fmt($th_os1, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol2_harian', 'harian', 'Data Debitur Kol 2 (SML) Realtime Unit')" data-cell="h_tot_deb2">{{ $fmt($th_deb2) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol2_harian', 'harian', 'Total Baki Debet Kol 2 (SML) Realtime Unit')" data-cell="h_tot_os2">{{ $fmt($th_os2, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol3_harian', 'harian', 'Data Debitur Kol 3 (KL) Realtime Unit')" data-cell="h_tot_deb3">{{ $fmt($th_deb3) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol3_harian', 'harian', 'Total Baki Debet Kol 3 (KL) Realtime Unit')" data-cell="h_tot_os3">{{ $fmt($th_os3, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol4_harian', 'harian', 'Data Debitur Kol 4 (D) Realtime Unit')" data-cell="h_tot_deb4">{{ $fmt($th_deb4) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol4_harian', 'harian', 'Total Baki Debet Kol 4 (D) Realtime Unit')" data-cell="h_tot_os4">{{ $fmt($th_os4, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol5_harian', 'harian', 'Data Debitur Kol 5 (Macet) Realtime Unit')" data-cell="h_tot_deb5">{{ $fmt($th_deb5) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'kol5_harian', 'harian', 'Total Baki Debet Kol 5 (Macet) Realtime Unit')" data-cell="h_tot_os5">{{ $fmt($th_os5, true) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'all_harian', 'harian', 'Total Seluruh Data Debitur Realtime Unit')" data-cell="h_tot_tot_deb">{{ $fmt($th_tot_deb) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'all_harian', 'harian', 'Total Seluruh Baki Debet Realtime Unit')" data-cell="h_tot_tot_os">{{ $fmt($th_tot_os, true) }}</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="border-left-solid clickable" onclick="openUniversalModal('TOTAL', 'npl_harian', 'harian', 'Data Debitur NPL Realtime Unit')" data-cell="h_tot_deb_npl">{{ $fmt($th_npl_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'npl_harian', 'harian', 'Total Baki Debet NPL Realtime Unit')" data-cell="h_tot_os_npl">{{ $fmt($th_npl_os, true) }}</td>
                        <td class="border-right-solid border-left-solid font-bold" data-cell="h_tot_npl_pct">{{ number_format($th_npl_pct, 2, ',', '.') }}%</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'bulanan_harian', 'harian', 'Data Debitur Bulanan Realtime Unit')" data-cell="h_tot_deb_bulanan">{{ $fmt($th_bl_deb) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'bulanan_harian', 'harian', 'Total Baki Debet Bulanan Realtime Unit')" data-cell="h_tot_os_bulanan">{{ $fmt($th_bl_os, true) }}</td>
                        <td class="font-bold" data-cell="h_tot_pct_bulanan">{{ number_format($th_bl_pct, 1, ',', '.') }}%</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'musiman_harian', 'harian', 'Data Debitur Musiman Realtime Unit')" data-cell="h_tot_deb_musiman">{{ $fmt($th_ms_deb) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'musiman_harian', 'harian', 'Total Baki Debet Musiman Realtime Unit')" data-cell="h_tot_os_musiman">{{ $fmt($th_ms_os, true) }}</td>
                        <td class="font-bold" data-cell="h_tot_pct_musiman">{{ number_format($th_ms_pct, 1, ',', '.') }}%</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'realisasi_mtd', 'harian', 'Total Data Debitur Realisasi MTD Unit')" data-cell="h_tot_real_deb">{{ $fmt($th_real_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'realisasi_mtd', 'harian', 'Total Plafond Realisasi MTD Unit')" data-cell="h_tot_real_os">{{ $fmt($th_real_os, true) }}</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'nett_disbursement', 'harian', 'Total Nett Disbursement Unit')" data-cell="h_tot_nett_os">{{ $fmt($th_nett_os, true) }}</td>
                        <td class="td-center font-bold">-</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <div class="section-bar">
                <span>{{ $headerJtClean }}</span>
            </div>
            <table class="sheet-table" style="width: 100%; table-layout: fixed;">
                <colgroup>
                    <col style="width: 26px;"><col style="width: 42px;">
                    <col style="width: 26px;"><col style="width: 35px;">
                    <col style="width: 26px;"><col style="width: 46px;">
                    <col style="width: 26px;"><col style="width: 50px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2" class="th-sub clickable" style="vertical-align: middle; font-size: 8px;" onclick="openUniversalModal('TOTAL', 'jt_all', 'bulanan', 'Semua Data Debitur Jatuh Tempo Bulan Ini')">DEB</th>
                        <th rowspan="2" class="th-sub clickable" style="vertical-align: middle; font-size: 8px;" onclick="openUniversalModal('TOTAL', 'jt_all', 'bulanan', 'Semua Baki Debet Jatuh Tempo Bulan Ini')">OS</th>
                        <th colspan="2" class="clickable" style="font-size: 8px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'jt_blm', 'harian', 'Data Debitur Jatuh Tempo Belum Bayar')">BLM BAYAR</th>
                        <th colspan="2" class="th-green-head clickable" style="font-size: 8px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'jt_sdh', 'bulanan', 'Data Debitur Jatuh Tempo Sudah Bayar')">SDH BAYAR</th>
                        <th colspan="2" class="th-blue-head clickable" style="font-size: 7.5px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'pelunasan_maju', 'harian', 'Data Debitur Pelunasan Maju')">PELUNASAN MAJU</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tot_jt_deb = $tot_jt_os = $tot_blm_deb = $tot_blm_os = $tot_sdh_deb = $tot_sdh_os = $tot_maju_deb = $tot_maju_os = 0;
                    @endphp
                    @foreach($mantriList as $idx => $m)
                        @php
                            $row = $posisi0608[$idx] ?? [];
                            $tot_jt_deb   += ($row['jt_deb'] ?? 0);
                            $tot_jt_os    += ($row['jt_os'] ?? 0);
                            $tot_blm_deb  += ($row['blm_deb'] ?? 0);
                            $tot_blm_os   += ($row['blm_os'] ?? 0);
                            $tot_sdh_deb  += ($row['sdh_jt_deb'] ?? 0);
                            $tot_sdh_os   += ($row['sdh_jt_os'] ?? 0);
                            $tot_maju_deb += ($row['maju_deb'] ?? 0);
                            $tot_maju_os  += ($row['maju_os'] ?? 0);
                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_all', 'bulanan', 'Data Debitur Jatuh Tempo Bulan Ini')" data-cell="jt_{{ $idx }}_deb">{{ $fmt($row['jt_deb']??0) }}</td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_all', 'bulanan', 'Baki Debet Jatuh Tempo Bulan Ini')" data-cell="jt_{{ $idx }}_os">{{ $fmt($row['jt_os']??0, true) }}</td>
                            <td class="clickable text-danger font-bold" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_blm', 'harian', 'Data Debitur Jatuh Tempo Belum Bayar')" data-cell="jt_{{ $idx }}_blm_deb">{{ $fmt($row['blm_deb']??0) }}</td>
                            <td class="clickable text-danger" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_blm', 'harian', 'Baki Debet Jatuh Tempo Belum Bayar')" data-cell="jt_{{ $idx }}_blm_os">{{ $fmt($row['blm_os']??0, true) }}</td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_sdh', 'bulanan', 'Data Debitur Jatuh Tempo Sudah Bayar')" data-cell="jt_{{ $idx }}_sdh_deb">{{ $fmt($row['sdh_jt_deb']??0) }}</td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'jt_sdh', 'bulanan', 'Plafond Jatuh Tempo Sudah Bayar')" data-cell="jt_{{ $idx }}_sdh_os">{{ $fmt($row['sdh_jt_os']??0, true) }}</td>
                            <td class="font-bold clickable" style="color: #0284c7;" onclick="openUniversalModal('{{ addslashes($m) }}', 'pelunasan_maju', 'harian', 'Data Debitur Pelunasan Maju')" data-cell="jt_{{ $idx }}_maju_deb">{{ $fmt($row['maju_deb']??0) }}</td>
                            <td class="font-bold clickable" style="color: #0284c7;" onclick="openUniversalModal('{{ addslashes($m) }}', 'pelunasan_maju', 'harian', 'Baki Debet Pelunasan Maju')" data-cell="jt_{{ $idx }}_maju_os">{{ $fmt($row['maju_os']??0, true) }}</td>
                        </tr>
                    @endforeach
                    <tr class="row-total-formal font-bold">
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'jt_all', 'bulanan', 'Total Data Debitur Jatuh Tempo Unit')" data-cell="jt_tot_deb">{{ $fmt($tot_jt_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'jt_all', 'bulanan', 'Total Baki Debet Jatuh Tempo Unit')" data-cell="jt_tot_os">{{ $fmt($tot_jt_os, true) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'jt_blm', 'harian', 'Total Data Debitur Jatuh Tempo Belum Bayar Unit')" data-cell="jt_tot_blm_deb">{{ $fmt($tot_blm_deb) }}</td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'jt_blm', 'harian', 'Total Baki Debet Jatuh Tempo Belum Bayar Unit')" data-cell="jt_tot_blm_os">{{ $fmt($tot_blm_os, true) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'jt_sdh', 'bulanan', 'Total Data Debitur Jatuh Tempo Sudah Bayar Unit')" data-cell="jt_tot_sdh_deb">{{ $fmt($tot_sdh_deb) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'jt_sdh', 'bulanan', 'Total Plafond Jatuh Tempo Sudah Bayar Unit')" data-cell="jt_tot_sdh_os">{{ $fmt($tot_sdh_os, true) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'pelunasan_maju', 'harian', 'Total Data Debitur Pelunasan Maju Unit')" data-cell="jt_tot_maju_deb">{{ $fmt($tot_maju_deb) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'pelunasan_maju', 'harian', 'Total Baki Debet Pelunasan Maju Unit')" data-cell="jt_tot_maju_os">{{ $fmt($tot_maju_os, true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
    <div class="grid-row-1-2">
        <div>
            <div class="section-bar gray-bar">
                <span>DELTA &mdash; PERGERAKAN MUTASI (<span id="txtTglHarianDelta">{{ $tglHarian }}</span> vs {{ $tglBulanan }})</span>
                <span class="section-tag">RIWAYAT MUTASI</span>
            </div>
            <table class="sheet-table">
                <colgroup>
                    <col style="width: 110px;">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 17px;"><col style="width: 33px;">
                    <col style="width: 23px;"><col style="width: 43px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;"><col style="width: 32px;">
                    <col class="col-gap">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col style="width: 21px;"><col style="width: 37px;"><col style="width: 28px;">
                    <col class="col-gap">
                    <col style="width: 19px;"><col style="width: 37px;">
                    <col class="col-gap">
                    <col style="width: 28px;"><col style="width: 52px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2">NAMA MANTRI</th>
                        <th colspan="2">1 (LANCAR)</th><th colspan="2">2 (SML)</th><th colspan="2">3 (KL)</th><th colspan="2">4 (D)</th><th colspan="2">5 (MACET)</th>
                        <th colspan="2" class="th-highlight">TOTAL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-npl-head border-left-solid border-right-solid">NPL</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="3" class="th-highlight">Δ BULANAN</th>
                        <th colspan="3" class="th-highlight">Δ MUSIMAN</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2">RUN-OFF</th>
                        <th class="col-gap" rowspan="2"></th>
                        <th colspan="2" class="th-green-head">PTP</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub border-left-solid">DEB</th><th class="th-sub">OS</th><th class="th-sub border-right-solid">%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">Δ%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th><th class="th-sub">Δ%</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $td_deb1 = $td_os1 = $td_deb2 = $td_os2 = $td_deb3 = $td_os3 = $td_deb4 = $td_os4 = $td_deb5 = $td_os5 = 0;
                        $td_tot_deb = $td_tot_os = $td_npl_deb = $td_npl_os = 0;
                        $td_bl_deb = $td_bl_os = $td_ms_deb = $td_ms_os = 0;
                        $td_ro_deb = $td_ro_os = 0;
                        $tot_b_all_os = $tot_b_all_npl = $tot_h_all_os = $tot_h_all_npl = 0;
                    @endphp
                    @foreach($mantriList as $idx => $m)
                        @php
                            $b = $posisi3107[$idx] ?? [];
                            $h = $posisi0608[$idx] ?? [];
                            $d = $delta[$idx] ?? [];

                            $deb1 = $d['deb1'] ?? 0; $os1 = $d['os1'] ?? 0;
                            $deb2 = $d['deb2'] ?? 0; $os2 = $d['os2'] ?? 0;
                            $deb3 = $d['deb3'] ?? 0; $os3 = $d['os3'] ?? 0;
                            $deb4 = $d['deb4'] ?? 0; $os4 = $d['os4'] ?? 0;
                            $deb5 = $d['deb5'] ?? 0; $os5 = $d['os5'] ?? 0;
                            
                            $tot_deb = $d['tot_deb'] ?? 0;
                            $tot_os  = $d['tot_os'] ?? 0;
                            $deb_npl = $d['deb_npl'] ?? 0;
                            $os_npl  = $d['os_npl'] ?? 0;

                            $bl_deb  = $d['deb_bulanan'] ?? 0;
                            $bl_os   = $d['os_bulanan'] ?? 0;
                            $bl_pct  = $d['pct_bulanan'] ?? 0;

                            $ms_deb  = $d['deb_musiman'] ?? 0;
                            $ms_os   = $d['os_musiman'] ?? 0;
                            $ms_pct  = $d['pct_musiman'] ?? 0;

                            $ro_deb  = $d['ro_deb'] ?? 0;
                            $ro_os   = $d['ro_os'] ?? 0;

                            $perg_deb = $d['pergerakan_deb'] ?? 0;
                            $perg_os  = (float)($d['pergerakan_os_net'] ?? 0);

                            $b_tot_os = ($b['os1']??0) + ($b['os2']??0) + ($b['os3']??0) + ($b['os4']??0) + ($b['os5']??0);
                            $h_tot_os = ($h['os1']??0) + ($h['os2']??0) + ($h['os3']??0) + ($h['os4']??0) + ($h['os5']??0);
                            $b_pct = $b_tot_os > 0 ? (($b['os_npl']??0) / $b_tot_os) * 100 : 0;
                            $h_pct = $h_tot_os > 0 ? (($h['os_npl']??0) / $h_tot_os) * 100 : 0;
                            $pct_npl_delta = $h_pct - $b_pct;

                            $td_deb1 += $deb1; $td_os1 += $os1;
                            $td_deb2 += $deb2; $td_os2 += $os2;
                            $td_deb3 += $deb3; $td_os3 += $os3;
                            $td_deb4 += $deb4; $td_os4 += $os4;
                            $td_deb5 += $deb5; $td_os5 += $os5;
                            $td_tot_deb += $tot_deb; $td_tot_os += $tot_os;
                            $td_bl_deb += $bl_deb; $td_bl_os += $bl_os;
                            $td_ms_deb += $ms_deb; $td_ms_os += $ms_os;
                            $td_npl_deb += $deb_npl; $td_npl_os += $os_npl;

                            $td_ro_deb += $ro_deb; $td_ro_os += $ro_os;

                            $tot_b_all_os  += $b_tot_os;
                            $tot_b_all_npl += ($b['os_npl'] ?? 0);
                            $tot_h_all_os  += $h_tot_os;
                            $tot_h_all_npl += ($h['os_npl'] ?? 0);

                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                            $namaClean = str_contains($m, '-') ? trim(last(explode('-', $m))) ?: '-' : $m;

                            $isPergNaik = round($perg_os) > 0;
                            $isPergTurun = round($perg_os) < 0;
                            $pergColor = $isPergNaik ? '#b91c1c' : ($isPergTurun ? '#15803d' : '#334155');

                            $cDeb1 = round($deb1) > 0 ? 'val-pos' : (round($deb1) < 0 ? 'val-neg' : '');
                            $cOs1  = round($os1) > 0  ? 'val-pos' : (round($os1) < 0  ? 'val-neg' : '');

                            $cDeb2 = round($deb2) > 0 ? 'val-neg' : (round($deb2) < 0 ? 'val-pos' : '');
                            $cOs2  = round($os2) > 0  ? 'val-neg' : (round($os2) < 0  ? 'val-pos' : '');

                            $cDeb3 = round($deb3) > 0 ? 'val-neg' : (round($deb3) < 0 ? 'val-pos' : '');
                            $cOs3  = round($os3) > 0  ? 'val-neg' : (round($os3) < 0  ? 'val-pos' : '');

                            $cDeb4 = round($deb4) > 0 ? 'val-neg' : (round($deb4) < 0 ? 'val-pos' : '');
                            $cOs4  = round($os4) > 0  ? 'val-neg' : (round($os4) < 0  ? 'val-pos' : '');

                            $cDeb5 = round($deb5) > 0 ? 'val-neg' : (round($deb5) < 0 ? 'val-pos' : '');
                            $cOs5  = round($os5) > 0  ? 'val-neg' : (round($os5) < 0  ? 'val-pos' : '');

                            $cTotDeb = round($tot_deb) > 0 ? 'val-pos' : (round($tot_deb) < 0 ? 'val-neg' : '');
                            $cTotOs  = round($tot_os) > 0  ? 'val-pos' : (round($tot_os) < 0  ? 'val-neg' : '');

                            $cNplDeb = round($deb_npl) > 0 ? 'val-neg' : (round($deb_npl) < 0 ? 'val-pos' : '');
                            $cNplOs  = round($os_npl) > 0  ? 'val-neg' : (round($os_npl) < 0  ? 'val-pos' : '');

                            $cPctNpl = $pct_npl_delta > 0.001 ? 'val-neg' : ($pct_npl_delta < -0.001 ? 'val-pos' : '');

                            $cBlDeb  = round($bl_deb) > 0  ? 'val-pos' : (round($bl_deb) < 0  ? 'val-neg' : '');
                            $cBlOs   = round($bl_os) > 0   ? 'val-pos' : (round($bl_os) < 0   ? 'val-neg' : '');
                            $cPctBl  = $bl_pct > 0.05 ? 'val-pos' : ($bl_pct < -0.05 ? 'val-neg' : '');

                            $cMsDeb  = round($ms_deb) > 0  ? 'val-pos' : (round($ms_deb) < 0  ? 'val-neg' : '');
                            $cMsOs   = round($ms_os) > 0   ? 'val-pos' : (round($ms_os) < 0   ? 'val-neg' : '');
                            $cPctMs  = $ms_pct > 0.05 ? 'val-pos' : ($ms_pct < -0.05 ? 'val-neg' : '');
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="td-left font-bold" style="{{ $isMutasiRow ? 'color: #dc2626;' : '' }}">{{ $namaClean }}</td>
                            <td class="{{ $cDeb1 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol1', 'delta', 'Δ Data Debitur Kol 1 (Lancar)')" data-cell="d_{{ $idx }}_deb1">{{ $fmtDelta($deb1) }}</td>
                            <td class="{{ $cOs1 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol1', 'delta', 'Δ Baki Debet Kol 1 (Lancar)')" data-cell="d_{{ $idx }}_os1">{{ $fmtDelta($os1, true) }}</td>
                            <td class="{{ $cDeb2 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol2', 'delta', 'Δ Data Debitur Kol 2 (SML)')" data-cell="d_{{ $idx }}_deb2">{{ $fmtDelta($deb2) }}</td>
                            <td class="{{ $cOs2 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol2', 'delta', 'Δ Baki Debet Kol 2 (SML)')" data-cell="d_{{ $idx }}_os2">{{ $fmtDelta($os2, true) }}</td>
                            <td class="{{ $cDeb3 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol3', 'delta', 'Δ Data Debitur Kol 3 (KL)')" data-cell="d_{{ $idx }}_deb3">{{ $fmtDelta($deb3) }}</td>
                            <td class="{{ $cOs3 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol3', 'delta', 'Δ Baki Debet Kol 3 (KL)')" data-cell="d_{{ $idx }}_os3">{{ $fmtDelta($os3, true) }}</td>
                            <td class="{{ $cDeb4 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol4', 'delta', 'Δ Data Debitur Kol 4 (D)')" data-cell="d_{{ $idx }}_deb4">{{ $fmtDelta($deb4) }}</td>
                            <td class="{{ $cOs4 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol4', 'delta', 'Δ Baki Debet Kol 4 (D)')" data-cell="d_{{ $idx }}_os4">{{ $fmtDelta($os4, true) }}</td>
                            <td class="{{ $cDeb5 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol5', 'delta', 'Δ Data Debitur Kol 5 (Macet)')" data-cell="d_{{ $idx }}_deb5">{{ $fmtDelta($deb5) }}</td>
                            <td class="{{ $cOs5 }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_kol5', 'delta', 'Δ Baki Debet Kol 5 (Macet)')" data-cell="d_{{ $idx }}_os5">{{ $fmtDelta($os5, true) }}</td>
                            <td class="font-bold {{ $cTotDeb }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_total', 'delta', 'Δ Total Data Debitur')" data-cell="d_{{ $idx }}_tot_deb">{{ $fmtDelta($tot_deb) }}</td>
                            <td class="font-bold {{ $cTotOs }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_total', 'delta', 'Δ Total Baki Debet')" data-cell="d_{{ $idx }}_tot_os">{{ $fmtDelta($tot_os, true) }}</td>
                            
                            <td class="col-gap"></td>
                            <td class="border-left-solid {{ $cNplDeb }} font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_npl', 'delta', 'Δ Data Debitur NPL')" data-cell="d_{{ $idx }}_deb_npl">{{ $fmtDelta($deb_npl) }}</td>
                            <td class="{{ $cNplOs }} font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'delta_npl', 'delta', 'Δ Baki Debet NPL')" data-cell="d_{{ $idx }}_os_npl">{{ $fmtDelta($os_npl, true) }}</td>
                            <td class="border-right-solid font-bold {{ $cPctNpl }}" data-cell="d_{{ $idx }}_npl_pct">
                                {{ $pct_npl_delta != 0 ? ($pct_npl_delta > 0 ? '+' : '') . number_format($pct_npl_delta, 2, ',', '.') . '%' : '-' }}
                            </td>

                            <td class="col-gap"></td>
                            <td class="{{ $cBlDeb }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan_delta', 'delta', 'Δ Debitur Bulanan')" data-cell="d_{{ $idx }}_deb_bulanan">{{ $fmtDelta($bl_deb) }}</td>
                            <td class="font-bold {{ $cBlOs }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'bulanan_delta', 'delta', 'Δ Baki Debet Bulanan')" data-cell="d_{{ $idx }}_os_bulanan">{{ $fmtDelta($bl_os, true) }}</td>
                            <td class="font-bold {{ $cPctBl }}" data-cell="d_{{ $idx }}_pct_bulanan">{{ $bl_pct != 0 ? ($bl_pct > 0 ? '+' : '') . number_format($bl_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="{{ $cMsDeb }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman_delta', 'delta', 'Δ Debitur Musiman')" data-cell="d_{{ $idx }}_deb_musiman">{{ $fmtDelta($ms_deb) }}</td>
                            <td class="font-bold {{ $cMsOs }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'musiman_delta', 'delta', 'Δ Baki Debet Musiman')" data-cell="d_{{ $idx }}_os_musiman">{{ $fmtDelta($ms_os, true) }}</td>
                            <td class="font-bold {{ $cPctMs }}" data-cell="d_{{ $idx }}_pct_musiman">{{ $ms_pct != 0 ? ($ms_pct > 0 ? '+' : '') . number_format($ms_pct, 1, ',', '.') . '%' : '-' }}</td>

                            <td class="col-gap"></td>
                            <td class="clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'run_off', 'harian', 'Jadwal Pokok Run-Off Harian')" data-cell="d_{{ $idx }}_ro_deb">{{ $fmt($ro_deb) }}</td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'run_off', 'harian', 'Nominal Run-Off Terjadwal')" data-cell="d_{{ $idx }}_ro_os">{{ $fmt($ro_os, true) }}</td>

                            <td class="col-gap"></td>
                            <td class="font-bold clickable" style="color: #0369a1; background: #f0fdf4;" onclick="openUniversalModal('{{ addslashes($m) }}', 'ptp', 'harian', 'Data Debitur PTP (Penagihan Harian)')" data-cell="d_{{ $idx }}_perg_deb">{{ $fmt($perg_deb) }}</td>
                            <td class="font-bold clickable" style="color: {{ $pergColor }}; background: #f0fdf4;" onclick="openUniversalModal('{{ addslashes($m) }}', 'ptp', 'harian', 'Pergerakan Nominal PTP')" data-cell="d_{{ $idx }}_perg_os">
                                @if($isPergNaik)
                                    <span style="color: #b91c1c; font-weight: bold;">↑ {{ number_format(abs(round($perg_os)), 0, ',', '.') }}</span>
                                @elseif($isPergTurun)
                                    <span style="color: #15803d; font-weight: bold;">↓ {{ number_format(abs(round($perg_os)), 0, ',', '.') }}</span>
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @php
                        $pct_b_total = $tot_b_all_os > 0 ? ($tot_b_all_npl / $tot_b_all_os) * 100 : 0;
                        $pct_h_total = $tot_h_all_os > 0 ? ($tot_h_all_npl / $tot_h_all_os) * 100 : 0;
                        $td_pct      = ($th_npl_pct ?? $pct_h_total) - ($t_npl_pct ?? $pct_b_total);
                        $td_bl_pct   = ($th_bl_pct ?? 0) - ($t_bl_pct ?? 0);
                        $td_ms_pct   = ($th_ms_pct ?? 0) - ($t_ms_pct ?? 0);

                        $cTotDeb1 = round($td_deb1) > 0 ? 'val-pos' : (round($td_deb1) < 0 ? 'val-neg' : '');
                        $cTotOs1  = round($td_os1) > 0  ? 'val-pos' : (round($td_os1) < 0  ? 'val-neg' : '');
                        $cTotDeb2 = round($td_deb2) > 0 ? 'val-neg' : (round($td_deb2) < 0 ? 'val-pos' : '');
                        $cTotOs2  = round($td_os2) > 0  ? 'val-neg' : (round($td_os2) < 0  ? 'val-pos' : '');
                        $cTotDeb3 = round($td_deb3) > 0 ? 'val-neg' : (round($td_deb3) < 0 ? 'val-pos' : '');
                        $cTotOs3  = round($td_os3) > 0  ? 'val-neg' : (round($td_os3) < 0  ? 'val-pos' : '');
                        $cTotDeb4 = round($td_deb4) > 0 ? 'val-neg' : (round($td_deb4) < 0 ? 'val-pos' : '');
                        $cTotOs4  = round($td_os4) > 0  ? 'val-neg' : (round($td_os4) < 0  ? 'val-pos' : '');
                        $cTotDeb5 = round($td_deb5) > 0 ? 'val-neg' : (round($td_deb5) < 0 ? 'val-pos' : '');
                        $cTotOs5  = round($td_os5) > 0  ? 'val-neg' : (round($td_os5) < 0  ? 'val-pos' : '');

                        $cTotTotDeb = round($td_tot_deb) > 0 ? 'val-pos' : (round($td_tot_deb) < 0 ? 'val-neg' : '');
                        $cTotTotOs  = round($td_tot_os) > 0  ? 'val-pos' : (round($td_tot_os) < 0  ? 'val-neg' : '');

                        $cTotDebNpl = round($td_npl_deb) > 0 ? 'val-neg' : (round($td_npl_deb) < 0 ? 'val-pos' : '');
                        $cTotOsNpl  = round($td_npl_os) > 0  ? 'val-neg' : (round($td_npl_os) < 0  ? 'val-pos' : '');
                        $cTotPctNpl = $td_pct > 0.001 ? 'val-neg' : ($td_pct < -0.001 ? 'val-pos' : '');

                        $cTotDebBl  = round($td_bl_deb) > 0  ? 'val-pos' : (round($td_bl_deb) < 0  ? 'val-neg' : '');
                        $cTotOsBl   = round($td_bl_os) > 0   ? 'val-pos' : (round($td_bl_os) < 0   ? 'val-neg' : '');
                        $cTotPctBl  = $td_bl_pct > 0.05 ? 'val-pos' : ($td_bl_pct < -0.05 ? 'val-neg' : '');

                        $cTotDebMs  = round($td_ms_deb) > 0  ? 'val-pos' : (round($td_ms_deb) < 0  ? 'val-neg' : '');
                        $cTotOsMs   = round($td_ms_os) > 0   ? 'val-pos' : (round($td_ms_os) < 0   ? 'val-neg' : '');
                        $cTotPctMs  = $td_ms_pct > 0.05 ? 'val-pos' : ($td_ms_pct < -0.05 ? 'val-neg' : '');

                        $unitPergOs  = (float)($totalPergerakanUnit['os_net'] ?? 0);
                        $isUnitNaik  = round($unitPergOs) > 0;
                        $isUnitTurun = round($unitPergOs) < 0;
                    @endphp
                    <tr class="row-total-formal font-bold">
                        <td class="td-center clickable" onclick="openUniversalModal('TOTAL', 'delta_total', 'delta', 'Total Seluruh Mutasi Unit')">TOTAL MUTASI</td>
                        <td class="clickable {{ $cTotDeb1 }}" onclick="openUniversalModal('TOTAL', 'delta_kol1', 'delta', 'Total Δ Data Debitur Kol 1 Unit')" data-cell="d_tot_deb1">{{ $fmtDelta($td_deb1) }}</td>
                        <td class="clickable {{ $cTotOs1 }}" onclick="openUniversalModal('TOTAL', 'delta_kol1', 'delta', 'Total Δ Baki Debet Kol 1 Unit')" data-cell="d_tot_os1">{{ $fmtDelta($td_os1, true) }}</td>
                        <td class="clickable {{ $cTotDeb2 }}" onclick="openUniversalModal('TOTAL', 'delta_kol2', 'delta', 'Total Δ Data Debitur Kol 2 Unit')" data-cell="d_tot_deb2">{{ $fmtDelta($td_deb2) }}</td>
                        <td class="clickable {{ $cTotOs2 }}" onclick="openUniversalModal('TOTAL', 'delta_kol2', 'delta', 'Total Δ Baki Debet Kol 2 Unit')" data-cell="d_tot_os2">{{ $fmtDelta($td_os2, true) }}</td>
                        <td class="clickable {{ $cTotDeb3 }}" onclick="openUniversalModal('TOTAL', 'delta_kol3', 'delta', 'Total Δ Data Debitur Kol 3 Unit')" data-cell="d_tot_deb3">{{ $fmtDelta($td_deb3) }}</td>
                        <td class="clickable {{ $cTotOs3 }}" onclick="openUniversalModal('TOTAL', 'delta_kol3', 'delta', 'Total Δ Baki Debet Kol 3 Unit')" data-cell="d_tot_os3">{{ $fmtDelta($td_os3, true) }}</td>
                        <td class="clickable {{ $cTotDeb4 }}" onclick="openUniversalModal('TOTAL', 'delta_kol4', 'delta', 'Total Δ Data Debitur Kol 4 Unit')" data-cell="d_tot_deb4">{{ $fmtDelta($td_deb4) }}</td>
                        <td class="clickable {{ $cTotOs4 }}" onclick="openUniversalModal('TOTAL', 'delta_kol4', 'delta', 'Total Δ Baki Debet Kol 4 Unit')" data-cell="d_tot_os4">{{ $fmtDelta($td_os4, true) }}</td>
                        <td class="clickable {{ $cTotDeb5 }}" onclick="openUniversalModal('TOTAL', 'delta_kol5', 'delta', 'Total Δ Data Debitur Kol 5 Unit')" data-cell="d_tot_deb5">{{ $fmtDelta($td_deb5) }}</td>
                        <td class="clickable {{ $cTotOs5 }}" onclick="openUniversalModal('TOTAL', 'delta_kol5', 'delta', 'Total Δ Baki Debet Kol 5 Unit')" data-cell="d_tot_os5">{{ $fmtDelta($td_os5, true) }}</td>
                        <td class="clickable {{ $cTotTotDeb }}" onclick="openUniversalModal('TOTAL', 'delta_total', 'delta', 'Total Seluruh Δ Data Debitur Unit')" data-cell="d_tot_tot_deb">{{ $fmtDelta($td_tot_deb) }}</td>
                        <td class="font-bold clickable {{ $cTotTotOs }}" onclick="openUniversalModal('TOTAL', 'delta_total', 'delta', 'Total Seluruh Δ Baki Debet Unit')" data-cell="d_tot_tot_os">{{ $fmtDelta($td_tot_os, true) }}</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="border-left-solid clickable {{ $cTotDebNpl }}" onclick="openUniversalModal('TOTAL', 'delta_npl', 'delta', 'Total Δ Data Debitur NPL Unit')" data-cell="d_tot_deb_npl">{{ $fmtDelta($td_npl_deb) }}</td>
                        <td class="clickable {{ $cTotOsNpl }}" onclick="openUniversalModal('TOTAL', 'delta_npl', 'delta', 'Total Δ Baki Debet NPL Unit')" data-cell="d_tot_os_npl">{{ $fmtDelta($td_npl_os, true) }}</td>
                        <td class="border-right-solid font-bold {{ $cTotPctNpl }}" data-cell="d_tot_npl_pct">
                            {{ $td_pct != 0 ? ($td_pct > 0 ? '+' : '') . number_format($td_pct, 2, ',', '.') . '%' : '-' }}
                        </td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="clickable {{ $cTotDebBl }}" onclick="openUniversalModal('TOTAL', 'bulanan_delta', 'delta', 'Total Δ Debitur Bulanan Unit')" data-cell="d_tot_deb_bulanan">{{ $fmtDelta($td_bl_deb) }}</td>
                        <td class="font-bold clickable {{ $cTotOsBl }}" onclick="openUniversalModal('TOTAL', 'bulanan_delta', 'delta', 'Total Δ Baki Debet Bulanan Unit')" data-cell="d_tot_os_bulanan">{{ $fmtDelta($td_bl_os, true) }}</td>
                        <td class="font-bold {{ $cTotPctBl }}" data-cell="d_tot_pct_bulanan">{{ $td_bl_pct != 0 ? ($td_bl_pct > 0 ? '+' : '') . number_format($td_bl_pct, 1, ',', '.') . '%' : '-' }}</td>
                        <td class="clickable {{ $cTotDebMs }}" onclick="openUniversalModal('TOTAL', 'musiman_delta', 'delta', 'Total Δ Debitur Musiman Unit')" data-cell="d_tot_deb_musiman">{{ $fmtDelta($td_ms_deb) }}</td>
                        <td class="font-bold clickable {{ $cTotOsMs }}" onclick="openUniversalModal('TOTAL', 'musiman_delta', 'delta', 'Total Δ Baki Debet Musiman Unit')" data-cell="d_tot_os_musiman">{{ $fmtDelta($td_ms_os, true) }}</td>
                        <td class="font-bold {{ $cTotPctMs }}" data-cell="d_tot_pct_musiman">{{ $td_ms_pct != 0 ? ($td_ms_pct > 0 ? '+' : '') . number_format($td_ms_pct, 1, ',', '.') . '%' : '-' }}</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="clickable" onclick="openUniversalModal('TOTAL', 'run_off', 'harian', 'Total Data Debitur Run-Off Unit')" data-cell="d_tot_ro_deb">{{ $fmt($td_ro_deb) }}</td>
                        <td class="font-bold text-success clickable" onclick="openUniversalModal('TOTAL', 'run_off', 'harian', 'Total Nominal Run-Off Terjadwal Unit')" data-cell="d_tot_ro_os">{{ $fmt($td_ro_os, true) }}</td>
                        <td class="col-gap" style="background: #0f2942 !important; border-color: #0f2942 !important;"></td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'ptp', 'harian', 'Total Data Debitur PTP Unit')" data-cell="d_tot_perg_deb">{{ $fmt($totalPergerakanUnit['deb'] ?? 0) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'ptp', 'harian', 'Total Pergerakan Nominal PTP Unit')" data-cell="d_tot_perg_os">
                            @if($isUnitNaik)
                                <span style="color: #fca5a5; font-weight: bold;">↑ {{ number_format(abs(round($unitPergOs)), 0, ',', '.') }}</span>
                            @elseif($isUnitTurun)
                                <span style="color: #86efac; font-weight: bold;">↓ {{ number_format(abs(round($unitPergOs)), 0, ',', '.') }}</span>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div style="display: flex; flex-direction: column; height: 100%;">
            <div class="section-bar">
                <span>POTENSI REAL &amp; RECOVERY (OKTOBER - DESEMBER 2026)</span>
            </div>
            <table class="sheet-table" style="width: 100%; table-layout: fixed; flex: 1 1 auto;">
                <colgroup>
                    <col style="width: 25px;"><col style="width: 44px;">
                    <col style="width: 25px;"><col style="width: 44px;">
                    <col style="width: 25px;"><col style="width: 47px;">
                </colgroup>
                <thead>
                    <tr>
                        <th colspan="2" class="th-highlight clickable" style="font-size: 7.5px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'potensi_real', 'bulanan', 'Potensi Realisasi 3 Bulan (Okt - Des 2026)')">POTENSI REAL</th>
                        <th colspan="2" class="th-green-head clickable" style="font-size: 7.5px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'potensi_suplesi', 'bulanan', 'Potensi Suplesi (Top-Up)')">POTENSI SUPLESI</th>
                        <th colspan="2" class="th-npl-head clickable" style="font-size: 7.5px; white-space: nowrap; text-align: center;" onclick="openUniversalModal('TOTAL', 'penagihan', 'harian', 'Target Penagihan & Recovery Pemrakarsa')">PENAGIHAN</th>
                    </tr>
                    <tr>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                        <th class="th-sub">DEB</th><th class="th-sub">OS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mantriList as $idx => $m)
                        @php
                            $rowBaru  = $tabelBaruData[$idx] ?? [];
                            $pRealDeb = $rowBaru['pot_real_deb'] ?? 0;
                            $pRealOs  = $rowBaru['pot_real_os'] ?? 0;
                            $pSuplDeb = $rowBaru['pot_suplesi_deb'] ?? 0;
                            $pSuplOs  = $rowBaru['pot_suplesi_os'] ?? 0;
                            $recDeb   = $rowBaru['recovery_deb'] ?? 0;
                            $recOs    = $rowBaru['recovery_os'] ?? 0;
                            $isMutasiRow = str_contains(strtoupper($m), 'MUTASI');
                        @endphp
                        <tr class="hover-row" data-mantri-idx="{{ $idx }}">
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'potensi_real', 'bulanan', 'Potensi Realisasi (Okt - Des 2026)')" data-cell="pot_{{ $idx }}_real_deb">{{ $fmt($pRealDeb) }}</td>
                            <td class="font-bold clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'potensi_real', 'bulanan', 'Plafond Potensi Realisasi (Okt - Des 2026)')" data-cell="pot_{{ $idx }}_real_os">{{ $fmt($pRealOs, true) }}</td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'potensi_suplesi', 'bulanan', 'Potensi Debitur Suplesi')" data-cell="pot_{{ $idx }}_supl_deb">{{ $fmt($pSuplDeb) }}</td>
                            <td class="font-bold text-success clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'potensi_suplesi', 'bulanan', 'Baki Debet Potensi Suplesi')" data-cell="pot_{{ $idx }}_supl_os">{{ $fmt($pSuplOs, true) }}</td>
                            <td class="font-bold {{ $recDeb > 0 ? 'val-neg' : '' }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'penagihan', 'harian', 'Debitur Penagihan Recovery')" data-cell="pot_{{ $idx }}_rec_deb">{{ $fmt($recDeb) }}</td>
                            <td class="font-bold {{ $recOs > 0 ? 'val-neg' : '' }} clickable" onclick="openUniversalModal('{{ addslashes($m) }}', 'penagihan', 'harian', 'Baki Debet Penagihan Recovery')" data-cell="pot_{{ $idx }}_rec_os">{{ $fmt($recOs, true) }}</td>
                        </tr>
                    @endforeach
                    <tr class="row-total-formal font-bold">
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'potensi_real', 'bulanan', 'Total Potensi Realisasi Unit (Okt - Des 2026)')" data-cell="pot_tot_real_deb">{{ $fmt($tabelBaruTotals['pot_real_deb'] ?? 0) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'potensi_real', 'bulanan', 'Total Plafond Potensi Realisasi Unit (Okt - Des 2026)')" data-cell="pot_tot_real_os">{{ $fmt($tabelBaruTotals['pot_real_os'] ?? 0, true) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'potensi_suplesi', 'bulanan', 'Total Potensi Debitur Suplesi Unit')" data-cell="pot_tot_supl_deb">{{ $fmt($tabelBaruTotals['pot_suplesi_deb'] ?? 0) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'potensi_suplesi', 'bulanan', 'Total Baki Debet Potensi Suplesi Unit')" data-cell="pot_tot_supl_os">{{ $fmt($tabelBaruTotals['pot_suplesi_os'] ?? 0, true) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'penagihan', 'harian', 'Total Debitur Penagihan Recovery Unit')" data-cell="pot_tot_rec_deb">{{ $fmt($tabelBaruTotals['recovery_deb'] ?? 0) }}</td>
                        <td class="font-bold clickable" onclick="openUniversalModal('TOTAL', 'penagihan', 'harian', 'Total Baki Debet Penagihan Recovery Unit')" data-cell="pot_tot_rec_os">{{ $fmt($tabelBaruTotals['recovery_os'] ?? 0, true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    
    <div style="position: relative; z-index: 2; display: grid; grid-template-columns: 1fr 265px 295px; gap: 5px; margin-bottom: 2px; align-items: stretch;">
        
        
        <div style="display: flex; flex-direction: column; height: 100%;">
            <div class="section-bar gray-bar" style="font-size: 7.8px; padding: 1.5px 5px;">
                <span>PERGESERAN KOLEKTIBILITAS &mdash; POSISI LW321 HARIAN TGL. <span id="txtTglHarianMatrix">{{ $tglHarian }}</span></span>
            </div>
            <table class="sheet-table table-matrix" style="width: 100% !important; height: 100%; flex: 1 1 auto; table-layout: fixed !important;">
                <colgroup>
                    <col style="width: 54px;">
                    <col style="width: 23px;"><col style="width: 36px;">
                    <col style="width: 16px;"><col style="width: 27px;">
                    <col style="width: 23px;"><col style="width: 35px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                    <col style="width: 16px;"><col style="width: 26px;">
                </colgroup>
                <thead>
                    <tr>
                        <th rowspan="2" style="font-size: 8px;">KOL</th>
                        <th rowspan="2" class="th-sub" style="background: #f1f5f9; font-size: 7.5px;">DEB</th>
                        <th rowspan="2" class="th-sub" style="background: #f1f5f9; font-size: 7.5px;">OS</th>
                        <th colspan="2" class="bg-matrix-upgrade font-bold" style="font-size: 7.5px; border-left: 1px solid #cbd5e1;">LUNAS</th>
                        <th colspan="2" class="th-highlight font-bold" style="font-size: 7.5px;">LANCAR</th>
                        <th colspan="2" class="font-bold" style="background: #fef3c7; color: #92400e; font-size: 7.5px;">SML-1</th>
                        <th colspan="2" class="font-bold" style="background: #fef3c7; color: #92400e; font-size: 7.5px;">SML-2</th>
                        <th colspan="2" class="font-bold" style="background: #fef3c7; color: #92400e; font-size: 7.5px;">SML-3</th>
                        <th colspan="2" class="th-npl-head font-bold" style="font-size: 7.5px;">KL</th>
                        <th colspan="2" class="th-npl-head font-bold" style="font-size: 7.5px;">D-1</th>
                        <th colspan="2" class="th-npl-head font-bold" style="font-size: 7.5px;">D-2</th>
                        <th colspan="2" class="th-npl-head font-bold" style="font-size: 7.5px;">M</th>
                        <th colspan="2" class="th-npl-head font-bold" style="font-size: 7.5px;">&gt; 270</th>
                        <th colspan="2" class="bg-matrix-downgrade font-bold" style="font-size: 7.5px;">PH</th>
                    </tr>
                    <tr>
                        @foreach($matrixDestCols as $dc)
                            <th class="th-sub" style="font-size: 7.2px; padding: 0 !important;">DEB</th>
                            <th class="th-sub" style="font-size: 7.2px; padding: 0 !important;">OS</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php
                        $colOrder = ['LUNAS' => 0, 'LANCAR' => 1, 'SML-1' => 2, 'SML-2' => 3, 'SML-3' => 4, 'KL' => 5, 'D-1' => 6, 'D-2' => 7, 'M' => 8, '> 270' => 9, 'PH' => 10];
                        $rowOrder = ['LANCAR' => 1, 'SML-1' => 2, 'SML-2' => 3, 'SML-3' => 4, 'KL' => 5, 'D-1' => 6, 'D-2' => 7, 'M' => 8, '> 270' => 9];
                    @endphp
                    @foreach($matrixCategories as $cat)
                        @php
                            $rowM = $matrixTable[$cat] ?? [];
                            $bDeb = $rowM['baseline_deb'] ?? 0;
                            $bOs  = $rowM['baseline_os'] ?? 0;
                            $rIdx = $rowOrder[$cat] ?? 1;
                            $catSlug = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $cat));
                        @endphp
                        <tr>
                            <td class="td-left font-bold" style="background: #f8fafc; font-size: 7.2px; white-space: nowrap; padding: 1px 3px !important;">
                                {{ $cat }}@if(isset($umurTunggakan[$cat])) <span style="font-size: 6.5px; font-weight: normal; color: #475569;">{{ $umurTunggakan[$cat] }}</span>@endif
                            </td>
                            
                            <td class="bg-matrix-purple font-bold" data-cell="mat_{{ $catSlug }}_base_deb">{{ $fmt($bDeb) }}</td>
                            <td class="bg-matrix-purple font-bold" data-cell="mat_{{ $catSlug }}_base_os">{{ $fmt($bOs, true) }}</td>

                            @foreach($matrixDestCols as $dc)
                                @php
                                    $cDeb = $rowM['cells'][$dc]['deb'] ?? 0;
                                    $cOs  = $rowM['cells'][$dc]['os'] ?? 0;
                                    $cIdx = $colOrder[$dc] ?? 1;
                                    $dcSlug = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $dc));

                                    $cellClass = '';
                                    if ($cDeb > 0 || $cOs > 0) {
                                        if ($dc === 'LUNAS') {
                                            $cellClass = 'bg-matrix-upgrade';
                                        } elseif ($dc === 'PH') {
                                            $cellClass = 'bg-matrix-downgrade';
                                        } elseif ($cIdx == $rIdx) {
                                            $cellClass = ($cat === 'LANCAR') ? 'bg-matrix-stay-lancar' : 'bg-matrix-stay-warning';
                                        } elseif ($cIdx > $rIdx) {
                                            $cellClass = 'bg-matrix-downgrade';
                                        } else {
                                            $cellClass = 'bg-matrix-upgrade';
                                        }
                                    }
                                @endphp
                                <td class="{{ $cellClass }} clickable" onclick="openUniversalModal('TOTAL', 'matrix_cell', 'harian', 'Pergeseran Kolek: {{ $cat }} ➔ {{ $dc }}', { from_cat: '{{ $cat }}', to_cat: '{{ $dc }}' })" data-cell="mat_{{ $catSlug }}_{{ $dcSlug }}_deb">{{ $fmt($cDeb) }}</td>
                                <td class="{{ $cellClass }} clickable" onclick="openUniversalModal('TOTAL', 'matrix_cell', 'harian', 'Pergeseran Baki Debet: {{ $cat }} ➔ {{ $dc }}', { from_cat: '{{ $cat }}', to_cat: '{{ $dc }}' })" data-cell="mat_{{ $catSlug }}_{{ $dcSlug }}_os">{{ $fmt($cOs, true) }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    <tr class="row-total-formal font-bold">
                        <td class="td-center" style="font-size: 8px;">TOTAL</td>
                        <td class="font-bold" data-cell="mat_tot_base_deb">{{ $fmt($matrixTotals['baseline_deb']) }}</td>
                        <td class="font-bold" data-cell="mat_tot_base_os">{{ $fmt($matrixTotals['baseline_os'], true) }}</td>
                        @foreach($matrixDestCols as $dc)
                            @php
                                $totDebCol = $matrixTotals['cells'][$dc]['deb'] ?? 0;
                                $totOsCol  = $matrixTotals['cells'][$dc]['os'] ?? 0;
                                $dcSlug = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $dc));
                            @endphp
                            <td data-cell="mat_tot_{{ $dcSlug }}_deb">{{ $fmt($totDebCol) }}</td>
                            <td data-cell="mat_tot_{{ $dcSlug }}_os">{{ $fmt($totOsCol, true) }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div style="display: flex; flex-direction: column; height: 100%;">
            <div class="section-bar" style="font-size: 7.8px; padding: 1.5px 5px;">
                <span id="txtRkaHeaderJudul">{{ $rkaTableData['header_title'] ?? 'TARGET RKA BULAN OKTOBER 2026' }}</span>
            </div>
            <table class="sheet-table table-mom-compact" style="width: 100%; height: 100%; flex: 1 1 auto;">
                <colgroup>
                    <col style="width: 46%;">
                    <col style="width: 18%;">
                    <col style="width: 17%;">
                    <col style="width: 19%;">
                </colgroup>
                <tbody>
                    
                    @php $sim = $rkaTableData['simpanan'] ?? []; @endphp
                    <tr>
                        <td class="td-left" id="lbl_rka_sim">{{ $sim['label_rka'] ?? 'Target RKA Simpanan' }}</td>
                        <td data-cell="rka_sim_target">{{ $fmt($sim['target'] ?? 0, true) }}</td>
                        <td rowspan="2" class="td-center font-bold {{ ($sim['pct'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}" style="background: {{ ($sim['pct'] ?? 0) >= 0 ? '#f0fdf4' : '#fef2f2' }};" data-cell="rka_sim_pct">
                            {{ !empty($sim['pct']) ? (($sim['pct'] > 0 ? '+' : '') . number_format($sim['pct'], 2, ',', '.') . '%') : '-' }}
                        </td>
                        <td rowspan="2" class="{{ ($sim['selisih'] ?? 0) < 0 ? 'val-neg' : 'val-pos' }} font-bold" data-cell="rka_sim_selisih">
                            {{ $fmt($sim['selisih'] ?? 0, true) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-left" id="lbl_tgl_sim">{{ $sim['label_tgl'] ?? 'Posisi Riil' }}</td>
                        <td data-cell="rka_sim_posisi">{{ $fmt($sim['posisi'] ?? 0, true) }}</td>
                    </tr>

                    
                    @php $pin = $rkaTableData['pinjaman'] ?? []; @endphp
                    <tr>
                        <td class="td-left" id="lbl_rka_pin">{{ $pin['label_rka'] ?? 'Target RKA Pinjaman' }}</td>
                        <td data-cell="rka_pin_target">{{ $fmt($pin['target'] ?? 0, true) }}</td>
                        <td rowspan="2" class="td-center font-bold {{ ($pin['pct'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}" style="background: {{ ($pin['pct'] ?? 0) >= 0 ? '#f0fdf4' : '#fef2f2' }};" data-cell="rka_pin_pct">
                            {{ !empty($pin['pct']) ? (($pin['pct'] > 0 ? '+' : '') . number_format($pin['pct'], 2, ',', '.') . '%') : '-' }}
                        </td>
                        <td rowspan="2" class="{{ ($pin['selisih'] ?? 0) < 0 ? 'val-neg' : 'val-pos' }} font-bold" data-cell="rka_pin_selisih">
                            {{ $fmt($pin['selisih'] ?? 0, true) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-left" id="lbl_tgl_pin">{{ $pin['label_tgl'] ?? 'Posisi Riil' }}</td>
                        <td data-cell="rka_pin_posisi">{{ $fmt($pin['posisi'] ?? 0, true) }}</td>
                    </tr>

                    
                    @php $sml = $rkaTableData['sml'] ?? []; @endphp
                    <tr>
                        <td class="td-left" id="lbl_rka_sml">{{ $sml['label_rka'] ?? 'Target RKA SML' }}</td>
                        <td data-cell="rka_sml_target">{{ $fmt($sml['target'] ?? 0, true) }}</td>
                        <td rowspan="2" class="td-center font-bold {{ ($sml['pct'] ?? 0) > 0 ? 'text-danger' : (($sml['pct'] ?? 0) < 0 ? 'text-success' : '') }}" style="background: {{ ($sml['pct'] ?? 0) > 0 ? '#fef2f2' : '#f0fdf4' }};" data-cell="rka_sml_pct">
                            {{ !empty($sml['pct']) ? (($sml['pct'] > 0 ? '+' : '') . number_format($sml['pct'], 2, ',', '.') . '%') : '-' }}
                        </td>
                        <td rowspan="2" class="{{ ($sml['selisih'] ?? 0) > 0 ? 'val-neg' : 'val-pos' }} font-bold" data-cell="rka_sml_selisih">
                            {{ $fmt($sml['selisih'] ?? 0, true) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-left" id="lbl_tgl_sml">{{ $sml['label_tgl'] ?? 'Posisi Riil' }}</td>
                        <td data-cell="rka_sml_posisi">{{ $fmt($sml['posisi'] ?? 0, true) }}</td>
                    </tr>

                    
                    @php $npl = $rkaTableData['npl'] ?? []; @endphp
                    <tr>
                        <td class="td-left" id="lbl_rka_npl">{{ $npl['label_rka'] ?? 'Target RKA NPL' }}</td>
                        <td data-cell="rka_npl_target">{{ $fmt($npl['target'] ?? 0, true) }}</td>
                        <td rowspan="2" class="td-center font-bold {{ ($npl['pct'] ?? 0) > 0 ? 'text-danger' : (($npl['pct'] ?? 0) < 0 ? 'text-success' : '') }}" style="background: {{ ($npl['pct'] ?? 0) > 0 ? '#fef2f2' : '#f0fdf4' }};" data-cell="rka_npl_pct">
                            {{ !empty($npl['pct']) ? (($npl['pct'] > 0 ? '+' : '') . number_format($npl['pct'], 2, ',', '.') . '%') : '-' }}
                        </td>
                        <td rowspan="2" class="{{ ($npl['selisih'] ?? 0) > 0 ? 'val-neg' : 'val-pos' }} font-bold" data-cell="rka_npl_selisih">
                            {{ $fmt($npl['selisih'] ?? 0, true) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-left" id="lbl_tgl_npl">{{ $npl['label_tgl'] ?? 'Posisi Riil' }}</td>
                        <td data-cell="rka_npl_posisi">{{ $fmt($npl['posisi'] ?? 0, true) }}</td>
                    </tr>

                    
                    @php $rec = $rkaTableData['recovery_dh'] ?? []; @endphp
                    <tr>
                        <td class="td-left" id="lbl_rka_rec">{{ $rec['label_rka'] ?? 'Target RKA Recovery DH' }}</td>
                        <td data-cell="rka_rec_target">{{ $fmt($rec['target'] ?? 0, true) }}</td>
                        <td rowspan="2" class="td-center font-bold {{ ($rec['pct'] ?? 0) >= 100 ? 'text-success' : 'text-danger' }}" style="background: {{ ($rec['pct'] ?? 0) >= 100 ? '#f0fdf4' : '#fef2f2' }};" data-cell="rka_rec_pct">
                            {{ !empty($rec['pct']) ? number_format($rec['pct'], 2, ',', '.') . '%' : '-' }}
                        </td>
                        <td rowspan="2" class="{{ ($rec['selisih'] ?? 0) < 0 ? 'val-neg' : 'val-pos' }} font-bold" data-cell="rka_rec_selisih">
                            {{ $fmt($rec['selisih'] ?? 0, true) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="td-left" id="lbl_tgl_rec">{{ $rec['label_tgl'] ?? 'Posisi Riil' }}</td>
                        <td data-cell="rka_rec_posisi">{{ $fmt($rec['posisi'] ?? 0, true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div style="display: flex; flex-direction: column; height: 100%;">
            <div class="section-bar" style="font-size: 7.8px; padding: 1.5px 5px;">
                <span>NERACA &amp; ARUS KAS HARIAN (<b id="hdr_tgl_gi405">{{ $statsGI405['tgl'] ?? $tglHarian }}</b>)</span>
            </div>
            @php
                $valPinjaman = $statsGI405['pinjaman_naik'] ?? 0;
                $isPinjamanNaik = $valPinjaman >= 0;
                $labelPinjaman = $isPinjamanNaik ? 'Pinjaman Naik :' : 'Pinjaman Turun :';
                $classPinjamanText = $isPinjamanNaik ? 'text-success' : 'text-danger';
                $classPinjamanCell = $isPinjamanNaik ? 'val-pos' : 'val-neg';

                $valSimpanan = $statsGI405['simpanan_turun'] ?? 0;
                $isSimpananNaik = $valSimpanan >= 0;
                $labelSimpanan = $isSimpananNaik ? 'Simpanan Naik :' : 'Simpanan Turun :';
                $classSimpananText = $isSimpananNaik ? 'text-success' : 'text-danger';
                $classSimpananCell = $isSimpananNaik ? 'val-pos' : 'val-neg';
            @endphp
            <table class="sheet-table table-stats-single-col" style="flex: 1 1 auto; height: 100%;">
                <colgroup>
                    <col style="width: 58%;"><col style="width: 42%;">
                </colgroup>
                <tbody>
                    
                    <tr>
                        <td class="td-left font-bold">Laba On Berjalan</td>
                        <td class="font-bold" data-cell="gi_laba_on">{{ $fmt($statsGI405['laba_on'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold">Kas Kantor (Fisik Brankas)</td>
                        <td class="font-bold" data-cell="gi_kas_kantor">{{ $fmt($statsGI405['kas_kantor'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold">Kredit yang diberikan</td>
                        <td class="font-bold" data-cell="gi_kredit_diberikan">{{ $fmt($statsGI405['kredit_diberikan'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold">Simpanan Pihak ke III</td>
                        <td class="font-bold" data-cell="gi_simpanan_p3">{{ $fmt($statsGI405['simpanan_p3'] ?? 0, true) }}</td>
                    </tr>

                    
                    <tr style="border-top: 1.5px solid #cbd5e1;">
                        <td class="td-left font-bold">Realisasi (+)</td>
                        <td class="font-bold" data-cell="gi_realisasi">{{ $fmt($statsGI405['realisasi'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold">Pemasukan Ang. Pokok (-)</td>
                        <td class="font-bold" data-cell="gi_pemasukan_ang_pokok">{{ $fmt($statsGI405['pemasukan_pokok'] ?? $statsGI405['pemasukan_ang_pokok'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold {{ $classPinjamanText }}" id="lbl_pinjaman_naik">{{ $labelPinjaman }}</td>
                        <td class="font-bold {{ $classPinjamanCell }}" data-cell="gi_pinjaman_naik">{{ $fmt(abs($valPinjaman), true) }}</td>
                    </tr>

                    
                    <tr style="border-top: 1.5px solid #cbd5e1;">
                        <td class="td-left font-bold">Total Pemasukan Dana (+)</td>
                        <td class="font-bold" data-cell="gi_total_pemasukan_dana">{{ $fmt($statsGI405['pemasukan_dana'] ?? $statsGI405['total_pemasukan_dana'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold">Total Penarikan Dana (-)</td>
                        <td class="font-bold" data-cell="gi_total_penarikan_dana">{{ $fmt($statsGI405['penarikan_dana'] ?? $statsGI405['total_penarikan_dana'] ?? 0, true) }}</td>
                    </tr>
                    
                    <tr>
                        <td class="td-left font-bold {{ $classSimpananText }}" id="lbl_simpanan_turun">{{ $labelSimpanan }}</td>
                        <td class="font-bold {{ $classSimpananCell }}" data-cell="gi_simpanan_turun">{{ $fmt(abs($valSimpanan), true) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="report-footer">
        <div class="footer-line"></div>
        <span class="footer-watermark">
            {{ strtoupper($namaUker) }}
        </span>
    </div>
</div>

@include('dashboard.modal-detail-debitur')
@include('dashboard.modal-profil-debitur')
@include('dashboard.modal-request-berkas')
@include('dashboard.modal-manual-real')
@include('dashboard.modal-setting-dashboard')

<script src="{{ asset('js/xlsx.full.min.js') }}"></script>
@include('dashboard.js')

<script>
    function initMantriHover() {
        const mantriMap = {};
        document.querySelectorAll('tr[data-mantri-idx]').forEach(tr => {
            const idx = tr.getAttribute('data-mantri-idx');
            if (!mantriMap[idx]) mantriMap[idx] = [];
            mantriMap[idx].push(tr);
        });

        let activeIdx = null;

        function setActiveMantri(idx) {
            if (activeIdx === idx) return;

            if (activeIdx !== null && mantriMap[activeIdx]) {
                const prevRows = mantriMap[activeIdx];
                for (let i = 0; i < prevRows.length; i++) {
                    prevRows[i].classList.remove('row-hover-active');
                }
            }

            if (idx !== null && mantriMap[idx]) {
                const newRows = mantriMap[idx];
                for (let i = 0; i < newRows.length; i++) {
                    newRows[i].classList.add('row-hover-active');
                }
            }

            activeIdx = idx;
        }

        Object.keys(mantriMap).forEach(idx => {
            mantriMap[idx].forEach(row => {
                row.addEventListener('mouseenter', () => setActiveMantri(idx), { passive: true });
                row.addEventListener('mouseleave', () => setActiveMantri(null), { passive: true });
            });
        });

        const sheetWrapper = document.querySelector('.sheet-wrapper');
        if (sheetWrapper) {
            sheetWrapper.addEventListener('mouseleave', () => {
                setActiveMantri(null);
            }, { passive: true });
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        initMantriHover();
    });
</script>

@endsection