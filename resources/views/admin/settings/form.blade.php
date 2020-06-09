{{csrf_field()}}
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="bmd-label-floating" for="title">Заглавие главной страницы</label>
                <textarea class="form-control" rows="5" id="title" name="title" maxlength="255">
                {{$main ? $main->title : old('title')}}</textarea>

        </div>
    </div>
</div>
<div class="row" style="display: none">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating" for="description">Описание в главной странице</label>
                <textarea class="form-control" rows="5" id="description" name="description">
                        {{$main ? $main->description : old('description')}}
                    </textarea>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="bmd-label-floating" for="title{{$about_us->id}}">Заглавие о компании страницы</label>
            <textarea class="form-control" rows="5" id="title{{$about_us->id}}" name="title{{$about_us->id}}" maxlength="255">
                {{$about_us ? $about_us->title : old('title'.$about_us->id)}}</textarea>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="form-group">
                <label class="bmd-label-floating" for="description{{$about_us->id}}">Описание о компании</label>
                <textarea class="form-control" rows="5" id="description{{$about_us->id}}"
                          name="description{{$about_us->id}}" required>
                        {{$about_us ? $about_us->description : old('description'.$about_us->id)}}
                    </textarea>

            </div>
        </div>
    </div>
</div>


    @foreach($childs as $child)
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="bmd-label-floating" for="title{{$child->id}}">Заглавие</label>
                    <input type="text" class="form-control" name="title{{$child->id}}"
                value = "{{$child ? $child->title : old('title')}}"  maxlength="255">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <label class="bmd-label-floating" for="description{{$child->id}}">Описание</label>
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
                <label class="bmd-label-floating" for="title{{$count->id}}">Заглавие</label>
                <input class="form-control" name="title{{$count->id}}"
                       value = "{{$count ? $count->title : old('title')}}">
            </div>
        </div>
        <div class="row">
                <div class="col-sm-2">
                        <input type="number" class="form-control"
                               name="description{{$count->id}}"
                               required
                               value="{{$count ? $count->description : old('description')}}">

                </div>
            </div>


    @endforeach

<img class="default_image_size" src="{{asset($main_image->description)}}" alt="{{$main_image->title}}">
<div class="col-md-8">
    <label class="bmd-label-floating" for="file">Пожалуйста выберите фото</label>
    <input type="file"
           id="file"
           class="form-control"
           name="image"
           accept="image/*">
</div>
<button type="submit" class="btn btn-primary pull-right">Сохранить<i class="material-icons">check</i></button>

<div class="clearfix"></div>
