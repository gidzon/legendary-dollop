@extends('admin.layouts.layout')

@section('form')
<div class="back_link">
    <a href="{{route('admin.product.index')}}">Назад</a>
</div>
    @if($categories->count() !== 0)
    <div class="product_container">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="" placeholder="Название товара">
            <textarea name="desc" id=""  placeholder="Описание товара"></textarea>
            <input type="number" name="price" id="" placeholder="Цена">
            <div class="img_block">
                <div class="img_title">
                    <p>Выбирете изображение</p>
                </div>
                <input type="file" name="img" id="">
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
                <div class="category_select">
                    <p>Выбирете категорию</p>
                </div>
            <select name="category_id" id="">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <div class="btn_send">
                <input type="submit" value="отправить">
            </div>
        </form>
    </div>
    @else
    <div class="not">
        <p>Добавьте категорию</p>
    </div>
    @endif
  @endsection
