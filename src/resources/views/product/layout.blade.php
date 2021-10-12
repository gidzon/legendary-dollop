<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        @yield('attributes')
        @yield('content')
    </div>
<script src="{{asset('public/js/app.js')}}"></script>
</body>
</html>