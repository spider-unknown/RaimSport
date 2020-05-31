{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="bmd-label-floating">Название</label>
            <input type="text" class="form-control"
                   name="title"
                   value="{{$blog ? $blog->title : old('title')}}"
                   id="name"
                   required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating">Описание</label>
                <textarea class="form-control" rows="5" id="description" name="description"
                          required>{{$blog ? $blog->description : old('description')}}</textarea>
            </div>
        </div>
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
@if($blog->img_path)
    <div class="row">
        <div class="col-5">
            <img src="{{asset($blog->img_path)}}" class="img-thumbnail m-2">
        </div>
    </div>
@endif
@include('admin.layouts.parts.error')
<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i></button>
<a href="{{route('blog.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
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

