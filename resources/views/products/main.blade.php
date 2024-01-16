@extends('layouts.layout')
@section('header-title','Main')
@section('body-title','Main')

@section('navbar')


<nav class="navbar navbar-expand navbar-light bg-light ">
    <a class="navbar-brand ms-3 " href="/">Dobrodošao <strong> {{auth()->user()->firstName}}</strong></a>
    <ul class="nav navbar-nav ms-auto">
        <form action="/logout" method="post">
            @csrf

            <li>
                <button style="font-size: 1.4rem;font-weight: bold" class="btn btn-light ">Logoff</button>
            </li>
        </form>
    </ul>
</nav>
@endsection
@section('main-content')
<br>

@if (session()->has ('succes-login'))
<p class="alert alert-success  text-center container h3">{{session('succes-login')}}</p>
@endif
<br>
<div class="container">
    <div class="row">
        <div class="col ">
            <table class="table   table-striped rounded-2 overflow-hidden alert  alert-primary"
                style="font-size: large;text-align: center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tBody">

                    <?php
$count=1;
?>
                    @foreach ($products as $product )
                    <tr>
                        <td>
                            <?php echo $count++?>
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td width=650>{{$product->description}}
                        </td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <form action="{{route('product.edit',['product'=>$product])}}" method="GET">

                                            <button class="btn btn-warning d-inline">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form action=" {{route('product.delete',['product'=>$product])}}"
                                            method="post">
@csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger d-inline">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<form action="{{route('product.create')}}" method="get">

    <button class="btn btn-primary offset-5">Add New</button>

</form>
@endsection
