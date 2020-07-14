<!doctype html>

<html lang="en">


<head>

    @include('includes.user_side.head')

    {{--     <script defer src="{{ asset('js/app.js') }}"></script>--}}
    {{--  <link href="{{asset('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">--}}
</head>

<body>
<div id="loader-wrapper">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<header>
    @include('includes.user_side.header')

</header>


<div id="tt-pageContent">

    <!-- BEGIN content_for_index -->
@yield('content')
<!-- END content_for_index -->
</div>
<footer>
    @include('includes.user_side.footer')
</footer>


<script src="{{ asset('user_side/external/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('user_side/external/bootstrap/js/bootstrap.min.js') }}"></script>
{{--product scripts--}}

<script src="{{ asset('user_side/external/elevatezoom/jquery.elevatezoom.js') }}"></script>

<script src="{{ asset('user_side/external/slick/slick.min.js') }}"></script>
<script src="{{ asset('user_side/external/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('user_side/external/panelmenu/panelmenu.js') }}"></script>
<script src="{{ asset('user_side/external/instafeed/instafeed.min.js') }}"></script>
<script src="{{ asset('user_side/external/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('user_side/external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('user_side/external/countdown/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('user_side/external/countdown/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('user_side/external/lazyLoad/lazyload.min.js') }}"></script>
{{--product scripts--}}
<script src="{{ asset('user_side/external/elevatezoom/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('user_side/external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user_side/js/main.js') }}"></script>
<!-- form validation and sending to mail -->
<script src="{{ asset('user_side/external/form/jquery.form.js') }}"></script>
<script src="{{ asset('user_side/external/form/jquery.validate.min.js') }}"></script>
<script src="{{ asset('user_side/external/form/jquery.form-init.js') }}"></script>


</body>


</html>
