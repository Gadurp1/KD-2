@extends('app') @section('content')
<style>
/*
 * Globals
 */
body{
  background:#fafafa
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
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  background: url(https://media.giphy.com/media/kJ04xPBmQp9Ti/giphy.gif) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;

}
.site-wrapper-inner {
margin-top:-100px;
  display: table-cell;
  vertical-align: top;
  background:rgba(0, 0, 0, 0.8);

}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
positiion:absolute;
bottom:0;
}


/*
 * Cover
 */

.cover {margin-top:-100px;
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
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
            <div class="inner">
              <p>The Internets #1 Resource for Cat Stuffs...  According to Noone.</p>
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
@stop
