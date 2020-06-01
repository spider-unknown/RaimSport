@extends('client.layouts.client')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{route('client.shop')}}">Все</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="list-group-item @if($categoryId == $category->id) bg-primary text-white @endif">
                                <a class="@if($categoryId == $category->id) text-white @endif"
                                   href="{{route('client.shop', ['categoryId' => $category->id])}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-9">
                    <div class="container">
                        <div class="row d-flex">
                            @foreach($products as $product)
                                <div class="col-md-4 mb-4 d-flex ftco-animate">

                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{asset($product->img_path)}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product->name}}</h5>
                                            <p class="card-text">{{$product->price}}тг</p>
                                            <a href="{{route('client.shop.single', ['id' => $product->id])}}"
                                               class="btn btn-primary">Смотреть</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            <div class="col text-center">
                                <div class="block-27">
                                    <ul>
                                        @if($products->currentPage() != 1)
                                            <li>
                                                <a href="{{route('client.shop', ['page' =>($products->currentPage() - 1) ,'categoryId' => $categoryId])}}">&lt;</a>
                                            </li>
                                        @endif
                                        @for($i = 1; $i <= $products->lastPage(); $i++)
                                            <li class="{{$i == $products->currentPage() ? 'active' : ''}}">
                                                <a href="{{route('client.shop', ['page' =>$i ,'categoryId' => $categoryId])}}"><span>{{$i}}</span></a>
                                            </li>
                                        @endfor
                                        @if($products->lastPage() != $products->currentPage())
                                            <li>
                                                <a href="{{route('client.shop', ['page' =>($products->currentPage() + 1) ,'categoryId' => $categoryId])}}">&gt;</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection