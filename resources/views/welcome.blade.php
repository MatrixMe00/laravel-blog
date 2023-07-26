<x-layout>
    <x-slot name="nav">
        <h1>My Blog Home</h1>
    </x-slot>

    <x-slot name="content">
        @foreach($posts as $post)
        <article>
            <h1><a href="post/{{$post->slug}}"> {{$post->title}} </a></h1>
            <h5>Cat: <a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></h5>
            <p> {!!$post->excerpt!!}</p>
        </article>
        @endforeach
    </x-slot>
</x-layout>
