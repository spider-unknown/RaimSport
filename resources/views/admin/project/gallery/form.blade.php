{{csrf_field()}}

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
<a href="{{route('gallery.index',['project_id'=>$project_id])}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
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


