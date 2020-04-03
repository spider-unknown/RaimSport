@extends('admin.layouts.admin')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Продукты</h4>
                        <p class="card-category">Редактирование продукта</p>
                    </div>
                    <div class="card-body">
                        <img class="default_image_size" src="{{asset($product->img_path)}}" alt="Лого продукта">
                        <br>
                        <br>
                        <form method="post" action="{{route('product.update', ['id'=>$product->id])}}" enctype="multipart/form-data">
                            @include('admin.product.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

