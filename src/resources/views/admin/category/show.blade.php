@extends('admin.layouts.layout')

@section('categories')
<div class="back_link">
    <a href="{{route('admin.home')}}">На главную</a>
</div>
    @if($categories->count() !== 0)
<div class="categories">
    <table>
        <thead>
        <tr>
            <th>Категория</th>
            <th>Удалить</th>
            <th>Редактировать</th>
        </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><a href="{{route('admin.category.delete', ['id' => $category->id])}}">Удалить</a></td>
                    <td><a href="{{route('admin.category.edit', ['name' => $category->name, 'id' => $category->id])}}">Изменить</a></td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
    @else
    <div class="not">
        <p>Нет категорий</p>
    </div>
    @endif
@endsection
