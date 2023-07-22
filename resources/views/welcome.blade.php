@extends("layout")

@section("nav")
    <h1>My Blog Home</h1>
@endsection

@section("content")
    @foreach($posts as $post)
        <article>
            <h1><a href="post/{{$post->url}}"> {{$post->title}} </a></h1>
            <p> {{$post->excerpt}}</p>
        </article>
    @endforeach
@endsection
