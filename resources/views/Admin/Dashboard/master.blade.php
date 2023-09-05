<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
  @include('Admin.Dashboard.includes.css')

</head>

<body>

<!--*******************
    Preloader start
********************-->
{{--<div id="preloader">--}}
{{--    <div class="loader">--}}
{{--        <svg class="circular" viewBox="25 25 50 50">--}}
{{--            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--</div>--}}
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="index.html">
                <b class="logo-abbr"><img src="{{asset('/')}}backend/images/logo.png" alt=""> </b>
                <span class="logo-compact"><img src="{{asset('/')}}backend//images/logo-compact.png" alt=""></span>
                <span class="brand-title">
                        <img src="{{asset('/')}}backend/images/logo-text.png" alt="">
                    </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
@include('Admin.Dashboard.includes.header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('Admin.Dashboard.includes.menu')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        @yield('body')

        <!-- #/ container -->
    </div>

    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
  @include('Admin.Dashboard.includes.footer')
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

@include('Admin.Dashboard.includes.js')


</body>

</html>
