@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-2">
                    <div class="card-header">{{ $category->name }}</div>

                    <div class="card-body">
                        <ul>
                            @foreach($products as $product)
                                <li><a href="{{action('ProductController@show', ['id' => $product->id])}}">{{$product->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
