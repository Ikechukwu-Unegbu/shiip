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
    <p>Hi I am Vincent, a highly skilled software developer. Thank you for being here. You have a message? Kindly leave it below with your correct email and I will get back to you in an hour or less.</p>
  </div>
  <div class="details_form">
    <div class="details">
      <div class="deet phone">
        <i class="fas fa-2x fa-mobile-alt"></i>
        <span>08064133376</span>
      </div>
      <div class="deet">
        <i class="fas fa-2x fa-envelope"></i>
        <span>mr.ikungbu@gmail.com</span>
      </div>
      <div class="deet location">
        <i class="fas fa-2x fa-map-marker-alt"></i>
        <span>Enugu Nigeria</span>
      </div>
      <div>
        <img src="{{asset('siteImg/email.png')}}" alt="">
      </div>
    </div>
    <form class="form" method="POST" action="/contact">
      @csrf
      <div class="">
        @include('partials._message')
      </div>
      <input type="text" name="name" placeholder="Your Name Please" class="form_input">
      <input type="text" name="email" class="form_input" placeholder="Your Email Please">
      <textarea name="message" id=""  placeholder="Your Message?" cols="30" rows="10"></textarea>
      <button style="background-color: #CFCFCF;" class="btn contact_btn">Send</button>
    </form>
  </div>
</main>
@include('partials._plainfooter')
@endsection

