<script src="{{asset('client/js/jquery.min.js')}}"></script>
<script src="{{asset('client/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('client/js/popper.min.js')}}"></script>
<script src="{{asset('client/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('client/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('client/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('client/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('client/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('client/js/jquery.timepicker.min.js')}}"></script>
<script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('client/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('client/js/google-map.js')}}"></script>
<script src="{{asset('client/js/main.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{'client/js/jquery.steps.js'}}"></script>
<script src="{{'client/js/jquery.steps.min.js'}}"></script>
{{--<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>--}}





<script>
    toastr.options.closeButton = true;
    @if(session()->has('success'))
    toastr.success("{{session()->get('success')}}");
    @endif

    @if(session()->has('info'))
    toastr.info("{{session()->get('info')}}");
    @endif

    @if(session()->has('error'))
    toastr.error("{{session()->get('error')}}");
    @endif

    @if(session()->has('warning'))
    toastr.info("{{session()->get('warning')}}");
    @endif

</script>
<script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal


    // When the user clicks on <span> (x), close the modal
    // span.onclick = function() {
    //     modal.style.display = "none";
    // };

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
@yield('scripts')
