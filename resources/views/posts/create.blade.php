@extends('app')

@section('content')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.js"></script>
<div class="jumbotron">
</div>

<div class="container" style="margin-top:-100px">
  <div class="panel panel-default panel-body">
<h2><i class="fa fa-edit"></i> Create New Page</h2>
<hr>
<div class="row">
  <div class="col-md-8">

    {!! Form::open(['url' => 'admin/post']) !!}
  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title',null, ['class' => 'form-control','placeholder'=>'Something Interesting?']) !!}
	<hr>
  {!! Form::label('slug', 'Slug:') !!}
  {!! Form::text('slug',null, ['class' => 'form-control','placeholder'=>'Text-You-Want-In-Url']) !!}

	<hr>
  {!! Form::label('content', 'Content:') !!}
  {!! Form::textarea('content',null, ['id'=>'summernote','class' => 'editor form-control']) !!}
</div>

<div class="col-md-4">
  {!! Form::label('category_id', 'Category:') !!}

  {!! Form::select('category_id',['1'=>'News','2'=>'Updates'],null, ['class' => 'form-control ','placeholder'=>'Category']) !!}
  <hr>
  {!! Form::label('status', 'Status:') !!}
  {!! Form::select('status',['draft'=>'draft','publish'=>'publish'],null, ['class' => 'form-control ','placeholder'=>'Status']) !!}
  <hr>

  {!! Form::label('comments', 'Comments:') !!}
  {!! Form::checkbox('comments',null, ['class' => 'form-control']) !!}
  <hr>
  {!! Form::label('featured', 'Featured:') !!}
  {!! Form::checkbox('featured',null, ['class' => 'form-control']) !!}
  <hr>
  {!! Form::textarea('summary',null, [ 'class' => 'form-control','placeholder'=>'Summarize this article']) !!}</div>
</div>
<button class="btn btn-success pull-right btn-circle btn-right btn-lg" data-toggle="tooltip" data-placement="top" title="Save New Post" type="submit">
  <i class="fa fa-save"></i>
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
