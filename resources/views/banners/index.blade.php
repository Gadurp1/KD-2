@extends('app')

@section('content')
@include('errors.list')
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <h1 class="page-header">Home Page Banners <a class="hidden btn btn-primary pull-right" href="{{url('admin/Banners/create')}}">New Banner</a></h1>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int">
      <div class="row">
          <div class="col-sm-12">
                      @foreach($banners as $banner)
                      <div class="panel panel-body">
                        <p class="lead">{{$banner->title}}</p>
                         {{$banner->description}}
        <hr>
                        <a class="btn btn-info" href="{{url('admin/Banners/'.$banner->id.'/edit')}}">Edit</a>
                </div>
                    @endforeach
          </div>
		</div>
</div>


@stop
