@extends('client.layouts.client')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item @if($categoryId == $category->id) bg-primary text-white @endif">
                                <div>
                                    <a class="@if($categoryId == $category->id) text-white @endif"
                                       href="{{route('client.branch', ['categoryId' => $category->id,
                                       'id' => $branch->id])}}">{{$category->name}}</a>
                                    @if(!$category->products->isEmpty())
                                        <a href="#" data-toggle="dropdown">
                                            <span class="fa fa-caret-down @if($categoryId == $category->id) bg-primary text-white @endif"></span></a>
                                        <ul class="dropdown-menu">
                                            @foreach($category->products as $product)
                                                <li class="dropdown-item @if($productId == $product->id) bg-primary text-white @endif">
                                                    <a class="@if($productId == $product->id) text-white @endif"
                                                       href="{{route('client.branch', ['categoryId' => $category->id,
                                                        'id' => $branch->id, 'productId' => $product->id])}}">{{$product->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 col-md-8 col-12 info">
                    <div class="container">
                        @if(!$currentProduct)
                            <div class="col-lg-9 order-lg-last ftco-animate">
                                <p>
                                    <img src="images/image_1.jpg" alt="" class="img-fluid">
                                </p>
                                @if($currentCategory)
                                    <h2 class="mb-3">{{$currentCategory->name}}</h2>
                                    {!! $currentCategory->description !!}
                                @else
                                    <h2 class="mb-3">{{$branch->name}}</h2>
                                    {!! $branch->description !!}
                                @endif
                                @if(!empty($products))
                                    <div class="row d-flex">
                                        @foreach($products as $product)
                                            <a href="{{route('client.branch', ['categoryId' => $category->id,
                                                        'id' => $branch->id, 'productId' => $product->id])}}"
                                            class="col-md-4 mb-4 d-flex ftco-animate">
                                                    <div class="card" style="width: 30rem;">
                                                        <img class="card-img-top" src="{{asset($product->img_path)}}"
                                                             alt="Card image cap">
                                                        <div class="card-body">
                                                            <div class="row"><h5
                                                                        class="card-title">{{$product->name}}</h5>
                                                                <p class="card-text">{{$product->price}}тг</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="col-lg-9 order-lg-last ftco-animate">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="mb-1">Наименование: {{$currentProduct->name}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="mt-1">
                                            <img src="{{asset($currentProduct->img_path)}}" alt="" class="img-fluid">
                                        </p>
                                        <h4 class="mb-1 text-danger">Цена: {{$product->price}}тг.</h4>
                                        <h4 class="mb-1">{{$currentProduct->category->name}}</h4>
                                        <p class="mt-1 mb-1">
                                            {!!$product->description!!}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <h3 class="mb-4">Оставьте заявку, мы вам позвоним</h3>
                                            <form method="POST" action="{{route('client.bot.send.contact')}}"
                                                  id="contactForm"
                                                  class="contactForm">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="hidden"
                                                                   value="{{'ID: '.$currentProduct->id .', наименование: '.$currentProduct->name.', стоимость: '.$product->price.'тг - ПОКУПКА, дата'}}"
                                                                   class="form-control" name="theme" id="subject"
                                                                   placeholder="Тема">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="phone"
                                                                   id="subject"
                                                                   placeholder="Номер телефона">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name"
                                                                   id="name"
                                                                   placeholder="Имя">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                   id="email"
                                                                   placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                    <textarea name="comment" class="form-control" id="message" cols="30"
                                                              rows="7" placeholder="Сообщение"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Оставить заявку на покупку"
                                                                   class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
