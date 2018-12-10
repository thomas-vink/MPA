@extends('layouts.app')

@section('content')
    <div class="col-lg-9 mx-auto">
        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
                <h3 class="card-title">{{$product->name}}</h3>
                <h4>${{$product->price}}</h4>
                <p class="card-text">{{$product->description}}</p>
               <a href="{{action('CartController@store', ['id' => $product->id])}}"><button type="button" class="btn btn-primary">add to cart</button></a>
            </div>
        </div>
    </div>

@endsection
