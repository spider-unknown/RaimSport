@extends('client.layouts.client')

@section('content')
   	<section class="ftco-section">
        <div class="container">
            <div class="row no-gutters">
                @foreach($projects as $project)
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-end" style="background-image: url({{asset($project->img_path)}});">
                        <a href="{{asset($project->img_path)}}" class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="fa fa-expand"></span>
                                </a>
                        <div class="desc w-100 px-4">
                          <div class="text w-100 mb-3">
                            <h2><a href="#">{{$project->category->name}}</a></h2>
                            <span>{{$project->name}}</span>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
              <div class="col text-center">
                <div class="block-27">
                  <ul>
                      @if($projects->currentPage() != 1)
                        <li><a href="{{route('client.project'). '?page='.($projects->currentPage() - 1)}}">&lt;</a></li>
                      @endif
                      @for($i = 1; $i <= $projects->lastPage(); $i++)
                        <li class="{{$i == $projects->currentPage() ? 'active' : ''}}"><span>{{$i}}</span></li>
                      @endfor
                      @if($projects->lastPage() != $projects->currentPage())
                          <li><a href="{{route('client.project'). '?page='.($projects->currentPage() + 1)}}">&gt;</a></li>
                      @endif
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection
