@extends('app') @section('content')
<style>
  .jumbotron-img {
    background: rgb(0, 0, 0);
    /* This is for ie8 and below */
    background: rgba(0, 0, 0, 0.5);
  }

  #hover-cap-4col .thumbnail {
    position: relative;
    overflow: hidden;
    list-style: none;
  }

  .caption {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
    height: 100%;
    color: #fff !important;
  }

  .thumbnails,
  .thumbnails ul {
    list-style: none;
    margin-top: -3px;
  }

  .thumbnails ul,
  .thumbnails {
    padding: 0px;
  }

  .thumbnails div {
    padding-right: 0px;
    padding-left: 0px;
  }

  div.thumbnail {
    margin-bottom: 0px;
    border: none;
    padding: 0px;
    border-radius: 0px;
  }

  .small .thumbnail {
    margin: 10px!important;
  }

  ul li ul {
    margin-top: 10px;
  }

  .lead .thumbnail {
    margin-bottom: 0px!important;
    background: #fdf;
  }
</style>
<div class="jumbotron">
  <div class="container text-center">
    <h1>#Gifs</h1>
    <div class="container row">
      <input type="text" class="form-control" placeholder="Search The Internet #1 resource for cat stuffs. According to noone">
    </div>
  </div>
</div>
<div class="section section-big">
  <div class="container">
    @foreach($photos as $photo)
    <div id="hover-cap-4col">
      <div class="col-md-4 small ">
        <div class="thumbnail">
          <div class="caption">
            <div class="caption-inner">
              <h4>{{$photo->name}}</h4>
              <a role="button" href="{{url('photos/'.$photo->id.'')}}" class="btn btn-danger">Details</a>
            </div>
          </div>
          <img src="{{$photo->url}}">
        </div>
    </div>
    @endforeach

  </div>
    <div id="hover-cap-4col">
      <div class="col-md-4 small ">
        <div class="thumbnail">
          <div class="caption">
            <div class="caption-inner">
              <h4>Caption Title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a role="button" class="btn btn-danger">Details</a>
            </div>
          </div>
          <img src="http://lorempixel.com/600/400/city/3">
        </div>
    </div>
    <div id="hover-cap-4col">
      <div class="col-md-4 small ">
        <div class="thumbnail">
          <div class="caption">
            <div class="caption-inner">
              <h4>Caption Title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a role="button" class="btn btn-danger">Details</a>
            </div>
          </div>
          <img src="http://lorempixel.com/600/400/city/3">
        </div>
    </div>
    <div id="hover-cap-4col">
      <div class="col-md-4 small ">
        <div class="thumbnail">
          <div class="caption">
            <div class="caption-inner">
              <h4>Caption Title</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a role="button" class="btn btn-danger">Details</a>
            </div>
          </div>
          <img src="http://lorempixel.com/600/400/city/3">
        </div>
    </div>
  </div>

</div>
</div>

</div>
<!-- /.section-colored -->

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
