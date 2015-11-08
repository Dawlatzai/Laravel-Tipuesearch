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
    {{--<!--Tipue search-->--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">--}}
    {{--<link href="{{ asset('theme-template/tipue-search/tipuesearch.css')}}" rel="stylesheet"  >--}}
    {{--<link href="{{ asset('theme-template/tipue-search/search_custom_css.css')}}" rel="stylesheet" >--}}
    {{--<!--end-->--}}
    @yield('stylesheet')

</head>

<body>
@yield('container')

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
{{--<script src="{{ asset('theme-template/tipue-search/tipuesearch.min.js')}}"></script>--}}
{{--<script src="{{ asset('theme-template/tipue-search/tipuesearch_content.js')}}"></script>--}}
{{--<script src="{{ asset('theme-template/tipue-search/tipuesearch_set.js')}}"></script>--}}
<script src="{{ asset('theme-template/js/init.js') }}"></script>
<script src="{{ asset('theme-template/js/materialize.js') }}"></script>




@yield('scripts')
<!-- SITE SCRIPTS-->

</body>

</html>