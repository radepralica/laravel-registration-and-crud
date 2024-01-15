@extends('layouts.layout')
@section('header-title','Login')
@section('body-title','Login')

@section('main-content')


<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
<form action="/login" method="post">
@csrf
<br><br><br>
<input type="text" name="loginusername" class="form-control" placeholder="Username" value="rpralica"> <br>
@error('loginusername')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror

<input type="password" name="loginpassword" class="form-control" placeholder="Password" value="11111111"> <br>
@error('loginpassword')
<p class="alert alert-danger container text-center">
    {{$message}}
</p>
@enderror
<button class="btn btn-success offset-5">Login</button>

        </div>
    </div>
</div>


</form>



@endsection
