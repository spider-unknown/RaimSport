<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3 d-flex align-items-center">
                <a class="navbar-brand d-flex" href="{{route('client.index')}}">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-roof-2"></span></div>
                    Roofing</a>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="menu-wrap flex-md-column-reverse d-md-flex">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="req-button order-lg-last">
                <a href="#">Request A Quote</a>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{(Request::is('/') ? 'active' : '')}}"><a
                                href="{{route('client.index')}}" class="nav-link">Главная</a></li>

                    <li class="nav-item {{(Request::is('about') ? 'active' : '')}}"><a
                                href="{{route('client.about')}}" class="nav-link">О нас</a></li>

                    <li class="nav-item {{(Request::is('services') ? 'active' : '')}}"><a
                                href="{{route('client.services')}}" class="nav-link">Услуги</a></li>

                    <li class="nav-item {{(Request::is('project') ? 'active' : '')}}"><a
                                href="{{route('client.project')}}" class="nav-link">Проекты</a></li>

                    <li class="nav-item {{(Request::is('blog') ? 'active' : '')}}"><a
                                href="{{route('client.blog')}}" class="nav-link">Блог</a></li>

                    <li class="nav-item {{(Request::is('contact') ? 'active' : '')}}"><a
                                href="{{route('client.contact')}}" class="nav-link">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap hero-wrap-2"
         style="background-image: url({{asset('/client/images/bg_2.jpg')}}); background-position: 50% 0%;"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
                    {{--<h1 class="mb-0 bread">About Us</h1>--}}
                </div>
            </div>
        </div>
    </div>
</section>