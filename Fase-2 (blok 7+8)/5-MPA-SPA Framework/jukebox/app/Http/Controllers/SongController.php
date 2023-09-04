<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Song;
use App\models\Playlist;

class SongController extends Controller
{
    public function index(){
        return view("liedjes", ['songs'=>Song::all(), "playlists"=>Playlist::all()]);
    }

    public function laatBepaaldeLijstZien($songId){
        $song = Song::find($songId);

        $duration = gmdate("H:i:s",$song->duration);


        return view("bepaaldLiedje", ['song'=>$song, "duration"=>$duration, "playlists"=>Playlist::all()]);

    }
    

}
