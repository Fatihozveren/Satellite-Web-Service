<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Inter-Agency Partnerships'],
            ['id' => 2, 'name' => 'Earth Observing System (EOS)'],
            ['id' => 3, 'name' => 'Historical Missions'],
            ['id' => 4, 'name' => 'Earth System Science Pathfinder Program'],
            ['id' => 5, 'name' => 'Earth Systematic Missions Program'],
            ['id' => 6, 'name' => 'Earth Venture Class'],
            ['id' => 7, 'name' => 'Precipitation Missions'],
            ['id' => 8, 'name' => 'A-Train'],
            ['id' => 9, 'name' => 'Other'],


        ]);
    }
}
