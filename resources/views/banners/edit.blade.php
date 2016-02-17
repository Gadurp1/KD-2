@extends('app')
@section('content')
<style>
.form-group.editor{
	height:300px;
}

</style>
<!-- include summernote css/js-->
<link href="https://dl.dropbox.com/s/dcev5frer0z3vvr/summernote.css?dl=0" >
<script src="https://dl.dropbox.com/s/red98cvobqn8u1i/summernote.js?dl=0"></script>
<div class="jumbotron">

</div>
<div class="container panel panel-body panel-default" style="margin-top:-100px">
	<h2><i class="fa fa-edit"></i> Edit Banner Section</h2>
	<hr>
<div class="row">
	<!-- <div id="summernote">Hello Summernote</div> -->
  {!! Form::model($banners, array('route' => array('admin.Banners.update', $banners->id), 'method' => 'PUT')) !!}
	<div class="col-md-8">
    <div class="form-group">
      {!! Form::label('img', 'Background Image:') !!}
      {!! Form::text('img', $banners->img, ['class' => 'form-control']) !!}
  	</div>
		<hr>
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', $banners->title, ['class' => 'form-control']) !!}
    </div>
		<hr>
    <div class="form-group">
      {!! Form::label('description', 'Excerpt:') !!}
      {!! Form::textarea('description', $banners->description, ['id'=>"", 'class' => ' form-control']) !!}
    </div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::label('button_text', 'Button Text:') !!}
			{!! Form::text('button_text', $banners->button_text, ['class' => 'form-control']) !!}
		</div>
		<hr>
		<div class="form-group">
			{!! Form::label('button_url', 'Button Link:') !!}
			{!! Form::select('button_url', $pages,$banners->button_url,['class'=>'form-control']) !!}
		</div>
		<hr>
		</div></div>
		<hr>
		{!! Form::button('Save Changes',  ['type' => 'submit','class'=>'btn btn-success col-md-12']) !!}

		  {!! Form::close() !!}



<script type="text/javascript">
  $(document).ready(function() {
  $('#summernote').summernote();
  })
</script>
@stop
