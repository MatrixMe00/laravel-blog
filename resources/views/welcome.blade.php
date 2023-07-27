<x-layout>
    @include("_post-header")

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-posts-grid :posts="$posts" />
    </main>
</x-layout>

{{-- <x-slot name="nav">
    <h1>My Blog Home</h1>
</x-slot>

<x-slot name="content">
    @foreach($posts as $post)
    <article>
        <h1><a href="post/{{$post->slug}}"> {{$post->title}} </a></h1>
        <h5>By <a href="authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></h5>
        <p> {!!$post->excerpt!!}</p>
    </article>
    @endforeach
</x-slot> --}}
