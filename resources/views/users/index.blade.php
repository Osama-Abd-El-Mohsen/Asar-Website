@extends('layouts.navigation')

@section('main-body')
    <div class="product_body">
        @foreach ($products as $product)
            <div class="continer">
                <div class="product discount most_popular">
                    <div class="img">
                        <img src="{{$product->img}}" alt="Italian Trulli">
                    </div>
                    <div class="p_name">{{$product->name}}</div>
                    <div class="p_price">{{$product->price}} $</div>
                    @if ($product->isPopular)
                    <div class="popular">most popular</div>
                    @endif

                    @if ($product->sale > 0)
                        <div class="discount">{{$product->sale}} %</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection()




