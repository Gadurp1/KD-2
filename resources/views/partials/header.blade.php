<nav class="navbar navbar-fixed-top navbar-default" role="navigation" style="border-bottom:2px solid #eeeeee;background:#fff">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('')}}">

        <strong style="color:#ce2155;sont-weight:800"><img style="height:25px" src="http://www.iconarchive.com/download/i78687/iconka/meow-2/cat-hungry.ico"></img> STASH</strong>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden"><a href="{{ url('post')}}"><i class="fa fa-star" style="color:gold"></i> <strong>Featured</strong> </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('Cat-Gifs')}}"><i class="fa fa-megaphone"></i> <strong>Feed</strong></a></li>

        @if (Auth::check())

        <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Hello  {{Auth::user( )->name }}
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('admin')}}">Home</a></li>
                <li><a href="{{ url('admin/users')}}">Manage Users</a></li>
                <li><a href="{{ url('admin/Banners')}}">Manage Banners</a></li>

                <li><a href="{{ url('admin/pages')}}">Manage Pages</a></li>
                <li><a href="{{ url('admin/coupons')}}">Manage Cases</a></li>
                <li><a href="{{ url('auth/logout')}}">Logout</a></li>
              </ul>
        </li>

        @else
        <li><a href="{{ url('auth/login')}}"><i class="fa fa-lock"> Login</i></a>

        @endif

    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container -->
</nav>
