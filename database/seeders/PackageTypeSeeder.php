<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('package_types')->count() > 0) {
            return;
        }
        DB::table('package_types')->insert([
            ['package_category_id' => 3, 'package_name' => 'Winter'],
            ['package_category_id' => 3, 'package_name' => 'Summer'],
            ['package_category_id' => 3, 'package_name' => 'Autumn'],
            ['package_category_id' => 3, 'package_name' => 'Spring'],

        ]);
    }
}
