@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{$artist->name}} おすすめリスト
            <form action="/recommend/{{ $artist->id }}/result" method="get">
                <div class="form-group">
                    <label for="type">どんな曲を聴きたい？</label>
                    <select class="form-control" id="type" name="type">
                        <option value="1">気分が楽しくなる曲</option>
                        <option value="2">何かに挑戦したい、頑張れる曲</option>
                        <option value="3">落ち込んだり、哀しい時に聴く曲</option>
                    </select>
                </div>
                <input type="submit" value="結果を見る" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection