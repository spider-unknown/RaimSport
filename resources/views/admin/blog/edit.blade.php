@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Новости</h4>
                        <p class="card-category">Редактирование блога</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('blog.update' , ['blog_id' => $blog->id])}}"
                              enctype="multipart/form-data">
                            @include('admin.blog.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



