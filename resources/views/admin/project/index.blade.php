@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Проекты</h4>
                        <p class="card-category">Проекты</p>
                    </div>
                    <div class="card-body">
                        <a href="{{route('project.create')}}" class="btn btn-primary">Добавить<i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Категория</th>
                                    <th>Видимость</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->category->name}}</td>
                                        <td>
                                            @if($project->is_visible)
                                                <span class="text-success">
                                            Виден
                                        </span>
                                            @else
                                                <span class="text-danger">
                                            Не виден
                                        </span>
                                            @endif
                                        </td>
                                        <td>
                                            <form class="d-inline" method="post"
                                                  action="{{route('project.visible', ['id' => $project->id])}}">
                                                {{csrf_field()}}
                                                @if($project->is_visible)
                                                    <button class="mb-2 btn  btn-outline-success btn-sm mr-1" type="submit">
                                                        <i class="material-icons md-12">remove_red_eye</i>
                                                    </button>
                                                @else
                                                    <button class="mb-2 btn  btn-outline-danger btn-sm mr-1" type="submit">
                                                        <i class="material-icons md-12">remove_red_eye</i>
                                                    </button>
                                                @endif
                                            </form>
                                            <a class="btn btn-outline-primary btn-sm mb-2 "
                                               href="{{route('project.edit', ['id' => $project->id])}}">
                                                <i class="material-icons md-12">edit</i>
                                            </a>
                                            <a class="btn btn-outline-primary btn-sm mb-2 "
                                               href="{{route('gallery.index', ['project_id' => $project->id])}}">
                                                <i class="material-icons md-12">bookmark</i>
                                            </a>
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
