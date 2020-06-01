@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Отзывы</h4>
                        <p class="card-category">Редактировани отзывы</p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('note.update' , ['note_id' => $note->id])}}">
                            @include('admin.note.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



