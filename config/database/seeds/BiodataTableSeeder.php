<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodata')->insert([
            'nama' => 'Administrator',
            'nisn' => '-',
            'tempat_lahir' => '-',
            'tanggal_lahir' => '1999-11-18',
            'no_telp' => '-',
            'alamat' => '-',
            'un_average' => '-',
            'no_ijazah' => '-',
            'foto' => '-',
            'berkas' => '-',
            'status' => '-',
            'total_pembayaran' => '-',
            'no_test' => '-',
            'lokasi' => '-',
            'user_id' => 1,
        ]);
    }
}
