<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaunchpadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('launchpad')->insert([
            ['id' => 1, 'name' => 'Cape Canaveral, FL'],
            ['id' => 2, 'name' => 'Vandenberg Air Force Base, CA'],
            ['id' => 3, 'name' => "NASA's Kennedy Space Center"],
            ['id' => 4, 'name' => 'Tanegashima Space Center, Japan'],
            ['id' => 5, 'name' => 'Cape Canaveral Air Force Station'],
            ['id' => 6, 'name' => 'Kourou, French Guiana'],
            ['id' => 7, 'name' => 'Plesetsk Cosmodrome, Russia']

        ]);
    }
}
