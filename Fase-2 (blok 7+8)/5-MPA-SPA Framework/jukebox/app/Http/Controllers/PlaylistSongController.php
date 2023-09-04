<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PlaylistSong;

class PlaylistSongController extends Controller
{
    
    public function voegNummerToeTotSpeellijst(Request $request, $songId)
    {
        
        $newPlaylistSong = new PlaylistSong;
        $newPlaylistSong->song_id = $songId;
        $newPlaylistSong->playlist_id = $request->playlist;
        $newPlaylistSong->save();

        return redirect('/liedjes');
    }

}
