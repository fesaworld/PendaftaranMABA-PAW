<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            "email" => "admin@admin.com",
            "hak_akses" =>"administrator",
            "password" => Hash::make('admin123')
        ]);

        DB::table('biodatas')->insert([
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