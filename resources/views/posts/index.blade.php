@extends ('layouts.master')

@section('content')

<h3 class="pb-3 mb-4 font-italic border-bottom">
        From Tio Saputra
      </h3>
      @foreach($posts as $post)
      @include('posts.post')
      @endforeach

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>


@endsection