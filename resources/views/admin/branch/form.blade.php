{{csrf_field()}}
<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">Название</label>
                <input type="text" class="form-control"
                       name="name"
                       value="{{$branch ? $branch->name : old('name')}}"
                       id="name"
                       required
                >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="bmd-label-floating">Название в меню</label>
                <input type="text"
                       class="form-control"
                       name="name_in_menu"
                       value="{{$branch ? $branch->name_in_menu : old('name_in_menu')}}"
                       required
                    >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-group">
                    <label class="bmd-label-floating" for="description">Описание</label>
                    <textarea class="form-control" rows="5" id="description" name="description" required>
                        {{$branch ? $branch->description : old('description')}}
                    </textarea></textarea>

                </div>
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i> </button>
<a href="{{route('branch.index')}}" type="button" class="mb-2 btn btn-medium btn-primary mr-1">
    <i class="material-icons md-12">arrow_back</i> Назад
</a>
<div class="clearfix"></div>
