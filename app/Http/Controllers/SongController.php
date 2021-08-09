<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
    public function add(Request $request)
    {
        $artist_id = $request->artist_id;
        $name = $request->name;
        $type = $request->type;

        $song = new Song();
        $song->artist_id = $artist_id;
        $song->name = $name;
        $song->type = $type;
        $song->save();
        return redirect("/artist/edit/$artist_id");
    }
}
