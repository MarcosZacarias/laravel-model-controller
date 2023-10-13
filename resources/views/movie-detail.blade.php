@extends('layouts.app')


@section('page-title', $title)

@section('main-content')
  <div class="container py-2">    
        <div class="card h-100">
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h5 class="card-title">{{$movie["title"]}}</h5>
            <ul class="card-text">
              <li>{{$movie["original_title"]}}</li>
              <li>{{$movie["nationality"]}}</li>
              <li>{{$movie["date"]}}</li>
              <li>{{$movie["vote"]}}</li>
            </ul>
          </div>
        </div> 
    </div>
  </div>
@endsection