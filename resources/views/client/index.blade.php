@extends('client.layouts.client')
@section('content')

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <h1 class="mb-3">Fitness Help Me Feel Better</h1>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nisi minus perspiciatis optio, id deserunt.</p>
                    <p class="text-center">
                        <a href="#" class="btn btn-outline-white py-3 px-5">Get Started</a>
                    </p>
                </div>
            </div>

        </div>
    </div>


    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8 section-heading">
                    <span class="subheading">Stay Healthy</span>
                    <h2 class="heading mb-3">Setup Your Body With Workout</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, mollitia amet nihil!
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>

            <!-- Slider -->
            <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fit"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Consectuetur elit</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis quo, cumque fuga.</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym-1"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Veritatis quo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quasi quia iure unde perferendis!</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Perspiciatis modi</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi tempora nostrum, perspiciatis modi eaque!</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-vegetables"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Magnam ab eius</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, magnam ab eius autem est.</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fruit-juice"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Impedit alias</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis beatae impedit alias ad unde?</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-stationary-bike"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Recusandae nisi</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, minima quod optio recusandae nisi.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="bgimg" style="background-image: url('{{asset('client/images/bg_2.jpg')}}');"  data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h2 class="">Get The Result You Want</h2>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ut quisquam, distinctio illo, debitis repudiandae.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="site-section" id="classes-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Fitness Class</span>
                    <h2 class="heading mb-3">Our Classes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consequatur cum neque?
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #1</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #2</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #3</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #4</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #5</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #1</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #2</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #3</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #4</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>

                    <div class="class-item d-flex align-items-center">
                        <a href="single.html" class="class-item-thumbnail">
                            <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                        </a>
                        <div class="class-item-text">

                            <h2><a href="single.html">Fitness Class Name #5</a></h2>
                            <span>By Justin Daniel</span>,
                            <span>30 minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bgimg" style="background-image: url('{{asset('client/images/bg_3.jpg')}}');"  data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h2 class="">Every Step Counts</h2>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ipsam tempore, sapiente modi facilis est?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="schedule-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Fitness Sched</span>
                    <h2 class="heading mb-3">Schedule</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <ul class="nav days d-flex" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday"
                               aria-selected="true">S</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday"
                               aria-selected="false">M</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday"
                               aria-selected="false">T</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday"
                               aria-selected="false">W</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday"
                               aria-selected="false">T</a>
                        </li><li class="nav-item">
                            <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday"
                               aria-selected="false">F</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday"
                               aria-selected="false">S</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Sunday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Monday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Tuesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Wednesday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Thursday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Friday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>




                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_3.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_2.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>



                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_4.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>

                            <div class="class-item d-flex align-items-center">
                                <a href="single.html" class="class-item-thumbnail">
                                    <img src="{{asset('client/images/img_1.jpg')}}" alt="Image">
                                </a>
                                <div class="class-item-text">
                                    <span>Saturday 7:30am - 9:00am</span>
                                    <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                    <span>By Justin Daniel</span>,
                                    <span>30 minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="bgimg" style="background-image: url('{{asset('client/images/bg_1.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h2 class="">Your Fitness Partner Where Ever You Are</h2>
                    <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, nisi cum officia alias recusandae neque reprehenderit.</p>
                </div>
            </div>
        </div>
    </div>




    <div class="site-section" id="trainer-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Trainer</span>
                    <h2 class="heading mb-3">Our Trainers</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                    <div class="person">
                        <img src="{{asset('client/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                        <h3>Justin Daniel</h3>
                        <p class="position">Trainer</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="person">
                        <img src="{{asset('client/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                        <h3>Matthew Davidson</h3>
                        <p class="position">Trainer</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="person">
                        <img src="{{asset('client/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                        <h3>Matthew Davidson</h3>
                        <p class="position">Trainer</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="person">
                        <img src="{{asset('client/images/person_4.jpg')}}" alt="Image" class="img-fluid">
                        <h3>Matthew Davidson</h3>
                        <p class="position">Trainer</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Fitness Services</span>
                    <h2 class="heading mb-3">Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fit"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Be Fit</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur tempora delectus aut, mollitia. Veritatis!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym-1"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Join Club</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae tenetur numquam sunt sequi similique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Gym Fitness</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam fuga, blanditiis. Possimus, error, deserunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-vegetables"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Eat Vegie</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ullam tempore aliquam dolores quos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fruit-juice"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Fruit Juices</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic aut libero, doloribus. Magni, nihil.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-stationary-bike"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Body Warmup</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dolorem debitis assumenda beatae quis.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light contact-wrap" id="contact-section">
        <div class="container">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8  section-heading">
                    <span class="subheading">Get In Touch</span>
                    <h2 class="heading mb-3">Contact Us</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form method="post" data-aos="fade">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                            placeholder="Write your message here."></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
