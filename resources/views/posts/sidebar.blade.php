<div class="panel panel-body">
  <p class="lead"><i class="fa fa-feather">More Posts</p>
  @foreach($more_posts as $post)
  <a href="{{url('post/'.$post->slug.'')}}">
    <p>
    <small>
      <i class="fa fa-calendar"></i>
      {{ date('D M d, Y',strtotime($post->created_at)) }}
    </small>
    <br>{{$post->title}}</p>
    <hr>
  </a>
  @endforeach
  <a href="{{url('post')}}" class="btn btn-default col-md-12"><i class="fa fa-create"></i> View All Posts</a>
</div>
