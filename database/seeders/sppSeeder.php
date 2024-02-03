<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use illuminate\support\str;

class sppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spps_tables')->insert([
            'id_spp' => rand(5,10),
            'tahun' => rand(2001, 2023),
            'nominal' => rand(1,12),
        ]);
    }
}
