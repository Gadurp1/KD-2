@include('partials.head')
<link href="{{ asset('css/cover.css') }}" rel="stylesheet">
<style media="screen">
</style>
</div>
</div>
<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">
                <a class="" href="{{ url('')}}">
                      <strong style="color:#fff;font-weight:800"><img style="height:25px" src="http://www.iconarchive.com/download/i78687/iconka/meow-2/cat-hungry.ico"></img> STASH</strong>
                    </a></h3>
              <nav>
                <ul class="nav masthead-nav navbar-right">
                  <li class="hidden"><a href="{{ url('post')}}"><i class="fa fa-star" style="color:gold"></i> <strong>Featured</strong> </a></li>

                  <li><a href="{{ url('Cat-Gifs')}}"><i class="fa fa-star" style="color:gold"></i>
                     <strong>Feed</strong></a></li>
              </ul>

              </nav>
            </div>
          </div>
            <div class="row">
              <div class="col-md-4">

              </div>
              <h1 class="col-md-4 text-center"><strong>#CatStash</strong></h1>

            </div>

            <div class=" row">
              <!-- <div id="summernote">Hello Summernote</div> -->
              {!! Form::open(['method' => 'GET','url' => 'Cat-Gifs','class' => 'search-bar']) !!}
                <div class="form-group">
                  {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Search All Things Cat...']) !!}
                </div>
                {!!Form::close()!!}
          </div>
          <div class="row">
            <a class="col-md-12 btn btn-lg btn-success btn-huge" height="50px">Search</a>
          </div>

          <div class="mastfoot">
            <div class="inner text-center">
              <p style="color:#fff">The Internets #1 Resource for Cat Stuffs...  According to Noone.</p>
            </div>
          </div>

        </div>

      </div>
<!-- /.section -->
<script type="text/javascript">
  $(document).ready(function() {

    $("[rel='tooltip']").tooltip();

    $('#hover-cap-4col .thumbnail').hover(
      function() {
        $(this).find('.caption').slideDown(250);
      },
      function() {
        $(this).find('.caption').slideUp(250);
      }
    );

  });
</script>
