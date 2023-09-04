<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Genre;
use App\models\Playlist;

class GenreController extends Controller
{
    
    public function index(){
        return view("genres", ['genres'=>Genre::all()]);
    }

    public function laatBepaaldeLijstZien($genreId){
        
        //dd(Genre::find($genreId)->songs);
        
        return view("liedjes", ['songs'=>Genre::find($genreId)->songs, "playlists"=>Playlist::all()]);
    }

}
