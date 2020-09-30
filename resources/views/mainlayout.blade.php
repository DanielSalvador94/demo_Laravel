<html lang="es">
<head>
    @include('partials.head')
</head>
<body>
<div class="row">
    @include('partials.nav')
</div>

@include('partials.header')
@yield('content')
@include('partials.footer')
@include('partials.footer-scripts')
 </body>
</html>

