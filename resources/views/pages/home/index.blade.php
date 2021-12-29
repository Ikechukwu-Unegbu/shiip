@extends('layouts.public')

@section('styles')
<link rel="stylesheet" href="style.css">
@endsection


@section('title')
Home Page
@endsection

@section('content')
<main>
  <!-- list of movies -->
  <div class="container movies_home">
  @foreach($movies as $movie)
    <div id="learn" class="p-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md">
              <img src="{{$movie->poster}}" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
              <h2>{{$movie->name}}</h2>
              <p class="lead">
                {{$movie->descript}}
              </p>
              <div>
               <span><b>Location:</b> </span> <span>Ikeja</span>
              </div>
              <div>
               <span><b>Show Time:</b> </span> <span>{{$movie->showtime}}</span>
              </div>
              <a href="#" class="btn btn-light mt-3">
                <i class="bi bi-chevron-right"></i>Get Ticket Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</main>
@endsection