@extends("layout")

@section("nav")
    <h1>Single blog</h1>
@endsection
@section("content")
    <article>
        <h1>{{ $post->title }}</h1>
        {!! $post->body !!}
    </article>

    <a href="/">Go back</a>
@endsection
