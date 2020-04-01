@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Галерея</h4>
                        <p class="card-category">Галерея</p>
                    </div>
                    <div class="card-body">
                        <a href="{{route('gallery.create',['project_id' => $project_id])}}" class="btn btn-primary">Добавить<i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Фото</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($galleries as $gallery)
                                    <tr>
                                        <td>{{$gallery->id}}</td>

                                        <td>
                                            <img class="default_image_size" src="{{asset($gallery->img_path)}}" alt="Фото галереи">
                                        </td>
                                        <td>
{{--                                            <a class="btn btn-outline-primary mb-2 "--}}
{{--                                               href="{{route('$gallery.edit', ['id' => $gallery->id])}}">--}}
{{--                                                <i class="material-icons md-12">edit</i>--}}
{{--                                            </a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
