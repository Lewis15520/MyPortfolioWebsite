@extends('layouts.app')
@section('app_content')

    @include('partials.header')
    <div class="uiRow">

        <div class="uiCol sidebar">
            @include('partials.sidebar')
        </div>
        <div class="uiCol">
            @yield('template_content')
        </div>
    </div>

@endsection
