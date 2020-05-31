{{csrf_field()}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Полное имя</label>
            <input type="text" class="form-control"
                   name="full_name"
                   value="{{$note ? $note->full_name : old('full_name')}}"
                   id="name"
                   required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Позиция</label>
            <input type="text" class="form-control"
                   name="position"
                   value="{{$note ? $note->position : old('position')}}"
                   id="position"
                   required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating">Отзыв</label>
                <input type="text" class="form-control"
                       name="description"
                       value="{{$note ? $note->description : old('description')}}"
                       required>
            </div>
        </div>
    </div>
    @include('admin.layouts.parts.error')
    <button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i></button>
    <a href="{{route('note.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
        <i class="material-icons md-12">arrow_back</i> Назад
    </a>
    <div class="clearfix"></div>
