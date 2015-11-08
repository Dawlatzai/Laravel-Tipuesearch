@extends('layouts.master')

{{--Navbar start--}}
@include('partials.navbar')
{{--Navbar end--}}
@section('stylesheet')
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400" >
@stop
{{--start container--}}
@section('container')

    <div class="section">
        <div class="row">
            <div class="col s12 m7 offset-l3">
                <div id="tipue_search_content"></div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="section">
    </div>

    {{--start footer--}}
    @include('partials.footer')
    {{--end footer--}}
@stop
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('theme-template/tipue-search/tipuesearch.min.js')}}"></script>
    <script src="{{ asset('theme-template/tipue-search/tipuesearch_content.js')}}"></script>
    <script src="{{ asset('theme-template/tipue-search/tipuesearch_set.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#tipue_search_input').tipuesearch({
                'mode': 'live'
            });
        });
    </script>
@stop




