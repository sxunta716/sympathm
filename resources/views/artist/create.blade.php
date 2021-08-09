@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            おすすめしたいアーティストは？
            <form action="/artist/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">アーティスト名</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="submit" value="決定" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection