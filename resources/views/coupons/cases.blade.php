@extends('app')
@section('content')
<div class="container">
  @if (Auth::check())
  <h1>Manage Coupons</h1>
  <hr>

  <a class="btn btn-primary" href="{{ url('/coupons/create') }}">Create New coupon</a>
  <hr>
  <div class="row pricing-table">
      <div class="col-sm-12">
        <div class="panel panel-default text-center">
          <ul class="list-group">
            <table class="table table-bordered">
                <thead style="background:#16a085;color:#fff">
                  <td>Title</td>
                  <td>Edit</td>
                  <td>Delete</td>


                </thead>

                <tr>
                  @foreach ($coupons as $coupon)

                  <td>
                    <h2><a href="{{url('cases/'.$coupon->slug.'')}}">{{ $coupon->title }}</a></h2>
                  </td>
                  <td>
                    <h2><a class="btn btn-primary" href="{{url('coupons/'.$coupon->id.'/edit') }}">Edit</a></h2>
                  </td>
                  <td>
                    <h2><a class="btn btn-danger" data-toggle="modal" data-target="#modal{{ $coupon->id }}" href="">Delete</a></h2>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{ $coupon->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h4 class="modal-title" id="myModalLabel">Delete coupon</h4>
                         </div>
                         <div class="modal-body">
                           Are you sure you want to delete this coupon?
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <a href="{{url('coupons/'.$coupon->id.'/delete')}}" type="button" class="btn btn-primary">Delete</a>
                         </div>
                       </div>
                     </div>
                    </div>

                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
  @else


  @endif

</div>
@stop
