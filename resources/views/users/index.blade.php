@extends('app')

@section('content')

    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Users</h1>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int">
      <div class="row pricing-table">
          <div class="col-sm-12">
            <div class="panel panel-default text-center">
              <ul class="list-group">
                <table class="table table-bordered">
                    <thead style="background:#16a085;color:#fff">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th></th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td><strong> {{$user->name}}</strong></td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->created_at}}</td>
                        <td><a class="btn btn-info" href="{{url('users/'.$user->id.'/edit')}}">Edit</a></td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
              </ul>
            </div>
          </div>
		</div>
</div>


@stop
