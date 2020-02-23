<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.parts.head')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
        @include('client.layouts.parts.header')
    </header>

        @yield('content')

    <footer class="footer-section bg-dark">
        @include('client.layouts.parts.footer')
    </footer>



</div>
<!-- .site-wrap -->
@include('client.layouts.parts.javascript')
</body>

</html>
