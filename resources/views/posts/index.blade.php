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
                    <form class="col s12" method="POST">
                        <div class="" >
                            <h5 class="red-text center">Posts List</h5>
                        </div>
                            <table>
                                <thead>
                                <tr>
                                    <th data-field="title">Title</th>
                                    <th data-field="content">Content</th>
                                    <th data-field="description">Description</th>
                                    <th data-field="message">Message</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                </tr>
                                <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                    <td>$0.87</td>
                                </tr>
                                <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                    <td>$0.87</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="input-field col s12">
                                    <a href="{{ url('/posts/create') }}" class="waves-effect waves-light btn right red">Create</a>
                                </div>
                            </div>
                        </form>
                    </div>
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




