@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Проекты</h4>
                        <p class="card-category">Добавить проект</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
                            @include('admin.project.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
