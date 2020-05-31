@extends('client.layouts.client')

@section('content')
    <section class="ftco-section">
        <div class="container">
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
                                    <span>24 March 2020</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">How Roofing Charge for Their Services</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            @if($projects->currentPage() != 1)
                                <li>
                                    <a href="{{route('client.blog'). '?page='.($projects->currentPage() - 1)}}">&lt;</a>
                                </li>
                            @endif
                            @for($i = 1; $i <= $projects->lastPage(); $i++)
                                <li class="{{$i == $projects->currentPage() ? 'active' : ''}}"><span>{{$i}}</span></li>
                            @endfor
                            @if($projects->lastPage() != $projects->currentPage())
                                <li>
                                    <a href="{{route('client.blog'). '?page='.($projects->currentPage() + 1)}}">&gt;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection