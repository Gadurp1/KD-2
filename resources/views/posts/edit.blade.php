@extends('app')
@section('content')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.js"></script>
<br>
<div class="container">
  <div class="col-md-8">
    <div class="panel panel-default panel-body">
      {!! Form::model($post, array('route' => array('admin.post.update', $post->id), 'method' => 'PUT')) !!}
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title',$post->title, ['class' => 'form-control']) !!}
    	<hr>
      {!! Form::label('slug', 'Slug:') !!}
      {!! Form::text('slug',$post->slug, ['class' => 'form-control']) !!}

    	<hr>
      {!! Form::label('content', 'Content:') !!}
      {!! Form::textarea('content',$post->content, ['id'=>"summernote",'class' => 'form-control']) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="panel panel-default panel-body">
      {!! Form::select('category_id',['1'=>'News','2'=>'Updates','3'=>'Case Studies'],$post->category_id, ['class' => 'form-control ','placeholder'=>'Category']) !!}
    </hr>
      {!! Form::label('status', 'Status:') !!}
      {!! Form::select('status',['draft'=>'draft','publish'=>'publish'],$post->status, ['class' => 'form-control col-md-3','placeholder'=>'Status']) !!}
      <hr>
      <br>
      {!! Form::label('comments', 'Comments:') !!}
      {!! Form::checkbox('comments',$post->comments, ['class' => 'form-control col-md-3']) !!}

      {!! Form::label('featured', 'Featured:') !!}
      {!! Form::checkbox('featured',null,$post->featured, ['class' => 'form-control col-md-3']) !!}
      <hr>
      {!! Form::textarea('summary',$post->summary, ['class' => 'form-control','placeholder'=>'Summarize this article']) !!}
    </div>
  </div>
  <button type="submit"
      class=" btn btn-circle col-md-12 btn btn-success btn-lg btn-right"
      data-toggle="tooltip"
      data-placement="top"
      title="Save Changes"
      href="{{url('post/'.$post->slug.'/edit') }}">
    <i class="fa fa-edit" style="font-size:24px"></i>
  </button>
</div>
{!! Form::close() !!}
<script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@stop
