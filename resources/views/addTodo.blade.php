@extends('layout.frontendLayout')

@section('title')
Home Page
@endsection


@section('missing')
<div class="card col-lg-5 mx-auto mt-5">
  <div class="car-header">Add Todo</div>
  <div class="card-body">
    <form action="">
      <input type="text" class="form-control my-2" placeholder="Todo title">
      <textarea name="" class="form-control my-2" placeholder="Todo detail"></textarea>
      <input type="text" class="form-control my-2" placeholder="Author">
      <button class="btn btn-primary">Submit Todo</button>
    </form>
  </div>

</div>
  @endsection
