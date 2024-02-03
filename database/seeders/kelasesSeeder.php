<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\support\str;

class kelasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelases_tables')->insert([
            "id_kelas" => rand(1,10),
            "nama_kelas" => str::random(10),
            "kompentesi_keahlian" => str::random(10),
        ]);
    }
}
