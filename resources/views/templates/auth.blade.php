@extends('layouts.app')
@section('app_content')

    <div class="uiRow">

        <div class="uiCol sidebar">
            @include('partials.sidebar')
        </div>
        <div class="uiCol">
            @include('partials.content_header')
            @yield('template_content')
        </div>
    </div>

@endsection
