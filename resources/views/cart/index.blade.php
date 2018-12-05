@extends('layouts.app')

@section('content')

@if(isset($cart))
    <div class="card_content">
        @foreach($cart as $id=>$amount)
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{$product[$id]->name}}</h4>
                            <p>{{$product[$id]->description}}</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">€{{$product[$id]->price}}</td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center" value="{{$amount}}">
                </td>
                <td data-th="Subtotal" class="text-center">€{{$product[$id]->price * $amount}}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
            </tbody>
        @endforeach
@else
    {{'Cart is empty'}}
@endif
            <tfoot>

            <tr>
                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>



@endsection


