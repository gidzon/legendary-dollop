<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>admin</title>
</head>
<body>
<header>
    <menu>
        <ul>
            <li class="parent-menu">категории
                <ul class="sub-menu hidden">
                    <li><a href="{{route('admin.category.create')}}">Добавить категорию</a></li>
                    <li><a href="{{route('admin.category.show')}}">Список категорий</a></li>
                </ul>
            </li>
        </ul>
        <ul>
            <li class="parent-menu">товары
                <ul class="sub-menu hidden">
                    <li><a href="{{route('product.create')}}">Добавить товар</a></li>
                    <li><a href="{{route('admin.product.index')}}">Список товаров</a></li>
                </ul>
            </li>

        </ul>
    </menu>
</header>
    @yield('form')
    @yield('categories')
    @yield('products')
    @yield('product')
    @yield('attribute')
    @yield('content')
<script src="{{asset('public/js/admin.js')}}"></script>
@yield('js')
</body>
</html>
