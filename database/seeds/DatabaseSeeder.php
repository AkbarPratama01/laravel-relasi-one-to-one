<?php

use Illuminate\Database\Seeder;
use App\Pengguna;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PenggunaTableSeeder::class);
        $this->call(TeleponTableSeeder::class);
    }
}
