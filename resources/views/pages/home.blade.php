@extends('templates.guest')
@section('tab_title', 'Lewis Hayter')
@section('template_content')

    @include('pages.sections.intro')
    @include('pages.sections.about')
    @include('pages.sections.experience')
    @include('pages.sections.get_in_touch')
    @include('pages.sections.footer')

@endsection
