<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = [
            ['name' => 'Iqbal', 'Mengajar di Kelas' => 'X'],
            ['name' => 'Ani', 'Mengajar di Kelas' => 'XI'],
            ['name' => 'Citra', 'Mengajar di Kelas' => 'XII'],
        ];

        foreach ($gurus as $guru) {
            Guru::create($guru);
        }
    }
}
