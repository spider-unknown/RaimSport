<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3 d-flex align-items-center">
                <a class="navbar-brand d-flex" href="{{route('client.index')}}">
                    <div class="d-flex align-items-center justify-content-center">
                        <img style="width: auto; height: 40px;" src="{{asset('client/raimsport.png')}}" alt="Raimsport">
                    </div>
                    Raimsport</a>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-whatsapp"><i class="sr-only">WhatsApp</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-vk"><i class="sr-only">Dribbble</i></span></a>
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
                <span class="fa fa-bars"></span> Меню
            </button>
{{--            <div class="req-button order-lg-last">--}}
{{--                <a href="{{route('client.index')}}">Оставить заявку</a>--}}
{{--            </div>--}}
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{(Request::is('/') ? 'active' : '')}}"><a
                                href="{{route('client.index')}}" class="nav-link">Главная</a></li>

                    <li class="nav-item {{(Request::is('about') ? 'active' : '')}}"><a
                                href="{{route('client.about')}}" class="nav-link">О компании</a></li>
                    @foreach(App\Models\Branch::where('is_visible', true)->limit(4)->get() as $branch)
                        <li class="nav-item {{(Request::is('branch/'. $branch->id) ? 'active' : '')}}"><a
                                href="{{route('client.branch', ['id' => $branch->id])}}" class="nav-link">{{$branch->name_in_menu}}</a></li>
                    @endforeach

                    <li class="nav-item {{(Request::is('project') ? 'active' : '')}}"><a
                                href="{{route('client.project')}}" class="nav-link">Проекты</a></li>

{{--                    <li class="nav-item {{(Request::is('blog') ? 'active' : '')}}"><a--}}
{{--                                href="{{route('client.blog')}}" class="nav-link">Блог</a></li>--}}

                    <li class="nav-item {{(Request::is('contact') ? 'active' : '')}}"><a
                                href="{{route('client.contact')}}" class="nav-link">Контакты</a></li>

{{--                    <li class="nav-item {{(Request::is('shop') ? 'active' : '')}}"><a--}}
{{--                                href="{{route('client.shop')}}" class="nav-link">Магазин</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <?php
    use App\Models\AboutUs;
    $main_image = AboutUs::where('type',AboutUs::MAIN_IMAGE)->first();
    ?>
    <div class="hero-wrap hero-wrap-2"
         style="background-image: url({{asset($main_image->description)}}); background-position: 50% 10%;"
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
