@extends('layouts.app')


@section('page-title', $title)

@section('main-content')
  <div class="container py-2">
    <div class="row  align-items-center g-2">
      @foreach ($movies as $movie)
      <div class="col-3">
          <div class="card h-100 mb-2">
            <div class="card-media">
            </div>
            <div class="card-text">  
              {{$movie["title" ]}}                          
            </div>
          </div> 
        </a>
      </div>
      @endforeach
      
      
    </div>
  </div>
@endsection