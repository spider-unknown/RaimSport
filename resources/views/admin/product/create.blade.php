@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Продукты</h4>
                        <p class="card-category">Добавить продукт</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @include('admin.product.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
