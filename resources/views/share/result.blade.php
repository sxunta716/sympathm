@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="display-4 mb-4">あなたにおすすめの曲は</div>
            <div class="display-2">{{ $song->name }}</div>
        </div>
    </div>
</div>
@endsection