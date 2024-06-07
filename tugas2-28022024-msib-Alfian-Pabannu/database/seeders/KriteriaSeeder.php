<?php

namespace Database\Seeders;

use App\Models\kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kriterias')->insert([
            [
                'kriteria' => str('Kinerja Akademik'),
                'nilai' => 40,
            ],
            [
                'kriteria' => str('Kondisi Ekonomi'),
                'nilai' => 30,
            ],
            [
                'kriteria' => str('keaktifan ekstrakulikuler siswa'),
                'nilai' => 15,
            ],
            [
                'kriteria' => str('Prestasi siswa'),
                'nilai' => 15,
            ],
        ]);
    }
}
