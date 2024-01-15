@extends('layouts.layout')
@section('header-title','Home')
<nav class="navbar navbar-expand navbar-light bg-light ">
    <a class="navbar-brand ms-3 " href="/main">{{Auth()->check() ? auth()->user()->firstName:'Ninja'}}</a>
    <ul class="nav navbar-nav ms-auto">
        <li class="nav-item h4"><a class="nav-link" href="/login">
        @if (auth()->check())
{{''}}
@else
{{'Login'}}
        @endif
        </a></li>
         <li class="nav-item h4" ><a class="nav-link"   href="/register">Register</a></li>
    </ul>
</nav>
@section('body-title' ,'Home')
<br><br>

@section('main-content')

<br>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
@if (session()->has('succes-register'))
<p class="alert alert-success  text-center">{{session('succes-register')}}</p>
@endif

Da biste pristupili našem sadržaju molimo vas da se ulogujete ili registrujete

<br><br>
<br>
<br>
<br>=======      <strong>   Vaš     @Matejko Tim   </strong>=======

        </div>
    </div>
</div>

@endsection
