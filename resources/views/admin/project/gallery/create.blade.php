@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Галерея</h4>
                        <p class="card-category">Добавить фото</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('gallery.store',['project_id'=>$project_id])}}" enctype="multipart/form-data">
                            @include('admin.project.gallery.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
