@extends('app')
@section('content') 
<style>
    
    .login-wrap{

        margin-top:5%;
        margin-bottom:10%;

    }

</style>

<div class="container login-wrap" >
    <div class="well">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Enter Info to Continue</h1>
            </div>
        </div>
        <form method="POST" class="form" action="{{ url('auth/login')}}">
            {!! csrf_field() !!}

            <div class="form-group">
                <input class="form-control"  type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password">
            </div>
            <hr>
            <div>
                <button type="submit" class="col-md-12 btn btn-success">Login</button>
            </div>
        </form>
    </div>
    <div class="text-center">
        <a href="{{ url('auth/register') }}" > Need to Register?</a>
    </div>
</div>
@stop