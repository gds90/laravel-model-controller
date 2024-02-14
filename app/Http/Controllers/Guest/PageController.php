<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie; // importo il modello Movie
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Funzione che recupera tutti i film contenuti nella tabella movies
        $movies = Movie::all();

        return view('index', compact('movies'));
    }

    public function show($id)
    {
        $movies = Movie::all();
        // Funzione che cerca il film con l'id passato come parametro di funzione
        $movie = $movies->find($id);

        return view('show_details', compact('movie'));
    }
}
