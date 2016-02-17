@extends('app')
@section('content')
<!-- include summernote css/js-->
<link href="https://dl.dropbox.com/s/dcev5frer0z3vvr/summernote.css?dl=0" >
<script src="https://dl.dropbox.com/s/red98cvobqn8u1i/summernote.js?dl=0"></script>

  <div class="jumbotron" style="height:200px">
    <div class="container">
    </div>
  </div>
  <div class="container panel panel-body panel-default" style="margin-top:-200px">
    <h2><i class="fa fa-edit"></i> Page Editor</h2>
    <hr>
  <!-- <div id="summernote">Hello Summernote</div> -->
  {!! Form::model($page, array('route' => array('admin.pages.update', $page->id), 'method' => 'PUT')) !!}
    <div class="form-group hide">
      {!! Form::label('id', 'ID:') !!}
      {!! Form::text('id', $page->id) !!}
    </div>

    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', $page->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('slug', 'Slug:') !!}
      {!! Form::text('slug', $page->slug, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('body', 'Body:') !!}
      {!! Form::textarea('body', $page->body, ['id'=>"summernote", 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    </div>
    <button type="submit"
        class=" btn btn-circle col-md-12 btn btn-success btn-lg btn-right"
        data-toggle="tooltip"
        data-placement="top"
        title="Save Changes" type="submit">
      <i class="fa fa-edit" style="font-size:24px"></i>
    </button>
@foreach($activity as $activity_item)
{{$activity_item->details}} {{$activity_item->description}}
@endforeach

  {!! Form::close() !!}
</div>
<script type="text/javascript">
  $(document).ready(function() {
  $('#summernote').summernote();
  })
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script>
$('#summernote').val(recipient + ' ').keyup();
</script>

@stop
