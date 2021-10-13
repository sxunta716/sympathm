@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="display-4 mb-4">あなたにおすすめの曲は</div>
            <div class="display-2">{{ $song->name }}です！！</div>
            
            <div>あなたも拡げてみませんか？<br>拡げたい場合は↓のボタンを押してください</div>
            <a href="/register" class="btn btn-warning btn-lg">sympathm</a>
        </div>
    </div>
</div>
@endsection