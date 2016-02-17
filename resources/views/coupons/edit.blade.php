@extends('app')

@section('content')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.0/summernote.js"></script>
{!! Form::model($coupon, array('route' => array('admin.cases.update', $coupon->id), 'method' => 'PUT')) !!}

<div class="jumbotron" style="background:#2090AC;color:#fff">
  <div class="container">
    <div class="form-group col-md-12">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', $coupon->title, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>
<div class="container">
  <!-- <div id="summernote">Hello Summernote</div> -->
    <div class="form-group hide">
      {!! Form::label('id', 'ID:') !!}
      {!! Form::text('id', $coupon->id) !!}
    </div>

  <div class="panel panel-body ">
  <div class="row">

    <div class="form-group col-md-4">
      {!! Form::label('size', 'Class Size:') !!}
      {!! Form::text('size', $coupon->size, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('settlement', 'Settlement:') !!}
      {!! Form::text('settlement', $coupon->settlement, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('date', 'Date:') !!}
      {!! Form::text('date', $coupon->date, ['class' => 'form-control','placeholder'=>'YYYY-mm-dd']) !!}
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-body ">
        <div class="form-group">
          {!! Form::label('p1', 'Body:') !!}
          {!! Form::textarea('p1', $coupon->p1, ['id'=>'summernote', 'class' => 'editor form-control']) !!}
        </div>
      </div>
      <div class="panel panel-body ">
          <p class="lead"> <i class="fa fa-phone"></i>  Court Information</p>
        <hr>
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('case_number', 'Case #') !!}
            {!! Form::text('case_number', $coupon['case-number'], ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('case_type', 'Litigation Type') !!}
            {!! Form::text('case_type', $coupon['case-type'], ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('judge', 'Judge:') !!}
            {!! Form::text('judge', $coupon->judge, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('court_type', 'Court Type:') !!}
            {!! Form::text('court_type', $coupon->court_type, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('industry', 'Industry:') !!}
            {!! Form::text('industry', $coupon->industry, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('jurisdiction', 'Jurisdiction:') !!}
            {!! Form::text('jurisdiction', $coupon->jurisdiction, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('industry', 'Industry:') !!}
            {!! Form::text('industry', $coupon->industry, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('case_status', 'Status') !!}
            {!! Form::text('case_status', $coupon['case-status'], ['class' => 'form-control']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-body">
        <div class="form-group">
          {!! Form::label('p2', 'CCC Performance:') !!}
          {!! Form::textarea('p2', $coupon->p2, ['id'=>"summernote", 'class' => 'form-control']) !!}
        </div>
      </div>
    </div>
    <div class="form-group col-md-3 pull-right">
      <button type="button" href="{{url('cases/'.$coupon->id.'')}}" class="btn  btn-lg btn-left btn-circle btn-danger" name="button">
        <i class="fa fa-cancel"></i>
      </button>
    </div>
    <div class="form-group col-md-3 pull-right">
      <button type="submit" class="btn btn-circle btn-right btn-lg btn-success" name="button"><i class="fa fa-save"></i></button>
    </div>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});

</script>

  {!! Form::close() !!}
  @stop
