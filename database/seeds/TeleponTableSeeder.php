<?php

use Illuminate\Database\Seeder;

class TeleponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telepon')->insert([
            'no_tlp' => '0891122334412',
            'pengguna_id' => '1'
        ]);
    }
}
