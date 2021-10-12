@extends('admin.layouts.layout')

@section('content')
<div class="back_link">
    <a href="{{route('admin.product.index')}}">Назад</a>
</div>
@if($attributes->count() !== 0)
<div class="attributes_table">
    <table>
        <thead>
        <tr>
            <th>Аттрибут</th>
            <th>Значение</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attributes as $attribute)
            <tr>
                <td>{{$attribute->attr_name}}</td>
                <td>{{$attribute->attr_value}}</td>
                <td>
                    <a href="{{route('attribute.edit', [
                        'name' => $attribute->attr_name,
                        'value' => $attribute->attr_value,
                        'id'    => $attribute->id,
                        ])}}">Перейти</a>
                </td>
                <td><a href="{{route('attribute.delete', ['id' => $attribute->id])}}">Выполнить</a></td>
        @endforeach
        </tbody>

    </table>
</div>
@else
<div class="not">
    <p>Нет аттрибутов</p>
</div>
@endif
@endsection