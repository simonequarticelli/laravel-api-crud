<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller
{

  public function index(){
    $movies = Movie::all();
    return response()->json([
      'success' => true,
      'result' => $movies
    ]);
  }


  public function show($id){
    $movie = Movie::find($id);
    if (!empty($movie)) {
      return response()->json([
        'success' => true,
        'result' => $movie
      ]);
    }
    return response()->json([
      'success' => false,
      'error' => 'Non ci sono film con questo id' . $id
    ]);
  }


  //NO CREATE


  public function store(request $request){
    $movie = $request->all();
    $new_movie = new Movie();
    $new_movie->fill($movie);
    $new_movie->save();
    return response()->json([
      'success' => true,
      'result' => $new_movie
    ]);

    return response()->json([
      'success' => false,
      'error' => 'Non ci sono film con questo id' . $id
    ]);
  }

  public function update(request $request, $id){
    //cerco l'id
    $movie = Movie::find($id);
    //recupero i dati del film corrispondenti all'id
    $data = $request->all();
    //controllo che l'id esista
    if (!empty($movie)) {
      //aggiorno i dati
      $movie->update($data);
      return response()->json([
        'success' => true,
        //mostro il film aggiornato
        'result' => $movie
      ]);
    }
    return response()->json([
      'success' => false,
      'error' => 'Non ci sono film con questo id' . $id
    ]);
  }




  public function destroy($id){
    $movie = Movie::find($id);
    if (!empty($movie)) {
      $movie->delete();
      return response()->json([
        'success' => true,
        //mostro array vuoto come conferma della cancellazione
        'result' => []
      ]);
    }
    return response()->json([
      'success' => false,
      'error' => 'Non ci sono film con questo id' . $id
    ]);
  }



}
