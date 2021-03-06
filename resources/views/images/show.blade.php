@extends('app')
@section('content')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56698e6a9a3e9bb7" async="async"></script>
<style>
.dimmed {
background:url('http://www.europur.org/images/slideshow/europur_polyurethane_foam_slide_1.jpg')  no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.jumbotron-img{
  background: rgb(0, 0, 0); /* This is for ie8 and below */
  background: rgba(0, 0, 0, 0.5);
}
</style>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56698e6a9a3e9bb7" async="async"></script>
<br>
    <div class="container container-int">
      <div class="row ">
        <!-- Main Post Body -->
        <div class="col-sm-8">
          <h1 itemprop="headline" style="font-size:24px;font-weight:400">{{$photo->name}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <article class="" itemscope itemtype="http://schema.org/NewsArticle">
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
            <span  class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">Certificate Clearing Corporation</span>
            <div class="row">
              <img class="img-responsive col-md-12" style="border-radius:10px;" alt="{{$photo->name}}" src="{{asset('uploads/'.$photo->url.'')}}" alt="" />
            </div>
          </article>
          <p class="hidden">
            <i class="fa fa-calendar"></i>
            <meta itemprop="datePublished">
             {{ date('D M d, Y',strtotime($photo->created_at)) }}
           </meta>
          </p>
          <hr>

        <div id="disqus_thread"></div>
        </div>
        @if(Auth::user())
          <a class="btn btn-circle col-md-12 btn btn-danger btn-lg btn-right" href="{{url('admin/photos/'.$photo->id.'/edit') }}">
          <i class="fa fa-edit" style="font-size:24px"></i>
          </a>
        @endif

      <script>
        !function(){var e=document,t=e.createElement("script");t.src="//certificateclearing.disqus.com/embed.js",t.setAttribute("data-timestamp",+new Date),(e.head||e.body).appendChild(t)}();
      </script>
      <noscript>Please enable JavaScript to view the </noscript>
      <script id="dsq-count-scr" src="//certificateclearing.disqus.com/count.js" async></script>
      <!-- Recent Posts Sidebar -->
        <div class="col-md-4" >
          <div class="panel panel-body">
            <p class="lead"><i class="fa fa-share"></i> Embed This Image</p>
            <div class="input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" placeholder="" value='<iframe src="http://localhost:8888/KD-2/public/Cat-Gifs/500/embed" style"height:100%;width:100%;overflow:0" frameborder="0"></iframe>'>
            </div>
        </div>
    </div>
  </div>
@stop
