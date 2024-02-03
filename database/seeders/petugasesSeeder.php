<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\support\str;

class petugasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ["admin", 'petugas'];
        DB::table('petugases_tables')->insert([
            "id_petugas" => rand(1,50),
            'ussername' => str::random(25),
            'password' => str::random(25),
            'nama_petugas' => $levels[array_rand($levels)],
        ]);
    }
}
