@extends('app')
@section('content')
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Site Content</h1>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int">
      <div class="row">
  	  	<div class="article">
          <div class="col-md-6">
    				<div class="panel panel-body panel-default"  >
    				  	<h2><strong>{{$banners}}</strong> Banners</h2>
    				  	<hr>
    				  	<a href="{{url('admin/Banners')}}" class="btn btn-primary">Manage</a>
    				</div>
    			</div>
          <div class="col-md-6">
            <div class="panel panel-body panel-default"  >
                <h2><strong>{{$images}}</strong> Cat-Gifs</h2>
                <hr>
                <a href="{{url('Cat-Gifs')}}" class="btn btn-primary">Manage</a>
            </div>
          </div>
  			<div class="col-md-6">
  				<div class="panel panel-body panel-default"  >
  				  	<h2><strong>{{$users}}</strong> Users</h2>
  				  	<hr>
  				  	<a href="{{url('admin/users')}}" class="btn btn-primary">Manage</a>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="panel panel-body panel-default" >
  				  	<h2><strong>{{$pages}}</strong> Pages</h2>
  				  	<hr>
  				  	<a href="{{ url('admin/pages')}}" class="btn btn-primary">Manage</a>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="panel panel-body panel-default" >
  				  	<h2><strong>{{$coupons}}</strong> Cases</h2>
  				  	<hr>
  				  	<a href="{{ url('admin/coupons')}}" class="btn btn-primary">Manage</a>
  				</div>
  	  		</div>
          <div class="article">
          <div class="col-md-6">
            <div class="panel panel-body panel-default" >
                <h2><strong>{{$posts}}</strong> Posts</h2>
                <hr>
                <a href="{{url('post')}}" class="btn btn-primary">Manage</a>
            </div>
          </div>
  		</div>
	</div>
@stop
