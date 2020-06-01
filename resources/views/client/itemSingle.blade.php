@extends('client.layouts.client')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 order-lg-last ftco-animate">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-3">Наименование: {{$product->name}}</h2>
                        </div>
                        <div class="card-body">
                            <p class="mt-3">
                                <img src="{{asset($product->img_path)}}" alt="" class="img-fluid">
                            </p>
                            <h2 class="mb-3 text-danger">Цена: {{$product->price}}тг.</h2>
                            <h2 class="mb-3">{{$product->category->name}}</h2>

                            <p class="mt-5 mb-5">
                                {!!$product->description!!}
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Оставьте заявку, мы вам позвоним</h3>
                                <form method="POST" action="{{route('client.bot.send.contact')}}" id="contactForm"
                                      class="contactForm">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden"
                                                       value="{{'ID: '.$product->id .', наименование: '.$product->name.', стоимость: '.$product->price.'тг - ПОКУПКА, дата'}}"
                                                       class="form-control" name="theme" id="subject"
                                                       placeholder="Тема">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phone" id="subject"
                                                       placeholder="Номер телефона">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name"
                                                       placeholder="Имя">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
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
                </div> <!-- .col-md-8 -->
                <div class="col-lg-2 sidebar pr-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <li>
                                <a href="{{route('client.shop')}}">Назад <span
                                            class="fa fa-chevron-left"></span></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection