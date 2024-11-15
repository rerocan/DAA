<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            ['name' => 'X'],
            ['name' => 'XI'],
            ['name' => 'XII'],
        ];

        foreach ($kelas as $kelas) {
            Kelas::create($kelas);
        }
    }
}
