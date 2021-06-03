@extends('templates.guest')
@section('tab_title', 'Lewis Hayter')
@section('template_content')

    @include('pages.sections.intro')
    @include('pages.sections.about')
    @include('pages.sections.experience')
    @include('pages.sections.get_in_touch')
    @include('pages.sections.footer')

    <script>

        var app = document.getElementById('typed');

        var typewriter = new Typewriter(app, {
            loop: false
        });

        typewriter.typeString('Senior software developer.')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Aspiring entrepreneur.')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Software engineer.')
            .deleteAll()
            .typeString('Full-stack developer.')
            .pauseFor(5000)
            .start();

    </script>

@endsection
