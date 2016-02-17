@extends('app')

@section('content')

    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Cases We've Cleared</h1>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int">
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Services</li>
      </ol>
      <div class="row">
        <div class="col-lg-12">
          <blockquote>
            <p>As the leading expert in coupon design, CCC has an unrivaled track record in coupon settlements. For over two decades, we have worked with attorneys from the nation's leading plaintiff's law firms to construct coupon settlements that bring value to the class, becoming the most sought after experts in class action coupon settlements.</p>
          </blockquote>
        </div>
      </div>
      <div class="row pricing-table">
          <div class="col-sm-12">
            <div class="panel panel-default text-center">
              <ul class="list-group">
                <table class="table table-bordered">
                    <thead style="background:#16a085;color:#fff">
                        <th>Title</th>
                        <th>Date</th>
                        <th>Class Size</th>
                        <th>Learn More</th>
                    </thead>
                    <tbody>
                      @foreach($coupons as $coupon)
                      <tr>

                        <td><strong> {{$coupon->title}}</strong></td>
                        <td> {{$coupon->date}}</td>
                        <td> {{$coupon->size}}</td>
                        <td><a class="btn btn-info" href="{{url('cases/'.$coupon->id.'')}}">More info</a></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
              </ul>
            </div>
          </div>

</div></div>



@stop
