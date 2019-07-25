<?php

use Illuminate\Database\Seeder;

use App\Imports\MoviesImport;
use Maatwebsite\Excel\Facades\Excel;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {
      Excel::import(new MoviesImport, 'movies.xlsx');
    }
}
