<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('sliders')->count() > 0) {
            return;
        }
        DB::table('sliders')->insert([
            [   'title' => 'Exciting skardu tour',
                'subtitle' => 'welcome to skardu']
             ]);
    }
}
