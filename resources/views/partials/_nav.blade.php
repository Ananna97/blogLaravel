<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">


      <a class="navbar-brand" href="/"><img class="octicon" src="../../images/octicon1.png" alt="Octarine"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right">

        <li class="searchBar">
          <form class="form-inline my-2 my-lg-0" method="GET" action={{ route('search') }}>
            <input class="form-control mr-sm-2" type="search" style="margin-top:7px" value="{{ request()->input('query') }}" placeholder="Search" name="query">
            <button class="btn btn-outline-dark my-2 my-sm-0" id="submitButton" style="margin-top:-5px">Search</button>
          </form>
        </li>

        @if (Auth::check())
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('tags.index') }}">Tags</a></li>
            <li role="separator" class="divider"></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          @else
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          @endif

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>