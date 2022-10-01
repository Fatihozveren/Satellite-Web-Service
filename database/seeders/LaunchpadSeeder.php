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
            ['id' => 1, 'name' => 'Inter-Agency Partnerships','location'=> 'Devlet Konservatuvarı'],
            ['id' => 2, 'name' => 'Earth Observing System (EOS)','location'=> 'Devlet Konservatuvarı'],
            ['id' => 3, 'name' => 'Historical Missions','location'=> 'Devlet Konservatuvarı'],
            ['id' => 4, 'name' => 'Earth System Science Pathfinder Program','location'=> 'Devlet Konservatuvarı'],
            ['id' => 5, 'name' => 'Earth Systematic Missions Program','location'=> 'Devlet Konservatuvarı'],
            ['id' => 6, 'name' => 'Earth Venture Class','location'=> 'Devlet Konservatuvarı'],
            ['id' => 7, 'name' => 'Precipitation Missions','location'=> 'Devlet Konservatuvarı'],
            ['id' => 8, 'name' => 'A-Train','location'=> 'Devlet Konservatuvarı'],
            ['id' => 9, 'name' => 'Other','location'=> 'Devlet Konservatuvarı'],


        ]);
    }
}
