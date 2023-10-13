@extends('layouts.app')


@section('page-title')
{{env("APP_NAME")}} - {{$title_movie}}
@endsection
{{-- Card Movi Detail --}}
@section('main-content')
  <div class="container py-2">    
        <div class="card h-100">
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h5 class="card-title">{{$title_movie}}</h5>
            <ul class="card-text">
              <li>{{$original_title_movie}}</li>
              <li>{{$nationality_movie}}</li>
              <li>{{$date_movie}}</li>
              <li>{{$vote_movie}}</li>
            </ul>
          </div>
        </div> 
    </div>
  </div>
@endsection