@extends('client.layouts.client')

@section('styles')
    <style>
        .req-button {
            display: none;
        }
    </style>
@endsection

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row justify-content-start py-5 pr-md-4">
                        <div class="col-md-12 heading-section ftco-animate py-md-4">
                            <h2 class="mb-4">RAIMSPORT - Будь первым вместе с нами!
                                КОМПЛЕКСНОЕ СТРОИТЕЛЬСТВО И ОСНАЩЕНИЕ СПОРТИВНЫХ СООРУЖЕНИЙ.</h2>
                            <div class="tabulation-2 mt-4">
                                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                    <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link active py-3" data-toggle="tab" href="#home1">Наша миссия</a>
                                    </li>
                                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                        <a class="nav-link py-3" data-toggle="tab" href="#home2">Наша деятельность </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#home3">Наши
                                            ценности</a>
                                    </li>
                                </ul>
                                <div class="tab-content rounded mt-2">
                                    <div class="tab-pane container p-0 active" id="home1">
                                        <p>RaimSport - компания создана для продвижения Казахстанского спорта! Наша
                                            команда работает
                                            на территории нашей страны в сфере проектирования, строительства,
                                            модернизации
                                            спортивных объектов любого уровня сложности. За время существования нами
                                            были воплощены
                                            много проектов, которые благополучно работают и приносят людям пользу по сей
                                            день.
                                            Используюя высокие мировые стандарты в спортивных покрытиях, мы внедряем все
                                            лучшее в
                                            наши проекты, это касается всего остального, что связано с материалами в
                                            строительстве
                                            спортивных объектов. Мы всегда готовы помочь, и поделиться знанием, опытом
                                            для
                                            реализации новых идей.</p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home2">
                                        <p>Основными направлениями деятельности компании RaimSport является:
                                            Строительство и комплексное оснащение, а также проектирование спортивных
                                            объектов.
                                            Поставка спортивных покрытий, сопутствующих материалов для открытых и
                                            закрытых спортивных сооружений.
                                            Поставка профессионального спортивного оборудования, тренажеров и инвентаря.
                                            Благоустройство дворов, поставка детских игровых комплексов.
                                            Комплексные работы по устройству напольных покрытий, в том числе специальных
                                            оснований и монтаж спортивных покрытий для всех видов спорта.
                                            Изготовление малых архитектурных форм (урны, скамейки)</p>
                                    </div>
                                    <div class="tab-pane container p-0 fade" id="home3">
                                        <p>Здоровье нации является безусловной общественной ценностью, приоритетом
                                            государственной политики, основой национального богатства и национальной
                                            безопасности Казахстана. Здоровье – это не просто отсутствие болезней, а
                                            состояние физического благополучия, потребность заниматься спортом, который
                                            помогает сделать нашу жизнь лучше.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="bg-white">
                        <form action="{{route('client.bot.send')}}" method="POST"
                              class="appointment bg-white p-4 p-md-5">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="service" id="" class="form-control">
                                                    <option value="test">Выберите услугу</option>
                                                    <option value="">Skylights</option>
                                                    <option value="">Waterproofing</option>
                                                    <option value="">Industrial Roofing</option>
                                                    <option value="">Residential Roofing</option>
                                                    <option value="">Gutter Cleaning</option>
                                                    <option value="">Commercial Roofing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email адрес">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control"
                                               placeholder="Номер телефона">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                            <input type="text" name="date" class="form-control appointment_date"
                                                   placeholder="Дата">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="fa fa-clock-o"></span></div>
                                            <input type="text" name="time" class="form-control appointment_time"
                                                   placeholder="Время">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                                                  placeholder="Сообщение"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Оставить заявку" class="btn btn-primary py-3 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
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

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pt-5 pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Projects</span>
                    <h2>Done Projects</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-1.jpg')}});">
                        <a href="images/work-1.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-2.jpg')}});">
                        <a href="images/work-2.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-3.jpg')}});">
                        <a href="images/work-3.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-4.jpg')}});">
                        <a href="images/work-4.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-5.jpg')}});">
                        <a href="images/work-5.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-6.jpg')}});">
                        <a href="images/work-6.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-7.jpg')}});">
                        <a href="images/work-7.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end"
                         style="background-image: url({{asset('client/images/work-8.jpg')}});">
                        <a href="images/work-8.jpg"
                           class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4">
                            <div class="text w-100 mb-3">
                                <h2><a href="work-single.html">Pubs, Bars and Restaurants</a></h2>
                                <span>House</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('client/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('client/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('client/images/person_3.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('client/images/person_1.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('client/images/person_2.jpg')}})"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">News &amp; Blog</span>
                    <h2>Latest news from our blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('{{asset('client/images/image_1.jpg')}}');">
                        </a>
                        <div class="text p-3">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                     style="background-image: url({{asset('client/images/person_2.jpg')}});"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>24 February 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('{{asset('client/images/image_2.jpg')}}');">
                        </a>
                        <div class="text p-3">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                     style="background-image: url({{asset('client/images/person_3.jpg')}});"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>24 February 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                           style="background-image: url('{{asset('client/images/image_3.jpg')}}');">
                        </a>
                        <div class="text p-3">
                            <div class="posted mb-3 d-flex">
                                <div class="img author"
                                     style="background-image: url({{asset('client/images/person_1.jpg')}});"></div>
                                <div class="desc pl-3">
                                    <span>Posted by John doe</span>
                                    <span>24 February 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection