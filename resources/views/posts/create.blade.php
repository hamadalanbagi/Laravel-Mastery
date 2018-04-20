@extends('layouts.master')

@section('content')
    <h1>Create a Post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        </div>

        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" type="text" class="form-control" id="body" placeholder="Body"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      @include('layouts.errors')
      </form>

@endsection