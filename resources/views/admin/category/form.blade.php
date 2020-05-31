{{csrf_field()}}
<div class="row">
    <div class="col-md-6">
            <label class="bmd-label-floating">Название</label>
            <input type="text" class="form-control"
                   name="name"
                   value="{{$category ? $category->name : old('name')}}"
                   id="name"
                   required>

    </div>
    <div class="col-md-6">

        <label class="bmd-label-floating" for="branch_id">Ветка</label>
            <select class="form-control" name="branch_id" id="branch_id" required>
                @foreach($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                @endforeach
            </select>

    </div>
</div>
<div class="row">
    <div class="col-md-12">

                <label class="bmd-label-floating" for="description">Описание</label>
                <textarea class="form-control"
                          rows="5"
                          id="description"
                          name="description">{{$category ? $category->description : old('description')}}</textarea>
            </div>
        </div>

<div class="row">
    <div class="col-md-8">
        <label class="bmd-label-floating" for="file">Пожалуйста выберите фото</label>
        <input type="file"
               id="file"
               class="form-control"
               name="image"
               accept="image/*"
               required>
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
</div>

<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i> </button>
<a href="{{route('category.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
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


