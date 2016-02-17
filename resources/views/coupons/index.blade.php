@extends('app')
@section('content')
<style>
table.table-list tr td {
  padding-top: 2em;
  padding-bottom: 2em;
  color: #000;
  font-weight: 400;
  font-size: 14px;
  border 1px solid #000
}
table.table-list thead {
background:#2090AC;
color:#fff
}
</style>
    <div class="section-header" style="height:200px;background:#2090AC;color:#fff">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int " style="margin-top:-175px">
      <div class="row ">
          <div class="col-sm-8">
            <div class="panel panel-body panel-default ">
              <table class="table table-hover table-list">
                <thead>
                  <th>Case Name</th>
                  <th>Class Size</th>
                  <th>Settlement</th>
                </thead>
                @foreach($coupons as $coupon)
                <tr >
                  <td>
                    <a class="" href="{{url('cases/'.$coupon->slug.'')}}">
                      <b>{{$coupon->title}}</b>
                    </a>
                  </td>
                  <td>
                  {{number_format(floatval($coupon->size)) }}
                  </td>
                  <td>
                    ${{number_format(floatval($coupon->settlement)) }}
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="col-sm-4 ">
            <div class="panel panel-body panel-default">
              <div class="panel-body">
              <p class="lead">Our Expertise</p>
              <hr>
                <p>As the leading expert in coupon design, CCC has an unrivaled track record in coupon settlements. For over two decades, we have worked with attorneys from the nation's leading plaintiff's law firms to construct coupon settlements that bring value to the class, becoming the most sought after experts in class action coupon settlements.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop
