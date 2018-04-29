<nav class="navbar navbar-expand navbar-dark bg-dark">

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            @if(Auth::check())
            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
          @endif
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </nav>
