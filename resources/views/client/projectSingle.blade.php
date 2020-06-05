@extends('client.layouts.client')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-last ftco-animate">
                    <p>
                        <img src="images/image_1.jpg" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{$project->name}}</h2>
                    {!! $project->description !!}
                </div>
                <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <li>
                                <a href="{{route('client.project')}}">Назад <span class="fa fa-chevron-left"></span></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                @foreach($project->galleries as $gallery)
                    <div class="col-md-3 ftco-animate">
                        <div class="work img d-flex align-items-end" style="background-image: url({{asset($gallery->img_path)}});">
                            <a href="{{asset($gallery->img_path)}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="fa fa-expand"></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> <!-- .section -->
@endsection
