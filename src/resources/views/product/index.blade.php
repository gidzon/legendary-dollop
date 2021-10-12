@extends('product.layout')

@section('attributes')
    <div class="container_product_attributes">
        <form action="{{route('filtres')}}" method="POST">
            @csrf
            <div id="price"><p>Цена</p></div>
            <input type="number" name="price" id=""   placeholder="от 1000">
            @switch($category->name)
                @case('Кресла')
                    <input type="number" name="witdh" id="" placeholder="ширина">
                    <input type="number" name="height" id="" placeholder="высота">
                    <div class="checkbox">
                        <div class="checkbox_group">
                            <div class="group_title">
                                <p>механизм трансформации</p>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Акардион</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="accordion" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Выкатной</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="roll-out" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Еврокнижка</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="eurobook" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Книжка</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="book" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @break
                @case('Диваны')
                    <input type="number" name="size" id="" placeholder="размер">
                    <input type="number" name="depth" id="" placeholder="глубина">
                    <div class="checkbox">
                        <div class="checkbox_group">
                            <div class="group_title">
                                <p>наполнение</p>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>поролон</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="foam_rubber" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Пружинная змейка</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="spring_shake" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Змейка</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="shake" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @break
                @default
                    <input type="text" name="color" id="" placeholder="цвет">
                    <input type="number" name="weight" id="" placeholder="вес">
                    <div class="checkbox">
                        <div class="checkbox_group">
                            <div class="group_title">
                                <p>Материал обивки</p>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Без обивки</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="foam_rubber" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Кожа</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="leather" id="">
                                </div>
                            </div>
                            <div class="elem">
                                <div class="elem_title">
                                    <p>Искуственная кожа</p>
                                </div>
                                <div class="elem_input">
                                    <input type="checkbox" name="artificial_leather" id="">
                                </div>
                            </div>
                        </div>
                    </div>
            @endswitch
            <div class="send">
                <input type="submit" value="поиск">
            </div>
        </form>
    </div>
@endsection

@section('content')
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
@endsection
