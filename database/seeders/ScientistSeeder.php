<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScientistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scientists')->insert([
            ['id' => 1, 'name' => '	Richard C.', 'surname' => 'Willson'],
            ['id' => 2, 'name' => 'Claire', 'surname' => 'Parkinson'],
            ['id' => 3, 'name' => 'Lazaros', 'surname' => 'Oreopoulos'],
            ['id' => 4, 'name' => 'Ramesh', 'surname' => 'Kakar'],
            ['id' => 5, 'name' => 'William', 'surname' => 'Guit'],
            ['id' => 6, 'name' => 'Norman', 'surname' => 'Loeb'],
            ['id' => 7, 'name' => 'Joao', 'surname' => 'Teixeira'],
            ['id' => 8, 'name' => 'Akira', 'surname' => 'Shibata'],
            ['id' => 9, 'name' => 'Roy', 'surname' => 'Spencer'],
            ['id' => 10, 'name' => 'Michael', 'surname' => 'King'],
            ['id' => 11, 'name' => 'Steve', 'surname' => 'Graham'],
            ['id' => 12, 'name' => 'Steven', 'surname' => 'Platnick'],
            ['id' => 13, 'name' => 'Vince', 'surname' => 'Salomonson'],
            ['id' => 14, 'name' => 'Bruce', 'surname' => 'Wielicki'],
            ['id' => 15, 'name' => 'Gary', 'surname' => 'Lagerloef'],
            ['id' => 16, 'name' => 'David', 'surname' => 'Le Vine'],
            ['id' => 17, 'name' => 'Bryan', 'surname' => 'Duncan'],
            ['id' => 18, 'name' => 'Joanna', 'surname' => 'Joiner'],
            ['id' => 19, 'name' => 'Chip', 'surname' => 'Trepte'],
            ['id' => 20, 'name' => 'Dave', 'surname' => 'Winker'],
            ['id' => 21, 'name' => 'Jacques', 'surname' => 'Pelon'],
            ['id' => 22, 'name' => 'Graeme', 'surname' => 'Stephens'],
            ['id' => 23, 'name' => 'Deb', 'surname' => 'Vane'],
            ['id' => 24, 'name' => 'David L.', 'surname' => 'Reasoner'],
            ['id' => 25, 'name' => 'Susan', 'surname' => 'Gussenhoven-Shea'],
            ['id' => 26, 'name' => 'Christopher', 'surname' => 'Ruf'],
            ['id' => 27, 'name' => 'Adam', 'surname' => 'Szabo'],
            ['id' => 28, 'name' => 'Robert A.', 'surname' => 'Hoffman'],
            ['id' => 29, 'name' => 'Thomas', 'surname' => 'Brakke'],
            ['id' => 30, 'name' => 'Robert', 'surname' => 'Green'],
            ['id' => 31, 'name' => 'Simon', 'surname' => 'Hook'],
            ['id' => 32, 'name' => 'Berrien', 'surname' => 'Moore'],
            ['id' => 33, 'name' => 'Sean', 'surname' => 'Crowell'],
            ['id' => 34, 'name' => 'Todd', 'surname' => 'King'],
            ['id' => 35, 'name' => 'William E.', 'surname' => 'Shenk'],
            ['id' => 36, 'name' => 'Donald', 'surname' => 'Fairfield'],
            ['id' => 37, 'name' => 'Dennis F.', 'surname' => 'Chesters'],
            ['id' => 38, 'name' => 'Ralph', 'surname' => 'Dubayah'],
            ['id' => 39, 'name' => 'Jim', 'surname' => 'Pontius'],
            ['id' => 40, 'name' => 'Barbara', 'surname' => 'Hilton'],
            ['id' => 41, 'name' => 'Gail', 'surname' => 'Skofronick-Jackson'],
            ['id' => 42, 'name' => 'Arthur', 'surname' => 'Hou'],
            ['id' => 43, 'name' => 'Michael', 'surname' => 'Mishchenko'],
            ['id' => 44, 'name' => 'Ellsworth', 'surname' => 'Judd Welton'],
            ['id' => 45, 'name' => 'Hal', 'surname' => 'Maring'],
            ['id' => 46, 'name' => 'Bryon', 'surname' => 'Tapley'],
            ['id' => 47, 'name' => 'Frank', 'surname' => 'Flechtner'],
            ['id' => 48, 'name' => 'Frank', 'surname' => 'Webb'],
            ['id' => 49, 'name' => 'Felix', 'surname' => 'Landerer'],
            ['id' => 50, 'name' => 'John', 'surname' => 'LaBrecque'],
            ['id' => 51, 'name' => 'H. Jay', 'surname' => 'Zwally'],
            ['id' => 52, 'name' => 'Thomas', 'surname' => 'Newman'],
            ['id' => 53, 'name' => 'Thorsten', 'surname' => 'Marcus'],
            ['id' => 54, 'name' => 'Richard', 'surname' => 'Slonaker'],
            ['id' => 55, 'name' => 'Ernesto', 'surname' => 'Rodriguez'],
            ['id' => 56, 'name' => 'Lee-Lueng', 'surname' => 'Fu'],
            ['id' => 57, 'name' => 'Eric', 'surname' => 'Lindstrom'],
            ['id' => 58, 'name' => 'Joshua', 'surname' => 'Willis'],
            ['id' => 59, 'name' => 'Margaret', 'surname' => 'Srinivasan'],
            ['id' => 60, 'name' => 'Jeff G.', 'surname' => 'Masek'],
            ['id' => 61, 'name' => 'James R.', 'surname' => 'Irons'],
            ['id' => 62, 'name' => 'Bruce', 'surname' => 'Cook'],
            ['id' => 63, 'name' => 'Richard', 'surname' => 'Blakeslee'],
            ['id' => 64, 'name' => 'David J.', 'surname' => 'Diner'],
            ['id' => 65, 'name' => 'Kevin A.', 'surname' => 'Burke'],
            ['id' => 66, 'name' => 'William P.', 'surname' => 'Nordberg'],
            ['id' => 67, 'name' => 'Albert J.', 'surname' => 'Fleig, Jr.'],
            ['id' => 68, 'name' => 'David', 'surname' => 'Crisp'],
            ['id' => 69, 'name' => 'Charles E.', 'surname' => 'Miller'],
            ['id' => 70, 'name' => 'Mike', 'surname' => 'Gunson'],
            ['id' => 71, 'name' => 'Annmarie', 'surname' => 'Eldering'],
            ['id' => 72, 'name' => 'Jeremy', 'surname' => 'Werdell'],
            ['id' => 73, 'name' => 'Antonio', 'surname' => 'Mannino'],
            ['id' => 74, 'name' => 'Brian', 'surname' => 'Cairns'],
            ['id' => 75, 'name' => 'Brian', 'surname' => 'Drouin'],
            ['id' => 76, 'name' => 'Tristan', 'surname' => "L'Ecuyer"],
            ['id' => 77, 'name' => 'Robert C.', 'surname' => 'Thomas'],
            ['id' => 78, 'name' => 'Tom G.', 'surname' => 'Farr'],
            ['id' => 79, 'name' => 'Mike', 'surname' => 'Kobrick'],
            ['id' => 80, 'name' => 'Jared', 'surname' => 'Entin'],
            ['id' => 81, 'name' => 'Eni', 'surname' => 'Njoku'],
            ['id' => 82, 'name' => 'Robert F.', 'surname' => 'Cahalan'],
            ['id' => 83, 'name' => 'Douglas', 'surname' => 'Rabin'],
            ['id' => 84, 'name' => 'Diane', 'surname' => 'Evans'],
            ['id' => 85, 'name' => 'William', 'surname' => 'Chu'],
            ['id' => 86, 'name' => 'Jim', 'surname' => 'Gleason'],
            ['id' => 87, 'name' => 'N. Christina', 'surname' => 'Hsu'],
            ['id' => 88, 'name' => 'Steve', 'surname' => 'Neeck'],
            ['id' => 89, 'name' => 'Robert', 'surname' => 'Wolfe'],
            ['id' => 90, 'name' => 'Si-Chee', 'surname' => 'Tsay'],
            ['id' => 91, 'name' => 'Scott', 'surname' => 'Braun'],
            ['id' => 92, 'name' => 'William', 'surname' => 'Blackwell'],
            ['id' => 93, 'name' => 'Chris', 'surname' => 'Bonniksen'],
            ['id' => 94, 'name' => 'Kelly', 'surname' => 'Chance'],
            ['id' => 95, 'name' => 'Mark', 'surname' => 'Schoerberl']


        ]);
    }
}
