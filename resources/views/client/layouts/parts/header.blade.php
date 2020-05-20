
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3 d-flex align-items-center">
                <a class="navbar-brand d-flex" href="{{route('client.index')}}"><div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-roof-2"></span></div>Roofing</a>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="menu-wrap flex-md-column-reverse d-md-flex">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="{{route('client.index')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{route('client.about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{route('client.services')}}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{route('client.project')}}" class="nav-link">Project</a></li>
                    <li class="nav-item"><a href="{{route('client.blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{route('client.contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight">
        <div class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight" style="background-image:url({{asset('client/images/bg_1.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-10 text-center ftco-animate">
                            <div class="text w-100">
                                <h2>We are best Roofing Services</h2>
                                <h1 class="mb-4">Dedicated to providing the highest quality roofing services</h1>
                                <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight" style="background-image:url({{asset('client/images/bg_2.jpg')}});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-8 text-center ftco-animate">
                            <div class="text w-100">
                                <h2>We care about your home</h2>
                                <h1 class="mb-4">Quality roofing at a affordable price</h1>
                                <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>