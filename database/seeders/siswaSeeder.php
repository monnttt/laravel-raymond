<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\support\str;
class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getIdkelas = DB:: table('kelases_tables') -> insertGetId([
            'id_kelas' => rand(1,10),
            'nama_kelas'=> str::random(8),
            'kompentesi_keahlian' =>str::random(10),
        ]);

        $getIdspp = DB :: table('spps_tables')->insertGetId([
            'id_spp' => rand(1, 50),
            'tahun' => random_int(2003, 2024),
            'nominal' => rand(1, 12),
        ]);

        DB::table('siswas_tables')->insert([
            'nisn' => rand (1,50),
            'nis' =>rand(1,10),
            'nama' => 'raja',
            'id_kelas' => $getIdkelas,
            'alamat' => 'cikrang',
            'no_telp' => '08816803120',
            'id_spp' => $getIdspp,
        ]);
    }
}
