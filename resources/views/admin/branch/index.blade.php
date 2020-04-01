@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Ветки</h4>
                        <p class="card-category">Ветки для меню</p>
                    </div>
                    <div class="card-body">
                        <a href="{{route('branch.create')}}" class="btn btn-primary">Добавить<i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Название в меню</th>
                                    <th>Видимость</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($branches as $branch)
                                    <tr>
                                        <td>{{$branch->id}}</td>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$branch->name_in_menu}}</td>
                                        <td>
                                            @if($branch->is_visible)
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
                                               href="{{route('branch.edit', ['id' => $branch->id])}}">
                                                <i class="material-icons md-12">edit</i>
                                            </a>
                                            <form class="d-inline" method="post"
                                                  action="{{route('branch.visible', ['id' => $branch->id])}}">
                                                {{csrf_field()}}
                                                @if($branch->is_visible)
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
