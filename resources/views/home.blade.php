@extends('layouts.app')

@section('main-content')
    <div class="container-fluid bg-dark">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2 py-3">
                <div class="card">
                <img src="{{ $comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$comic['title']}}</p>
                    <p class="card-text">{{$comic['description']}}</p>
                    <p class="card-text">{{$comic['price']}}</p>
                    <p class="card-text">{{$comic['type']}}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
