{{csrf_field()}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">Название</label>
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating" for="branch_id">Ветка</label>
            <select class="form-control" name="branch_id" id="branch_id">
                @foreach($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->name}}</option>
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
                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i> </button>
<div class="clearfix"></div>
