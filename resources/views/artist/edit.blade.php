@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="height: 80vh">
        <div class="col-md-4 border rounded h-100">
            気分が楽しくなる曲
            <form action="/song/add" method="post">
                <input type="hidden" name="artist_id" value="{{$artist_id}}">
                <input type="hidden" name="type" value="1">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="submit" value="追加" class="btn btn-primary">
            </form>
            @foreach($happy_songs as $happy_song)
            <div>
                {{ $happy_song->name }}
            </div>
            @endforeach
        </div>
        <div class="col-md-4 border rounded h-100">
            何かに挑戦したい、頑張れる曲
            <form action="/song/add" method="post">
                <input type="hidden" name="artist_id" value="{{$artist_id}}">
                <input type="hidden" name="type" value="2">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="submit" value="追加" class="btn btn-primary">
            </form>
            @foreach($challenge_songs as $challenge_song)
            <div>
                {{ $challenge_song->name }}
            </div>
            @endforeach
        </div>
        <div class="col-md-4 border rounded h-100">
            落ち込んだり、哀しい時に聴く曲
            <form action="/song/add" method="post">
                <input type="hidden" name="artist_id" value="{{$artist_id}}">
                <input type="hidden" name="type" value="3">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="submit" value="追加" class="btn btn-primary">
            </form>
            @foreach($sad_songs as $sad_song)
            <div>
                {{ $sad_song->name }}
            </div>
            @endforeach
        </div>
    </div>
    <div style="height: 20vh" class="text-center mt-4">
        <a href="/recommend/{{$artist_id}}" class="btn btn-warning">拡げる</a>
    </div>
</div>
@endsection
