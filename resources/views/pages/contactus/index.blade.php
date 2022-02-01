@extends('layouts.public')

@section('styles')
<!-- public\js\features\typewriter.js -->
<link rel="stylesheet" href="{{ asset('css\pages\index.css?v=1a040064279b') }}">
<link rel="stylesheet" href="{{ asset('css/pages/home.css?v=1a040064279b') }}">
<link rel="stylesheet" href="{{ asset('css/pages/contact/contact.css?v=1a040064279b') }}">
@endsection


@section('title')
Home Page
@endsection

@section('content')
<main class="container contact_main" id="container menu_header">
  @include('partials._menu')
  <div class="contact_intro">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis velit nostrum, vero necessitatibus dicta quisquam possimus facilis fugit libero sed, iure autem quas, ipsum molestiae eos molestias adipisci qui aliquid?</p>
  </div>
  <div class="details_form">
    <div class="details">
      <div class="deet">
        <i class="fas fa-2x fa-mobile-alt"></i>
        <span>08064133376</span>
      </div>
      <div class="deet">
        <i class="fas fa-2x fa-envelope"></i>
        <span>mr.ikungbu@gmail.com</span>
      </div>
      <div class="deet">
        <i class="fas fa-2x fa-map-marker-alt"></i>
        <span>Enugu Nigeria</span>
      </div>
    </div>
    <div class="form">
      <input type="text" placeholder="Your Name Please" class="form_input">
      <input type="text" class="form_input" placeholder="Your Email Please">
      <textarea name="" id="" placeholder="Your Message?" cols="30" rows="10"></textarea>
    </div>
  </div>
</main>
@include('partials._plainfooter')
@endsection

