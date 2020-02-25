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
                        <form method="post" action="{{route('branch.store')}}">
                            @include('admin.branch.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
