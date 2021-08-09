<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Song;

class ShareController extends Controller
{
    public function index($id)
    {
        $artist = Artist::find($id);
        return view('share/index', compact('artist'));
    }
    
    public function result(Request $request, $id)
    {
        $type = $request->type;
        $artist_id = $id;
        $song = Song::where('artist_id', $artist_id)->where('type', $type)->inRandomOrder()->first();
        return view('share/result', compact('song'));
    }
}
