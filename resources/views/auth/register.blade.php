@extends('app')
@section('content') 
<style>
    
    .login-wrap{

        margin-top:5%;
        margin-bottom:10%;

    }

</style>

<div class="container login-wrap well" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Who Is U?</h1>
        </div>
    </div>

<form method="POST" action="{{ url('auth/register') }}">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        Email
        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input class="form-control" type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input class="form-control" type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <a type="button" href="{{ url('auth/login') }}" class="btn btn-info col-md-6"> << Already a User?</a>
        <button type="submit" class="btn btn-success col-md-6">Register</button>
    </div>
    </div>
</form>
</div>
@stop