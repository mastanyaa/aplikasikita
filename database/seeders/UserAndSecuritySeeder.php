<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAndSecuritySeeder extends Seeder
{
    public function run(): void
    {
        // 1. Hapus Akun Admin Lama (jika masih tersisa)
        User::where('name', 'admin')->delete();

        // 2. Buat/Update Akun Utama Administrator (Kaunit / Kepala Unit)
        User::updateOrCreate(
            ['name' => 'administrator'],
            [
                'email' => 'kaunit@monitoring.local',
                'password' => Hash::make('tapen6201'),
                'role' => 'administrator', // Bertindak sebagai Kaunit / Kepala Unit
                'is_active' => true,
            ]
        );

        // 3. Tarik PN Pengelola Unik dari data_lw321harian (Filter '-', Kosong, NULL, '0')
        if (DB::getSchemaBuilder()->hasTable('data_lw321harian')) {
            $pengelolaList = DB::table('data_lw321harian')
                ->whereNotNull('pn_pengelola_singlepn')
                ->where('pn_pengelola_singlepn', '!=', '')
                ->where('pn_pengelola_singlepn', '!=', '-')
                ->where('pn_pengelola_singlepn', '!=', '0')
                ->select('pn_pengelola_singlepn')
                ->distinct()
                ->pluck('pn_pengelola_singlepn');

            foreach ($pengelolaList as $pn) {
                $pnClean = trim($pn);
                if (empty($pnClean) || $pnClean === '-') continue;

                $emailDummy = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', explode('-', $pnClean)[0])) . '@monitoring.local';

                User::updateOrCreate(
                    ['name' => $pnClean],
                    [
                        'email' => $emailDummy,
                        'password' => Hash::make('tapen6201'),
                        'role' => 'mantri',
                        'is_active' => true,
                    ]
                );
            }
        }

        // 4. Inisialisasi Security Settings Default
        $defaultSettings = [
            'master_key' => Hash::make('248657'),
            'secret_slug' => 'v1-secure-gateway-77',
            'stealth_mode' => 'drop',
            'server_ip' => '55.33.124.197',
            'stealth_enabled' => '1',
        ];

        foreach ($defaultSettings as $key => $value) {
            DB::table('security_settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'created_at' => now(), 'updated_at' => now()]
            );
        }

        // 5. Default Hak Akses Modul Mantri
        $modules = ['dashboard', 'import-data', 'data-tables', 'tagihan', 'monitoring-ao', 'laporan'];
        foreach ($modules as $mod) {
            DB::table('module_permissions')->updateOrInsert(
                ['role' => 'mantri', 'module_key' => $mod],
                ['is_allowed' => true, 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
