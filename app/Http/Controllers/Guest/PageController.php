<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie; // importo il modello Movie
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
        // // Funzione che cerca il film con l'id passato come parametro di funzione
        $movie = Movie::find($id);

        return view('show_details', compact('movie'));
    }
}
