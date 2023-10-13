<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title= "Homepage";
        $movies= Movie::all();

        
    return view('home', compact("title", "movies"));
    }

    public function movieDetail($id){
        $title= "Movie Detail";
        $movie = Movie::findOrFail($id);
        return view("movie-detail", compact("movie", "title"));
    }
}