
@extends('app')

@section('content')

<div class="container container-int">
  <!-- Content -->
  <br>
  <div class="alert alert-info text-center">

    <h1 class="page-header">
      <i class="fa fa-warning"></i><br>
      404 Page Not Found
    </h1>

    <p>Sorry about that! That page wasn't found. Please continue browsing</p>
    <hr>
     <a href="{{url('')}}" class="btn btn-success btn-lg">Continue Browsing</a>
  </div>
</div>


@stop
