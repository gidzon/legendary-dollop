@extends('admin.layouts.layout')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('attribute')
<div class="back_link">
    <a href="{{route('admin.product.index')}}">Назад</a>
</div>
<div class="succes hidden">
    <p>Успешно добавленно</p>
</div>
<div class="attribute_container">
    <form action=""  name="attribute">
        <input type="hidden" name="product_id" value="{{$id}}">
        <input type="text" name="attr_name" id="" placeholder="Название">
        <input type="text" name="attr_value" id="" placeholder="Значение">
        <div class="btn_send">
            <input type="submit" value="отправить">
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{asset('public/js/attribute.js')}}"></script>
@endsection
