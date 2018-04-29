@extends('layouts.master')

@section('content')
  <h1>Sign in</h1>

  <form class="" action="/login" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="" required>
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" value="" required>
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type="submit" name="button">Login</button>
    </div>

    @include('layouts.errors')
  </form>
@endsection
