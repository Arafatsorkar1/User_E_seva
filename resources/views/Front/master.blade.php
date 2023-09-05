<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}fornt/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    @include('Front.includes.css')
</head>

<body>
<!-- Navbar Start -->
@include('Front.includes.menu')
<!-- Navbar End -->

@yield('body')

<!-- Footer Start -->
@include('Front.includes.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- JavaScript Libraries -->
@include('Front.includes.js')
</body>

</html>
