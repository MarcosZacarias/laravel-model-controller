<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Function print all movies in db_movies
    public function index(){
        $title= "Homepage";
        $movies= Movie::all();

        
    return view('home', compact("title", "movies"));
    }
    // Function set details
    public function movieDetails($id){
        $movie = Movie::findOrFail($id);
        $title_movie= ucwords($this->getInfo($movie, "title"));
        $original_title_movie= ucwords($this->getInfo($movie, "original_title"));
        $nationality_movie= ucfirst($this->getInfo($movie, "nationality"));
        $date = date_create($this->getInfo($movie, "date"));
        $date_movie= date_format($date, "d/m/Y");
        $vote_movie = number_format($this->getInfo($movie, "vote"), 1, ",", "");
        // ddd($date_movie);



        return view("movie-detail", 
        compact("movie", "title_movie", "nationality_movie", "original_title_movie", "date_movie", "vote_movie"));
    }
    //  Function get info
    public function getInfo($object, $info){
        $title = $object->$info;
        return $title;
    }
}