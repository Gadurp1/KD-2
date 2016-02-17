@extends('postsTemplate')
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
    @if(Auth::user())
      @if($post->status=='publish')
      <div class="alert alert-success dismissable">
        <p class="lead">This post is public!</p>
      </div>
      @else
      <div class="alert alert-danger dismissable">
        <p class="lead">This post is pending approval and is not public!</p>
      </div>
      @endif
    @endif
      <div class="row ">
        <!-- Main Post Body -->
        <div class="col-sm-8">
            <article class="panel panel-body" itemscope itemtype="http://schema.org/NewsArticle">
              <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
              <h1 itemprop="headline"><strong>{{$post->title}}</strong></h1>
              <span  class="hidden" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">Certificate Clearing Corporation</span>
            <p >
              <i class="fa fa-calendar"></i>
              <meta itemprop="datePublished">
               {{ date('D M d, Y',strtotime($post->created_at)) }}
             </meta>
            </p>
            <hr>
              <p class="">{!!$post->content!!}</p>
            </article>
            <hr>
            <div id="disqus_thread"></div>
        </div>
        @if(Auth::user())
          <a class="btn btn-circle col-md-12 btn btn-danger btn-lg btn-right" href="{{url('admin/post/'.$post->slug.'/edit') }}">
          <i class="fa fa-edit" style="font-size:24px"></i>
          </a>
        @endif
        <!-- Recent Posts Sidebar -->
          <div class="col-md-4" >
            @include('posts.sidebar')
          </div>
        </div>
      </div>
      <script>
        !function(){var e=document,t=e.createElement("script");t.src="//certificateclearing.disqus.com/embed.js",t.setAttribute("data-timestamp",+new Date),(e.head||e.body).appendChild(t)}();
      </script>
      <noscript>Please enable JavaScript to view the </noscript>
      <script id="dsq-count-scr" src="//certificateclearing.disqus.com/count.js" async></script>

@stop
