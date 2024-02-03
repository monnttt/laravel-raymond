<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\support\str;
class pembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = DB::table('siswas_tables')->first();
        $petugas = DB::table('petugases_tables')->first();
        $spp = DB::table('spps_tables')->where('id_spp', $siswa->id_spp)->first();

        DB::table('pembayarans_tables')->insert([
            "id_pembayaran" =>rand(1, 10),
            "id_petugas" => $petugas -> id_petugas,
            "nisn" => $siswa -> nisn,
            "tgl_bayar" => now(),
            "bulan_dibayar" => str::random(8),
            "tahun_dibayar" => str::random(4),
            'id_spp' => $spp->id_spp,
            'jumlah_dibayar' => rand(10, 40),
        ]);
    }
}
