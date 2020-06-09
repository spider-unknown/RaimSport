@extends('client.layouts.client')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="col-lg-8 order-lg-last ftco-animate">
                                <h2 class="mb-3">{!! $about_us->title !!}</h2>
                                {!! $about_us->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
