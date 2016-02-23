@include('partials.head')
<style>
/*
 * Globals
 */
body{
  background:#fafafa;
  background: url(https://media.giphy.com/media/kJ04xPBmQp9Ti/giphy.gif) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  background-color: #fff;
  border: 1px solid #fff;
}

input.form-control{
  height:75px;
  -webkit-box-shadow:  0 2px 3px rgba(0,0,0,.3);
  box-shadow:  0 2px 3px rgba(0,0,0,.3);
}

input.form-control[type="text"] {
  display: block;
  margin: 0;
  width: 100%;
  font-weight: 900;
  font-size: 18px;
  appearance: none;
  border-radius: none;
}
input.form-control[type="text"]:focus {
  outline: none;
  border:none;
  -webkit-box-shadow:  0 2px 3px rgba(0,0,0,.3);
  box-shadow:  0 2px 3px rgba(0,0,0,.3);
}
/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  margin-top:-50px;
  width: 100%;
  background:rgba(0, 0, 0, 0.2);
  height: 110%; /* For at least Firefox */
  min-height: 100%;


}
.site-wrapper-inner {
  display: table-cell;
  height: 100%;
  vertical-align: top;
  background:rgba(0, 0, 0, 0.8);

}







/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}


.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}


/*
 * Header
 */
.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: #fff; /* IE8 proofing */
  color: rgba(255,255,255,.75);
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}


/*
 * Footer
 */

.mastfoot {
  color: #999; /* IE8 proofing */
  color: rgba(255,255,255,.5);
}


/*
 * Affix and center
 */

@media (min-width: 768px) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 0;
  }
  .mastfoot {
    position: fixed;
    bottom: 0;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }
  /* Handle the widths */
  .masthead,
  .mastfoot,
  .cover-container {
    width: 100%; /* Must be percentage or pixels for horizontal alignment */
  }
}

@media (min-width: 992px) {
  .masthead,
  .mastfoot,
  .cover-container {
    width: 700px;
  }
}
.btn-huge{
  padding-top:15px;padding-bottom:15px;font-size:18px
}
h1{color:#fff;font-size:64px;font-weight:600;margin-bottom:10px}
</style>
</div>
</div>
<div class="site-wrapper">

      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">      <a class="" href="{{ url('')}}">

                      <strong style="color:#fff;font-weight:800"><img style="height:25px" src="http://www.iconarchive.com/download/i78687/iconka/meow-2/cat-hungry.ico"></img> STASH</strong>
                    </a></h3>
              <nav>
                <ul class="nav masthead-nav navbar-right">
                  <li class=""><a href="{{ url('post')}}"><i class="fa fa-star" style="color:gold"></i> <strong>Featured</strong> </a></li>

                  <li><a href="{{ url('Cat-Gifs')}}"><i class="fa fa-megaphone"></i> <strong>Gifs</strong></a></li>
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
