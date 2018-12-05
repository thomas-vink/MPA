@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-2">
                    <div class="card-header">Categories</div>

                    <div class="card-body">
                        <ul>
                        @foreach($categories as $category)
                                <li><a href="{{action('CategoryController@show', ['id' => $category->id])}}">{{$category->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
