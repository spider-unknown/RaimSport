@extends('client.layouts.client')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item @if($categoryId == $category->id) bg-primary text-white @endif">
                                <a class="@if($categoryId == $category->id) text-white @endif"
                                   href="{{route('client.branch', ['categoryId' => $category->id,
                                   'id' => $branch->id])}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-9">
                    <div class="container">
                        <div class="col-lg-8 order-lg-last ftco-animate">
                            <p>
                                <img src="images/image_1.jpg" alt="" class="img-fluid">
                            </p>
                            @if($category)
                                <h2 class="mb-3">{{$category->name}}</h2>
                                {!! $category->description !!}
                            @else
                                <h2 class="mb-3">{{$branch->name}}</h2>
                                {!! $branch->description !!}
                            @endif
                            @if(!empty($projects))
                                <hr>
                                <h3>Наши проекты</h3>
                                <div class="row no-gutters">
                                    @foreach($projects as $project)
                                        <div class="col-md-6 ftco-animate">
                                            <div class="work img d-flex align-items-end" style="background-image: url({{asset($project->img_path)}});">
                                                <a href="{{asset($project->img_path)}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                                    <span class="fa fa-expand"></span>
                                                </a>
                                                <div class="desc w-100 px-4">
                                                    <div class="text w-100 mb-3">
                                                        <h2><a href="{{route('client.project.single', ['id' => $project->id])}}">{{$project->category->name}}</a></h2>
                                                        <span>{{$project->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
{{--                        <div class="row d-flex">--}}
{{--                            @foreach($products as $product)--}}
{{--                                <div class="col-md-4 mb-4 d-flex ftco-animate">--}}

{{--                                    <div class="card" style="width: 18rem;">--}}
{{--                                        <img class="card-img-top" src="{{asset($product->img_path)}}"--}}
{{--                                             alt="Card image cap">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h5 class="card-title">{{$product->name}}</h5>--}}
{{--                                            <p class="card-text">{{$product->price}}тг</p>--}}
{{--                                            <a href="{{route('client.shop.single', ['id' => $product->id])}}"--}}
{{--                                               class="btn btn-primary">Смотреть</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="row mt-5">--}}
{{--                            <div class="col text-center">--}}
{{--                                <div class="block-27">--}}
{{--                                    <ul>--}}
{{--                                        @if($products->currentPage() != 1)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{route('client.shop', ['page' =>($products->currentPage() - 1) ,'categoryId' => $categoryId])}}">&lt;</a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                        @for($i = 1; $i <= $products->lastPage(); $i++)--}}
{{--                                            <li class="{{$i == $products->currentPage() ? 'active' : ''}}">--}}
{{--                                                <a href="{{route('client.shop', ['page' =>$i ,'categoryId' => $categoryId])}}"><span>{{$i}}</span></a>--}}
{{--                                            </li>--}}
{{--                                        @endfor--}}
{{--                                        @if($products->lastPage() != $products->currentPage())--}}
{{--                                            <li>--}}
{{--                                                <a href="{{route('client.shop', ['page' =>($products->currentPage() + 1) ,'categoryId' => $categoryId])}}">&gt;</a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
