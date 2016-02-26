@extends('app')
@section('content')
<!-- include summernote css/js-->
<link href="https://dl.dropbox.com/s/dcev5frer0z3vvr/summernote.css?dl=0" >
<script src="https://dl.dropbox.com/s/red98cvobqn8u1i/summernote.js?dl=0"></script>
<div class="container">
  <h1>New Image</h1>
  <hr>
  <!-- <div id="summernote">Hello Summernote</div> -->
  {!! Form::model($photo, array('route' => array('admin.photos.update', $photo->id), 'method' => 'PUT')) !!}

    <div class="form-group">
      {!! Form::label('name', 'Title:') !!}
      {!! Form::text('name', $photo->name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('slug', 'Slug:') !!}
      {!! Form::text('slug', $photo->slug, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('url', 'url:') !!}
      {!! Form::text('url', $photo->url, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description', $photo->description, ['id'=>"summernote", 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Add Page', ['class'=>'btn btn-primary form-control']) !!}

    </div>


  {!! Form::close() !!}
</div>
<script type="text/javascript">
  $(document).ready(function() {
  $('#summernote').summernote();
  })
</script>
@stop
