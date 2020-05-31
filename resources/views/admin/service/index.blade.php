@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Услуги</h4>
                        <p class="card-category">Услуга</p>
                    </div>
                    <div class="card-body">
                        <a href="{{route('service.create')}}" class="btn btn-primary">Добавить<i class="material-icons">add</i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$service->id}}</td>
                                        <td>{{$service->title}}</td>
                                        <td>
                                            <a class="btn btn-outline-primary btn-sm mb-2 "
                                               href="{{route('service.edit', ['service_id' => $service->id])}}">
                                                <i class="material-icons md-12">edit</i>
                                            </a>
                                            <form class="d-inline" action="{{route('service.delete', ['id' => $service->id])}}"
                                                  enctype="multipart/form-data"
                                                  method="post">
                                                <input type="hidden" name="_method" value="delete" />
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-outline-danger btn-sm mb-2">
                                                    <i class="material-icons md-12">delete</i>
                                                </button>
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
