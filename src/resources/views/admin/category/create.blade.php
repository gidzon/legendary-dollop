@extends('admin.layouts.layout')

@section('form')
<div class="back_link">
    <a href="{{route('admin.home')}}">На главную</a>
</div>
    <div class="form-container">
        <form action="{{route('admin.category.store')}}" method="POST">
            @csrf
            <input type="text" name="category" id="">
            <input type="submit" value="отправить">
        </form>
    </div>
@endsection

