@extends('client.layouts.client')

@section('content')
    <form id="example-form" action="#">
        <div>

            <h3>Вид</h3>
            <section>
                <h4>Выберите площадку</h4>
                <div class="container">

                @foreach($blogs as $blog)
                    <div class="button">

                        <input type="radio" id="but{{$blog->id}}" name="sel_button" class="required">
                        <label for="but{{$blog->id}}">
                            <img src="{{$blog->img_path}}" width="200" height="200" alt="bulb_icon"/>
                        </label>
                        <br>

                    </div>
                @endforeach
                    </div>
            </section>
            <h3>Размеры</h3>
            <section>
                <div class="container">

                <label for="name">Длина(см)</label>
                <input id="name" name="name" type="text" class="required">
                    <br>
                <label for="surname">Ширина(см)</label>
                <input id="surname" name="surname" type="text" class="required">
                </div>
            </section>
            <h3>Категория</h3>
            <section>
                <h4>Выберите категорию</h4>
                <div class="container">
                @foreach($blogs as $blog)
                <div class="button">

                    <input type="radio" id="bute{{$blog->id}}" name="sel_button" class="required">
                    <label for="bute{{$blog->id}}">
                        <img src="{{$blog->img_path}}" width="200" height="200" alt="bulb_icon"/>
                    </label>



                </div>

                @endforeach
                </div>
            </section>

        </div>

    </form>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Сумма: 23000тг</h3>
            <img src="https://courtbuilder.sportcourt.net/assets/img/thumb_basketball_bigger.png" alt="Trulli" width="500" height="333">

        </div>

    </div>

@endsection

