@extends('app')
@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <input class="form-control" placeholder="COMING SOON"></input>
    </div>
  </div>
</div>
<div class="container">

    <a class="btn btn-success btn-lg btn-circle btn-right" href="{{ url('admin/pages/create')}}">
    <i class="fa fa-plus"></i>
    </a>
    <div class="row ">
      <div class="col-sm-8">
        <div class="row">
        @foreach ($pages as $page)
        <div class="col-sm-12">
          <div class="panel panel-body">
            <h2><a href="{{url('admin/pages/'.$page->slug.'') }}">{{ $page->title }}</a></h2>
            <hr>
            <h2><a class="btn btn-primary" href="{{url('admin/pages/'.$page->id.'/edit') }}">Edit</a></h2>
          </div>
        </div>
        @endforeach
      </div></div>
      <div class="col-md-4">
        <div class="list-group panel panel-body">
          <div class="list-group-item">
            Link
          </div>
          <div class="list-group">
            <div class="list-group-item">
              Link
            </div>
            <div class="list-group">
              <div class="list-group-item">
                Link
              </div>
        </div>
      </div>
    </div>

</div>
