@extends('app')
@section('content')
<!-- include summernote css/js-->
<link href="https://dl.dropbox.com/s/dcev5frer0z3vvr/summernote.css?dl=0" >
<script src="https://dl.dropbox.com/s/red98cvobqn8u1i/summernote.js?dl=0"></script>
<div class="container">
  <h1>Create Coupon</h1>
  <hr>
  <!-- <div id="summernote">Hello Summernote</div> -->
  {!! Form::open(['url' => 'coupons']) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('slug', 'Slug:') !!}
      {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('size', 'Class Size:') !!}
      {!! Form::text('size', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('date', 'Date:') !!}
      {!! Form::text('date', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('settlement', 'Settlement:') !!}
      {!! Form::text('settlement', null, ['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
      {!! Form::label('p1', 'Body:') !!}
      {!! Form::textarea('p1', null, ['id'=>"summernote", 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('p2', 'Excerpt:') !!}
      {!! Form::textarea('p2', null, ['id'=>"summernote", 'class' => 'form-control']) !!}
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
