@extends('layouts.admin')


@section('content')

<div class="content-wrapper" style="background: url('site_images/background.jpg'); overflow-x: hidden; background-size: 100%;">
<div class="container" style="align:center;">
@if(Session::has('cart'))
<div class="container-header" id="ch"><p style="background-color:rgba(255, 255, 255, 0.74);"><strong> MY SHOPPING CART </strong><p></div>
<div class="container-body" style="margin-left:10rem;">
<div class="nav-item" style="align:center;">
        <ul class="list-group">
            @foreach($pro as $product)
                <div class="container" >
            <li class="list-group-item" id="lgi">
                <a href="#modal{{$product['item']['id']}}" data-toggle="modal" style="color:rgb(0, 0, 0)">
                <span class="badge badge-info" style="margin-right:1rem">{{$product['qty']}}</span>
                <img style="height:3rem; width:3rem; margin-top:0px;margin-bottom:0rem" src="storage/images_resized/{{$product['item']['cover_image']}}">
                <strong style="margin-left:1rem">{{$product['item']['title']}}</strong>
                <div class="group" style="margin-left:20rem; margin-top:-2.4rem">
                <span class="badge badge-warning" style="margin-left:0rem;  ">{{$product['item']['color']}}</span>
                <span class="badge badge-dark" style="margin-left:1rem">{{$product['item']['size']}}</span>
                <span class="badge badge-dark" style="margin-left:1rem">{{$product['item']['type']}}</span>
                <span class="label label-success"style="margin-left:2rem"><strong>{{$product['price']}} €</strong></span>
                </div>
                </a>               
                    <form id="formremoveone" method="POST" action="{{route('removeone')}}" enctype="multipart/form-data">
                        <input type="hidden" name="id1" value="{{$product['item']['title']}}">
                        <input type="hidden" name="size1" value="{{$product['item']['size']}}">
                        <input type="hidden" name="color1" value="{{$product['item']['color']}}">
                        <input type="hidden" name="type1" value="{{$product['item']['type']}}">
                        <input type="hidden" name="price1" value="{{$product['item']['price']}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="btn-group" style="margin-left:30rem; margin-top:-3rem">
                <button type="submit" class="btn" style="margin-left:5rem">
                        <span class="badge badge-danger">
                       -1
                        </span>
                    </button>
                    </form>                    
                    <form id="formremoveall" method="POST" action="{{route('removeall') }}" enctype="multipart/form-data">
                        <input type="hidden" name="id1" value="{{$product['item']['title']}}">
                        <input type="hidden" name="size1" value="{{$product['item']['size']}}">
                        <input type="hidden" name="color1" value="{{$product['item']['color']}}">
                        <input type="hidden" name="type1" value="{{$product['item']['type']}}">
                        <input type="hidden" name="price1" value="{{$product['item']['price']}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn">
                        <span class="badge badge-danger">
                       X
                        </span>
                    </button>
                    </form>
                </button>
            </li>
                </div>
            @endforeach
        </ul>
</div>
<div class="container-footer" style="margin-bottom: 5rem;margin-left:22rem; text-align: right; align:center; width:30rem">
    <p style="text-align:center;font-size:20px; margin-top:1rem;"><strong style="background-color: rgba(29, 29, 138, 0.705); color:white">Total price: {{$totalPrice}} €</strong>
        <button  type="button" class="btn btn-success" data-toggle="modal" data-target="#checkoutModal"><i class="fas fa-euro-sign nav-icon"></i> Checkout</button></p>
</div>
    @else
    <div class="row" >
            <h2 style="color:white;margin-left:25rem;margin-top:15rem; font-size:40px; background-color: red">YOUR CART IS EMPTY!</h2>
        </div>
    </div>
    @endif
</div>
</div>


@endsection