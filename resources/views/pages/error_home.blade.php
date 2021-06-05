@extends('templates.guest')
@section('tab_title', 'Lewis Hayter')
@section('template_content')

    @include('pages.sections.intro')
    @include('pages.sections.about')
    @include('pages.sections.experience')
    @include('pages.sections.projects')
    @include('pages.sections.get_in_touch')
    @include('pages.sections.footer')

    <script>
        var app = document.getElementById('typed');
        var typewriter = new Typewriter(app, {
            loop: false
        });
        typewriter.typeString('Senior software engineer.')
            .pauseFor(1500)
            .deleteChars(9)
            .typeString('developer.')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Full-stack developer.')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Future entrepreneur.')
            .pauseFor(2500)
            .start();
    </script>
@endsection
