<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panitias')->insert([
            ['nama' => 'Alfian', 'email' => 'alfian@gmail.com', 'jabatan' => 'Koordinator', 'pasword' => bcrypt('alfian123')],
            ['nama' => 'Sarah', 'email' => 'sarah@gmail.com', 'jabatan' => 'Bendahara', 'password' => bcrypt('sarah456')],
            ['nama' => 'Budi', 'email' => 'budi@gmail.com', 'jabatan' => 'Sekretaris', 'password' => bcrypt('budi789')],
            ['nama' => 'Linda', 'email' => 'linda@gmail.com', 'jabatan' => 'Anggota', 'password' => bcrypt('linda321')],
            ['nama' => 'Rina', 'email' => 'rina@gmail.com', 'jabatan' => 'Anggota', 'password' => bcrypt('rina654')]
        ]);
    }
}
