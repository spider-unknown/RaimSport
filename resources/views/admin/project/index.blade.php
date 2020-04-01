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
                                            <a class="btn btn-outline-primary mb-2 "
                                               href="{{route('project.edit', ['id' => $project->id])}}">
                                                <i class="material-icons md-12">edit</i>
                                            </a>
                                            <a class="btn btn-outline-primary mb-2 "
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
