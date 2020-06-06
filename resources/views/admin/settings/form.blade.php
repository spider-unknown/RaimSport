{{csrf_field()}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="bmd-label-floating">{{$main ? $main->title : old('title')}}</label>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating" for="description">Описание</label>
                <textarea class="form-control" rows="5" id="description" name="description" required>
                        {{$main ? $main->description : old('description')}}
                    </textarea>

            </div>
        </div>
    </div>
</div>


    @foreach($childs as $child)
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating">{{$child ? $child->title : old('title')}}</label>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label class="bmd-label-floating" for="description">Описание</label>
                        <textarea class="form-control" rows="5" id="description{{$child->id}}" name="description{{$child->id}}" required>
                        {{$child ? $child->description : old('description')}}
                    </textarea>

                    </div>
                </div>
            </div>
        </div>
    @endforeach


    @foreach($counts as $count)
        <div class="row">

            <div class="col-md">
                    <label class="bmd-label-floating">{{$count ? $count->title : old('title')}}</label>

            </div>
        </div>




            <div class="row">
                <div class="col-sm-2">
                        <input type="number" class="form-control"
                               name="description{{$count->id}}"
                               required
                               value="{{$count ? $count->description : old('description')}}"
                               id="description{{$count->id}}">

                </div>
            </div>


    @endforeach


<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i></button>

<div class="clearfix"></div>
