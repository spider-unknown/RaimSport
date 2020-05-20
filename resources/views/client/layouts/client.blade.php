<!DOCTYPE html>
<html lang="en">
<head>
    @include('client.layouts.parts.head')
</head>
<body>
@include('client.layouts.parts.header')
@yield('content')
@include('client.layouts.parts.footer')
@include('client.layouts.parts.javascript')
</body>
</html>