<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/css/home.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="logo">logo</div>
            <div class="phone">+79503125</div>
            <div class="burrger_btn">
                <div class="open">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                
            </div>  
        </header>
        <div class="wrapper">
            <aside class="hidden">
            <div class="clouse">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <menu>
                    <div class="search">
                        <form action="" method="post">
                            <input type="text" placeholder="поиск">
                            <input type="submit" value="отправить">
                        </form>
                    </div>
                    <nav>
                        <ul>
                                <li><a href="{{route('admin.home')}}">админка</a></li>
                            
                            @if (Route::has('login'))
                            <div class="top-left links">
                                @auth
                                    <li><a href="{{ url('/home') }}">Личный кабинет</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Вход</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                                    @endif
                                @endauth
                            </div>
                            @endif
                            @foreach($categories as $category)
                                
                                <li><a href="{{route('category.product', ['id' => $category->id])}}">{{$category->name}}</a></li>
                                
                            @endforeach
                        </ul>
                    </nav>
                </menu>
                
            </aside>

            {{-- <div class="filtres">
                <div class="title">
                    <p>цена</p>
                </div>
                <form action="/" method="GET">
                    <input type="number" name="price" id="" @if(isset($_GET['price'])) value="{{$_GET['price']}}" @endif placeholder="от 1000">
                    
                    <input type="submit" value="Поиск">
                </form>
            </div> --}}
        
            <div class="container">
                @foreach ($products as $product)
                        <div class="product">
                            <div class="product_title">
                                <a href="{{route('product.show', $product->id)}}"><h3>{{$product->name}}</h3></a>
                            </div>
                            <div class="product_img">
                                <a href="{{route('product.show', $product->id)}}"><img src="{{$product->img_path}}" alt=""></a>
                            </div>
                            <div class="product_price">
                                <p>{{$product->price}}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
        {{$products->withQueryString()->links()}}
        <script src="https://use.fontawesome.com/152e3d6b6c.js"></script>
        <script src="{{asset('public/js/app.js')}}"></script>
    </body>
</html>
