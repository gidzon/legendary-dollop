@extends('admin.layouts.layout')

@section('product')
<div class="back_link">
    <a href="{{route('admin.product.index')}}">Назад</a>
</div>
    <div class="template_product">
        <div class="product_title">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="product_img">
            <img src="{{asset('storage/'.$product->img_path)}}" alt="">
        </div>
        <div class="product_price">
            <h3>Текущая цена</h3>
            <p>{{$product->price}}</p>
        </div>
        <div class="product_desc">
            <p>{{$product->desc}}</p>
        </div>
        <div class="product_latest">
            <h3>Новинка</h3>
            <p>{{$product->latest}}</p>
        </div>
        <div class="product_discount">
            <h3>Скидка</h3>
            <p>{{$product->discount}}</p>
        </div>
        @isset($product->old_price)
            <div class="product_old_price">
                <h3>Старая цена</h3>
                <p>{{$product->old_price}}</p>
            </div>
        @endisset
    </div>
@endsection
