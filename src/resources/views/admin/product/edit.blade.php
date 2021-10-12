@extends('admin.layouts.layout')


@section('form')
<div class="back_link">
    <a href="{{route('admin.product.index')}}">Назад</a>
</div>
<div class="product_container">
    <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="Название" value="{{$product->name}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <textarea name="desc" placeholder="описание" >{{$product->desc}}</textarea>
        <input type="number" name="price" id="" placeholder="цена" value="{{$product->price}}">
        <div class="img_block">
            <div class="img_title">
                <p>Выбирете изображение</p>
            </div>
            <input type="file" name="image" id="">
        </div>
        <div class="latest_product">
            <div class="latest_title">
                <p>Новый товар</p>
            </div>
            <div class="latest_check">
                <div class="latest_check_title">
                    <p>Да</p>
                </div>
                <input type="checkbox" name="latest" id="" value="new">
            </div>
        </div>
        <div class="discount">
            <input type="number" name="discount" id="" placeholder="скидка">
        </div>
        <div class="category_select">
            <p>Выбирете категорию</p>
        </div>
        <select name="category" id="">
            @foreach($categories as $category)
            @if ($category->id === $product->category_id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @endif
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <div class="btn_send">
            <input type="submit" value="отправить">
        </div>
    </form>
</div>
@endsection
