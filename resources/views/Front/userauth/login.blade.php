@extends('Front.master')
@section('title','login')
@section('css')


    <link href="{{asset('/')}}loginp/style.css" rel="stylesheet">

 @endsection

 @section('js')
    <script src="{{asset('/')}}loginp/script.js"></script>

 @endsection

@section('body')

    <!-- partial:index.partial.html -->
    <div class="logo text-center">
        <h1>Logo</h1>
    </div>
    <div class="wrapper">
        <div class="inner-warpper text-center">
            <h2 class="title">Login to your account</h2>
            <form action="{{route('login')}}" id="formvalidate" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">



                    <label class="palceholder" for="email">User Name</label>
                    <input class="form-control" name="email" id="email" type="email" placeholder="" />
                    <span class="lighting"></span>








{{--                    <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}

                </div>
                <div class="input-group">

                    <label class="palceholder" for="password">Password</label>
                    <input class="form-control" name="password" id="password" type="password" placeholder="" />
                    <span class="lighting"></span>







{{--                    <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
                </div>

                <button type="submit" id="login">Login</button>
                <div class="clearfix supporter">
                    <div class="pull-left remember-me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="rememberMe">{{ __('Remember me') }}</label>
                    </div>
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot your password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                    <x-button class="ml-4">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-button>--}}
                    <a class="forgot pull-right" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="signup-wrapper text-center">
            <a href="{{route('register')}}">Don't have an accout? <span class="text-primary">Create One</span></a>
        </div>
    </div>

    <!-- you don't need that :)  -->

@endsection
