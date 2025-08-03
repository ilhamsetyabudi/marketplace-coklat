<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePageSetting;


class HomePageSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat satu baris data kosong jika belum ada
        HomePageSetting::firstOrCreate([]);
    }
}
