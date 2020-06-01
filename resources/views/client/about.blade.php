@extends('client.layouts.client')

@section('content')

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-8 offset-2 pl-md-12">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Добро пожаловать в Raimsport</span>
                            <h2 class="mb-4">RaimSport - компания создана для продвижения Казахстанского спорта!</h2>
                            <p>
                                Наша команда работает на территории нашей страны в сфере проектирования, строительства,
                                модернизации спортивных объектов любого уровня сложности. За время существования нами
                                были воплощены много проектов, которые благополучно работают и приносят людям пользу по
                                сей день. Использую высокие мировые стандарты в спортивных покрытиях, мы внедряем все
                                лучшее в наши проекты, это касается всего остального, что связано с материалами в
                                строительстве спортивных объектов. Мы всегда готовы помочь, и поделиться знанием, опытом
                                для реализации новых идей.
                            </p>
                            <div class="tabulation-2 mt-4">
                                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                    <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link active py-2" data-toggle="tab" href="#home1">Наша миссия</a>
                                    </li>
                                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                        <a class="nav-link py-2" data-toggle="tab" href="#home2">Наше видение</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Наши
                                            ценности</a>
                                    </li>
                                </ul>
                                <div class="tab-content rounded mt-2">
                                    <div class="tab-pane container p-0 active" id="home1">
                                        <p>
                                            Создать в Казахстане благоприятные условия для развития спорта
                                        </p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home2">
                                        <p>
                                            Спортивный Казахстан
                                        </p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home3">
                                        <p>
                                            Спортивная молодежь
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="fa fa-calendar"></span></div>
                            <strong class="number" data-number="8">0</strong>
                            <span>Лет опыта</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="fa fa-briefcase"></span></div>
                            <strong class="number" data-number="31">0</strong>
                            <span>Сделанных проектов</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="fa fa-users"></span></div>
                            <strong class="number" data-number="31">0</strong>
                            <span>Довольных клиентов</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="fa fa-bar-chart"></span></div>
                            <strong class="number" data-number="30">0</strong>
                            <span>Бизнес партнеров</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Наши лучшие услуги</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row tabulation mt-4 ftco-animate">
                        <div class="col-md-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                                @foreach($services as $index => $service)
                                    <li class="nav-item text-left">
                                        <a class="nav-link py-4" @if($index == 0 )show active @else hide
                                           @endif data-toggle="tab"
                                           href="#services-{{$service->id}}">
                                            <img src="{{asset($service->img_path)}}" style="height: 70px; width: auto"
                                                 alt="">
                                            &nbsp {{$service->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="col-md-8 pl-md-4">
                            <div class="tab-content">
                                @foreach($services as $service)
                                    <div class="tab-pane container p-0" @if($index == 0 ) active
                                         @else fade @endif  id="services-{{$service->id}}">
                                        <h3><a href="#">{{$service->title}}</a></h3>
                                        <p>
                                            {!!$service->description!!}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-stretch">
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Отзывы</span>
                    <h2>Счастливые клиенты</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($notes as $note)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">{{$note->description}}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="pl-3">
                                                <p class="name">{{$note->full_name}}</p>
                                                <span class="position">{{$note->position}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection