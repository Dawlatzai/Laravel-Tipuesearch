@extends('layouts.master')

{{--Navbar start--}}
@include('partials.navbar')
{{--Navbar end--}}

{{--start container--}}
@section('container')

    <div class="section">

        <div class="row">
            <div class="col s12 m7 offset-l3">
                <div class="card">
                    <div class="" >
                        <h4 class="red-text center">Create Post</h4>
                    </div>
                    <form class="col s12" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="title" type="text" name="title" class="validate">
                                <label for="title">Title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="content" type="text" class="validate">
                                <label for="content">Content</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="description" type="text" class="validate">
                                <label for="description">Description</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <a href="{{ url('/posts/store') }}" class="waves-effect waves-light btn right red">Submit</a>
                            </div>
                        </div>
                    </form>

                </div>
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




