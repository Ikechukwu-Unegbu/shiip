@extends('layouts.myApp')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/dashboard/create/portfolio">New Portfolio</a>
    </div>
    <div class="col">
      <a href=""></a>
    </div>
    <div class="col">
      <!-- Column -->
    </div>
  </div>
</div>
<br>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
@endsection
