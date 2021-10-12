@extends('admin.layouts.layout')

@section('products')
<div class="back_link">
    <a href="{{route('admin.home')}}">На главную</a>
</div>
    @if($products->count() !== 0)
        <div class="products_table">
            <table>
                <thead>
                <tr>
                    <th>Товар</th>
                    <th>Изображение</th>
                    <th>Категория</th>
                    <th>Удалить</th>
                    <th>Редактировать</th>
                    <th>Смотреть</th>
                    <th>Характеристики</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td><img src="{{asset('storage/'.$product->img_path)}}" alt=""></td>
                        <td>{{$product->category->name}}</td>
                        <td><a href="{{route('product.delete', ['id' => $product->id])}}">Удалить</a></td>
                        <td><a href="{{route('product.edit', ['product' => $product])}}">Изменить</a></td>
                        <td><a href="{{route('admin.product.show', ['id' => $product->id])}}">Перейти</a></td>
                        <td><a href="{{route('attribute.create', ['id' => $product->id])}}">Добавить</a></td>
                        <td><a href="{{route('attribute.show', ['id' => $product->id])}}">Смотреть</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        {{$products->links()}}
    @else
        <div class="not">
            <p>Нет товаров</p>
        </div>
    @endif
@endsection

