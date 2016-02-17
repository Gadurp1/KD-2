@extends('app')
@section('content') 

<div class="container login-wrap" >
    <div class="well">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit a User</h1>
            </div>
        </div>

		{!! Form::model($user,['method'=>'PATCH', 'action' => ['UserController@update',$user->id]]) !!}
		{!! Form::hidden('user_id',Auth::user( )->id ) !!}

		<div class="form-group">

			{!! Form::label('name','Name') !!}
			{!! Form::text('name',$user->name,['class'=> 'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::label('email','email') !!}
			{!! Form::text('email',$user->email,['class'=> 'form-control']) !!}

		</div>
	</div>	

	<button class="btn btn-success col-md-12" type="submit">Save Changes</button>

	{!! Form::close() !!}

</div>
@stop