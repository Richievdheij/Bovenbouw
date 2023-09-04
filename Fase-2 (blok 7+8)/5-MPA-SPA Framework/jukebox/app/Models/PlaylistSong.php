<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Song;


class PlaylistSong extends Model
{
    use HasFactory;

    public function song() {
        return $this->hasOne(Song::class);
    }

}
