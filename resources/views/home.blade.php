@extends('layouts.app')


@section('page-title', $title)

@section('main-content')
  <div class="container py-2">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($movies as $movie)
      <div class="col">
        <div class="card h-100">
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h5 class="card-title">{{$movie["title"]}}</h5>
            <a href="{{route("movie-detail", $movie->id)}}" class="btn btn-primary">
            Info
            </a>
          </div>
        </div> 
        </a>
      </div>
      @endforeach
      
      
    </div>
  </div>
@endsection