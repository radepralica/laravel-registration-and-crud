@extends('layouts.layout')
@section('header-title','Create')
@section('body-title','Create')
@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-6 offset-3"><br><br>

            <form action="{{route ('product.store')}}" method="POST">
                @csrf

                <input type="text" name="name" class="form-control" placeholder="Ime" value="{{old('name')}}"> <br>
                @error('name')
                <p class="alert alert-danger container text-center">
                    {{$message}}
                </p>
                @enderror

                <input type="number" name="qty" class="form-control" placeholder="Količina" value="{{old('qty')}}"> <br>
                @error('qty')
                <p class="alert alert-danger container text-center">
                    {{$message}}
                </p>
                @enderror

                <input type="text" name="price" class="form-control" placeholder="Cijena" value="{{old('price')}}"> <br>
                @error('price')
                <p class="alert alert-danger container text-center">
                    {{$message}}
                </p>
                @enderror

                <textarea class="form-control" name="description" cols="50" rows="5"
                    placeholder="Opis">{{old('description')}}</textarea><br>
                @error('description')
                <p class="alert alert-danger container text-center">
                    {{$message}}
                </p>
                @enderror

                <button type="submit" class="btn btn-info offset-4">Register</button>

            </form>

        </div>

    </div>
</div>
<br><br>
@endsection
