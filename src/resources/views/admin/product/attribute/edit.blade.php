@extends('admin.layouts.layout')

@section('form')
<div class="attribute_container">
    <form action="{{route('attribute.update')}}"  method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value="{{$id}}">
        <input type="text" name="attr_name" id="" placeholder="Название" value="{{$name}}">
        <input type="text" name="attr_value" id="" placeholder="Значение" value="{{$value}}">
        <div class="btn_send">
            <input type="submit" value="отправить">
        </div>
    </form>
@endsection