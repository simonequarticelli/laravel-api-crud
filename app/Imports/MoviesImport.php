<?php

namespace App\Imports;

use App\Movie;
use Maatwebsite\Excel\Concerns\ToModel;

class MoviesImport implements ToModel
{

    public function model(array $row)
    {
        return new Movie([
          'title'    => $row[0],  //<- righe in base alla posizione
          'director'    => $row[1],
        ]);
    }
}
