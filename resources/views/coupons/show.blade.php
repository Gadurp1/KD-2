@extends('casesTemplate')
@section('content')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56698e6a9a3e9bb7" async="async"></script>

<div class="section-header" style="background:#2090AC;color:#fff;height:200px">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.section-colored -->
<div class="container container-int  " style="margin-top:-175px">
          <h1 style="padding-bottom:20px;color:#fff;font-weight:600">{{$coupons->title}}</h1>
  @if(Auth::user())
    <a href="{{url('admin/cases/'.$coupons->id.'/edit')}}"  class="btn btn-danger  pull-right btn-lg  btn-right btn-circle">
      <strong><i class="fa fa-edit"></i></strong>
    </a>
  @endif
        <div class="row">
          <div class="col-sm-4">
            <div class="panel panel-default text-center" >
              <div class="panel-body">
                <h3 class="panel-title price">
                  <div class="row">
                    <i class="fa fa-users card-icon"></i>
                  </div>
                  <span class="price-cents" >{{number_format(floatval($coupons->size)) }}</span>
                </h3>
                <strong >Class Members</strong>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <h3 class="panel-title price">
                  <div class="row">
                    <i class="fa fa-credit-card card-icon" ></i>
                  </div>
                  <span class="price-cents">
                      ${{number_format(floatval($coupons->settlement)) }}
                  </span>
                </h3>
                <strong>Settlement Fund</strong>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <h3 class="panel-title price">
                  <div class="row">
                    <i class="fa fa-calendar card-icon" ></i>
                  </div>
                  <span class="price-cents">{{$coupons->date}}</h3>
                  <strong>Date</strong>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default panel-body" style="border-left:3px solid #28abcc">
            <p class="lead"> <i class="fa fa-clone"></i> Case Description</p>
            <hr>
            <p>{!! $coupons->p1 !!}</p>
          </div>
          <div class="panel panel-default" style="border-left:3px solid #28abcc">
            <div class="panel-body">
              <p class="lead">Court Information</p>
              <hr>
              <div class="list-group">
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Case #</div>
                    <div class="col-md-6">{{$coupons['case-number']}}</div>
                  </div>
                </div>
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Case Type</div>
                    <div class="col-md-6">{{$coupons['case-type']}}</div>
                  </div>
                </div>
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Court Type</div>
                    <div class="col-md-6">{{$coupons->court_type}}</div>
                  </div>
                </div>
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Jurisdiction</div>
                    <div class="col-md-6">{{$coupons->jurisdiction}}</div>
                  </div>
                </div>
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Judge</div>
                    <div class="col-md-6">{{$coupons->judge}}</div>
                  </div>
                </div>
                <div href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-6">Industry</div>
                    <div class="col-md-6">{{$coupons->industry}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="panel panel-default panel-body">
            <p class="lead"><i class="fa fa-star" style="color:#fdd81a"></i> CCC Performance </p>
            <hr>
            <p>{!! $coupons->p2 !!}</p>
          </div>
          <div class="panel panel-default panel-body">
            <p class="lead">Downloads</p>
            <hr>
            <ul class="list-group">
              <li class="list-group-item">
                <i class="fa fa-file" ></i>No Downloads Available
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
