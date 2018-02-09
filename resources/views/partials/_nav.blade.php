<!-- Default bootstrap navgbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="logo.png" style="max-width:10%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      @if (Auth::check())

        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li> 

      @else
        <a href="{{ route('login') }}" class="btn btn-default">Login</a>
      @endif
    </ul>    
  </div>
</nav>