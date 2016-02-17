@extends('app')

@section('content')
<style>
.main-content h4{
  color:#000
}
</style>
@if(Auth::user())
  <a href="{{url('admin/pages/'.$page->id.'/edit')}}"  class="btn btn-danger  pull-right btn-lg  btn-right btn-circle">
    <strong><i class="fa fa-edit"></i></strong>
  </a>
@endif
<div class="section-header" style="height:200px;background:#2090AC;color:#fff">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      </div>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.section-colored -->

  <div class="container " style="margin-top:-200px">
    <h1 style="color:#fff">{{ $page->title }}</h1>

  <div class="col-md-8 panel panel-body panel-default">
    {!! $page->body !!}
  </div>
  <div class="col-lg-4">
    <div class="panel panel-body panel-default">
      <p class="lead">Related Content</p>
        @foreach($related_pages as $related_page)
          <hr>
          <a href="{{url('pages/'.$related_page->slug.'')}}">{{$related_page->title}}</a>
        @endforeach
    </div>
  </div>
</div>
@stop
