@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/artist/create" class="btn btn-primary">おすすめ作成</a>
            @if($artists->isEmpty())
            <div>
                おすすめリストは作成されていません。
            </div>
            @endif
            @foreach($artists as $artist)
            <div>
                {{$artist->name}}
                <a href="/artist/edit/{{ $artist->id }}">曲追加</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
