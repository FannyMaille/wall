<?php

namespace App\Http\Controllers;

use App\Models\Distributeur;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class CinemaController extends Controller
{
    public function index()
    {
        $films = Film::paginate(50);
        // $messages = Message::all();
        return view('films',['films' =>$films]);
    }

    public function ShowFilm(Request $request)
    {
        $film = Film::findOrFail($request->id);

        return view('film',['film' =>$film]);
    }

    public function ShowGenre(Request $request)
    {
        $genre = Genre::findOrFail($request->id);

        return view('genre',['genre' =>$genre]);
    }

    public function ShowDistributeur(Request $request)
    {
        $distributeur = Distributeur::findOrFail($request->id);

        return view('distributeur',['distributeur' =>$distributeur]);
    }
}
