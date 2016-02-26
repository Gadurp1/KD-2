@extends('app') @section('content')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jscroll/2.2.4/jquery.jscroll.min.js">

</script>
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

<div class="section section-big">
  <div class="container">

<div class="row">
  <div class="scroller">

    @foreach($photos as $photo)
    <div id="hover-cap-4col">
      <div class="col-md-4 small">
        <div class="thumbnail">
          <div class="caption">
            <div class="caption-inner">
              <a role="button" href="{{url('Cat-Gifs/'.$photo->id.'')}}" >
                <p class="lead" style="margin-top:25px">{{$photo->description}}</p>
              </a>
            </div>
          </div>
          <img style="height:175px;width:100%;border-radius:5px" src="{{asset('uploads/'.$photo->url.'')}}">
        </div>
    </div>
    @endforeach
  </div>  </div>
</div>
</div>
</div>
<!-- /.section-colored -->
</div>
</div>
</div></div>
</div></div>

</div>
</hr>
<hr>
<br
<div class="row">
  {!! str_replace('/?', '?', $photos->render()) !!}


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
@if(Auth::user())
  <a class="btn btn-circle col-md-12 btn btn-danger btn-lg btn-right" href="{{url('admin/photos/create') }}">
  <i class="fa fa-edit" style="font-size:24px"></i>
  </a>
  @endif
  <script>
    $(document).ready(function(){

        //hides the default paginator
        $('ul.pager:visible:first').hide();

        //init jscroll and tell it a few key configuration details
        //contentSelector - this is the element wrapper which is cloned and appended with new paginated data
        $('div.scroller').jscroll({
            debug: true,
            autoTrigger: true,
            nextSelector: {{$photos->nextPageUrl()}},
            contentSelector: 'div.scroller',
            callback: function() {

                //again hide the paginator from view
                $('ul.pager:visible:first').hide();

            }
        });
    });
</script>

@stop
