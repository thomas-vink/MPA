@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>

                    <div class="card-body">
                        <img src="holder.js/300x200">
                        <br>
                        {{ $product->description }}
                        <br>
                        € {{ $product->price }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
