<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            ['id' => 1, 'name' => 'Future, Implementation'],
            ['id' => 2, 'name' => 'Completed'],
            ['id' => 3, 'name' => 'Future, Formulation'],
            ['id' => 4, 'name' => 'Current, Prime Mission'],
            ['id' => 5, 'name' => 'Current, Extended Mission'],
            ['id' => 6, 'name' => 'Current'],
            ['id' => 7, 'name' => 'Launch Failure'],
            ['id' => 8, 'name' => 'Future'],
            ['id' => 9, 'name' => 'Eliminated'],
        ]);
    }
}
