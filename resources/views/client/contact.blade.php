@extends('client.layouts.client')

@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Будьте на связи</h3>
                                    <form method="POST" id="contactForm" class="contactForm">
                                        <div class="row">
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
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Тема">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="7" placeholder="Сообщение"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Отправить сообщение"
                                                           class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
                                    <h3 class="mb-4 mt-md-4">Свяжитесь с нами</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Адрес:</span> Казахстан, Алматы
                                                <br>
                                                Казыбек би 117
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Абзал:</span> <a href="tel://77071997060">+77071997060</a></p>
                                            <p><span>Сержан:</span> <a href="tel://77087525322">+ 77087525322</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                        href="mailto:info@yoursite.com">raimsports@gmail.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Вебсайт</span> <a href="#">raimsport.kz</a></p>
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

    <a class="dg-widget-link"
       href="http://2gis.kz/almaty/firm/9429940000971024/center/76.92695485660808,43.25585766178642/zoom/18?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
        на карте Алматы</a>
    <div class="dg-widget-link"><a
                href="http://2gis.kz/almaty/center/76.900843,43.22573/zoom/18/routeTab/rsType/bus/to/76.900843,43.22573╎Казыбек, продуктовый магазин?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
            проезд до Казыбек, продуктовый магазин</a></div>
    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
    <script charset="utf-8">new DGWidgetLoader({
            "width": "100%",
            "height": 600,
            "borderColor": "#a3a3a3",
            "pos": {"lat": 43.25585766178642, "lon": 76.92695485660808, "zoom": 18},
            "opt": {"city": "almaty"},
            "org": [{"id": "9429940000971024"}]
        });</script>
    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в
        настройках вашего браузера.
    </noscript>
@endsection