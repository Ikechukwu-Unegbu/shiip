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
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1640622843377-6b5af9417e70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Design</button>
        <button type="button" class="btn btn-primary">Live</button>
        <button type="button" class="btn btn-primary">Code</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1640622843377-6b5af9417e70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Design</button>
        <button type="button" class="btn btn-primary">Live</button>
        <button type="button" class="btn btn-primary">Code</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1640622843377-6b5af9417e70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Design</button>
        <button type="button" class="btn btn-primary">Live</button>
        <button type="button" class="btn btn-primary">Code</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1640622843377-6b5af9417e70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Design</button>
        <button type="button" class="btn btn-primary">Live</button>
        <button type="button" class="btn btn-primary">Code</button>
      </div>
    </div>
  </div>
</div>

</main>
@include('partials._footer')
@endsection










