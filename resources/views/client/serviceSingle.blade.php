@extends('client.layouts.client')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-last ftco-animate">
                    <p>
                        <img src="{{asset($service->img_path)}}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{$service->title}}</h2>
                    {!!$service->description!!}
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <li>
                                <a href="{{route('client.services')}}">Назад <span class="fa fa-chevron-left"></span></a>
                            </li>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection