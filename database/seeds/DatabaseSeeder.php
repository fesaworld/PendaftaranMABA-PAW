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
    }
}