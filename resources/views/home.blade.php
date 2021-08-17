@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <body>
            <div class="jumbotron">
                <h1 class="display-4">あなただけのおすすめ　プレイリストを作ろう！</h1>
                <p class="lead">What is your favorite artist?</p>
                <hr class="my-4">
                <a href="/artist/create" class="btn btn-warning btn-lg">おすすめ作成</a>
            </div>
            </body>
            @if($artists->isEmpty())
            <div>
                おすすめリストは作成されていません。
            </div>
            @endif
            @foreach($artists as $artist)
            <div>
                {{$artist->name}}
                <a href="/artist/edit/{{ $artist->id }}">更に曲を追加する</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
