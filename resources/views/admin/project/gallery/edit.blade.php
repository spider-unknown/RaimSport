@extends('admin.layouts.admin')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Галерея</h4>
                        <p class="card-category">Редактирование галереи</p>
                    </div>
                    <div class="card-body">
                        <img class="default_image_size" src="{{asset($gallery->img_path)}}" alt="фото галереи">
                        <br>
                        <br>
                        <form method="post" action="{{route('gallery.update', ['id'=>$gallery->id])}}" enctype="multipart/form-data">
                            @include('admin.project.gallery.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

