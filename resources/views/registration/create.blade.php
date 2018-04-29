@extends('layouts.master')

@section('content')
  <h1>Register</h1>

  <form class="" action="/register" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="" required>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" value="" required>
    </div>

    <div class="form-group">
      <label for="password_confirmation">Password Confirmation</label>
      <input type="password_confirmation" class="form-control" name="password_confirmation" id="password_confirmation" value="" required>
    </div>

    <div class="form-group">
      <button type="submit" name="button" class="btn btn-primary">Submit</button>
    </div>

      @include('layouts.errors')
  </form>
@endsection
