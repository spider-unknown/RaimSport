@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Категории</h4>
                        <p class="card-category">Категории</p>
                    </div>
                    <div class="card-body">
                        <a href="{{route('category.create')}}" class="btn btn-primary">Добавить<i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Ветка</th>
                                    <th>Видимость</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->branch->name}}</td>
                                        <td>
                                            @if($category->is_visible)
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
                                            <a class="btn btn-outline-primary mb-2 "
                                               href="{{route('category.edit', ['id' => $category->id])}}">
                                                <i class="material-icons md-12">edit</i>
                                            </a>
                                            <form class="d-inline" method="post"
                                                  action="{{route('category.visible', ['id' => $category->id])}}">
                                                {{csrf_field()}}
                                                @if($category->is_visible)
                                                    <button class="mb-2 btn  btn-outline-success mr-1" type="submit">
                                                        <i class="material-icons md-12">remove_red_eye</i>
                                                    </button>
                                                @else
                                                    <button class="mb-2 btn  btn-outline-danger mr-1" type="submit">
                                                        <i class="material-icons md-12">remove_red_eye</i>
                                                    </button>
                                                @endif
                                            </form>

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
