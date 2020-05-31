@extends('client.layouts.client')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                @foreach($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="{{route('client.blogSingle', ['id' => $blog->id])}}" class="block-20"
                               style="background-image: url('{{asset($blog->img_path)}}');">
                            </a>
                            <div class="text p-3">
                                <div class="posted mb-3 d-flex">
                                    <div class="desc pl-3">
                                        <span>Добавлен от имени: {{$blog->user->name}}</span>
                                        <span>{{$blog->created_at}}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('client.blogSingle', ['id' => $blog->id])}}">{{$blog->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            @if($blogs->currentPage() != 1)
                                <li>
                                    <a href="{{route('client.blog'). '?page='.($blogs->currentPage() - 1)}}">&lt;</a>
                                </li>
                            @endif
                            @for($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="{{$i == $blogs->currentPage() ? 'active' : ''}}">
                                    <a href="{{route('client.blog'). '?page='.($i)}}"><span>{{$i}}</span></a>
                                </li>
                            @endfor
                            @if($blogs->lastPage() != $blogs->currentPage())
                                <li>
                                    <a href="{{route('client.blog'). '?page='.($blogs->currentPage() + 1)}}">&gt;</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection