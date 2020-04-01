{{csrf_field()}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Название</label>
            <input type="text" class="form-control"
                   name="name"
                   value="{{$project ? $project->name : old('name')}}"
                   id="name"
            >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="category_id">Категория</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating" for="description">Описание</label>
                <textarea class="form-control"
                          rows="5"
                          id="description"
                          name="description"

                >{{$project ? $project->description : old('description')}}</textarea>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-md-11">
    <input type="file"
           id="file"
           class="form-control"
           name="image"
           placeholder="Фото"
           accept="image/*"
           required>
    <label class="form-control-plaintext" for="file">Пожалуйста выберите фото</label>
</div>
<div class="form-group col-md-1">
    <input type="checkbox"
           data-on="Вкл"
           data-off="Откл"
           onchange="toggleImage(this)"
           checked
           data-toggle="toggle"
           data-size="md">
</div>

<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i> </button>
<a href="{{route('project.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
    <i class="material-icons md-12">arrow_back</i> Назад
</a>
<div class="clearfix"></div>

@section('scripts')
    <script>
        function toggleImage(el) {
            document.getElementById('file').disabled = !el.checked;
        }
    </script>
@endsection


