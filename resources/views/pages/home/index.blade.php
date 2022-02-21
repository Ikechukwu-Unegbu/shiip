@extends('layouts.public')

@section('styles')
<!-- public\js\features\typewriter.js -->
<link rel="stylesheet" href="{{ asset('css\pages\index.css?v=1a040064279b') }}">


<link rel="stylesheet" href="{{ asset('css/pages/home.css?v=1a040064279b') }}">
@endsection


@section('title')
Home Page
@endsection

@section('content')
<main class="container" id="container menu_header">
  @include('partials._menu')
  <!-- list of movies -->
  <style>
    .btn{
      color: white;
      font-weight: bold;
    }
    .button{
      background-color: #122AFF;
      border-radius: 5px;
    }
    .work{
      grid-gap: 3rem;
    }
    .circular{
      border-radius: 50%;
    }
  </style>
  <div id="hero_section">
    <div id="hero_left">
      <h2 class="hero_title">I Build Business Solutions that Run on the Web</h2>
      <div class="btn_container">
        <a href="/contact" class="btn button">Leave Message</a>
        <a style="color: white;" class="btn" href="">Portfolio</a>
      </div>
    </div>
    <div id="hero_right">
      <!-- <img src="{{asset('siteImg/Rectangle 9565bg.jpg')}}" alt=""> -->
      <!-- <img src="https://media.istockphoto.com/photos/suspicious-young-man-looking-at-camera-through-magnifier-picture-id1198224243" alt=""> -->
    </div>
  </div>
  <!-- stack section -->
    @include('pages.home.stacks')
  <!-- end of stack section -->
  <!-- achievment section -->
    @include('pages.home.achievements')
  <!-- end -->
</main>
@include('partials._footer')
@endsection

