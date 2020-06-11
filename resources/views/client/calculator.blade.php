@extends('client.layouts.client')
@section('styles')
    <style>.button input[type="radio"] {
            display: none;
        }



        .button input[type=radio]:hover + label  >img {
            -webkit-transform: scale(1.3);
            -ms-transform: scale(1.3);
            transform: scale(1.3);
        }
        .container {
            display: flex;
            justify-content: center;
        }
        .center {
            width: 800px;
        }
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
@endsection
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

@section('scripts')
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <script>
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it

        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex)
            {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                modal.style.display = "block";
            }
        });
    </script>
@endsection
