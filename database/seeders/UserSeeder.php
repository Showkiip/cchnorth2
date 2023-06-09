<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->count() > 0) {
            return;
        }
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('12345678')
            ],
            [
                'id' => 2,
                'name' => 'user',
                'email' => 'user@test.com',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
