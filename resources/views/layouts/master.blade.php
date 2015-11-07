<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    @yield('title')
    <link rel="shortcut icon" href="{{asset('dashboards/img/logo-single.png')}}" />

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('theme-template/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('theme-template/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--Tipue search-->
    {{--<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>--}}
    {{--<link href="{{ asset('search/tipuesearch.css')}}" rel="stylesheet"  id="bscss">--}}
    <!--end-->

</head>

<body>
@yield('container')
<!-- VENDOR SCRIPTS-->

{{--<script src="{{ asset('search/tipuesearch_set.js')}}"></script>--}}
{{--<script src="{{ asset('search/tipuesearch.min.js')}}"></script>--}}


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../bin/materialize.js"></script>
<script src="{{ asset('theme-template/js/init.js') }}"></script>
<script src="{{ asset('theme-template/js/materialize.js') }}"></script>

@yield('page_specific_scripts')
<!-- SITE SCRIPTS-->
<script src="{{ asset('theme-template/js/custom.js') }}"></script>

</body>

</html>