<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('items.index') }}">Home</a></li>
        @if (Auth::check()) 
          <li><a href="{{ route('logout') }}">Log out</a></li>
        @else
          <li><a href="{{ route('login') }}">Log in</a></li>
        @endif
        <li><a href="{{ route('departments.index') }}">Department management</a></li>
        <li><a href="{{ route('categories.index') }}">Category management</a></li>
      </ul>     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>