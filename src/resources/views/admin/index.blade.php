@extends('admin.layouts.layout')

@section('content')
    <div class="dashboard">
        <div class="count templete1">
            <h2>Количество товаров</h2>
            <p>{{$productsCount}}</p>
        </div>
        <div class="count template2">
            <h2>Количество категорий</h2>
            <p>{{$categoriesCount}}</p>
        </div>
    </div>
@endsection