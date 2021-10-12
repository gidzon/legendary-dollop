@extends('admin.layouts.layout')

@section('content')
@if($attributes->count() !== 0)
<div class="attributes_table">
    <table>
        <thead>
        <tr>
            <th>Товар</th>
            <th>Аттрибут</th>
            <th>Значение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attributes as $attribute)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$attribute->attr_name}}</td>
                <td>{{$attribute->attr_value}}</td>
        @endforeach
        </tbody>

    </table>
</div>
@else
<div class="not">
    <p>Нет товаров</p>
</div>
@endif
@endsection