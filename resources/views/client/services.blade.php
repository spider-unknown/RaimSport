@extends('client.layouts.client')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Мы предлагаем</span>
                    <h2>Наши услуги</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 services ftco-animate">
                        <div class="card">
                            <img class="card-img-top" src="{{$service->img_path}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$service->title}}</h5>
                                <p class="card-text">{{str_limit(strip_tags($service->description), 15,'...')}}</p>
                                <p><a href="{{route('client.service', ['id'=>$service->id])}}" class="btn-custom">Читать
                                        дальше...</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            @if($services->currentPage() != 1)
                                <li>
                                    <a href="{{route('client.services'). '?page='.($services->currentPage() - 1)}}">&lt;</a>
                                </li>
                            @endif
                            @for($i = 1; $i <= $services->lastPage(); $i++)
                                <li class="{{$i == $services->currentPage() ? 'active' : ''}}">
                                    <a href="{{route('client.services'). '?page='.($i)}}"><span>{{$i}}</span></a>
                                </li>
                            @endfor
                            @if($services->lastPage() != $services->currentPage())
                                <li>
                                    <a href="{{route('client.services'). '?page='.($services->currentPage() + 1)}}">&gt;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection