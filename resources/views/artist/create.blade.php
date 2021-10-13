@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <h1 class="display-4">おすすめしたい<br>アーティストは？　</h1>
                <hr class="my-4">
            </div>
            <form action="/artist/store" method="post" class="col-sm-12 col-lg-4">
                @csrf
                <div class="form-group">
                    <label for="name">アーティスト名</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <input type="submit" value="決定" class="btn btn-warning">
            </form>
        </div>
    </div>    
    </div>
    
</div>
@endsection