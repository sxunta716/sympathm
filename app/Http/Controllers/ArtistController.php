<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Artist;
use App\Song;

class ArtistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('artist/create');
    }
    
    public function store(Request $request)
    {
        $name = $request->name;
        $artist = new Artist();
        $artist->user_id = Auth::id();
        $artist->name = $name;
        $artist->save();
        return redirect('/home');
    }
    
    public function edit($artist_id)
    {
        $happy_songs = Song::where('artist_id', $artist_id)->where('type', 1)->get();
        $challenge_songs = Song::where('artist_id', $artist_id)->where('type', 2)->get();
        $sad_songs = Song::where('artist_id', $artist_id)->where('type', 3)->get();
        return view('artist/edit', compact('artist_id', 'happy_songs', 'challenge_songs', 'sad_songs'));
    }
}
