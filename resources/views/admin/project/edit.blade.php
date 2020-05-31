@extends('admin.layouts.admin')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Проекты</h4>
                        <p class="card-category">Редактирование проекта</p>
                    </div>
                    <div class="card-body">
                        <img class="default_image_size" src="{{asset($project->img_path)}}" alt="Лого проекта">
                        <br>
                        <br>
                        <form method="post" action="{{route('project.update', ['id'=>$project->id])}}"
                              enctype="multipart/form-data">
                            @include('admin.project.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

