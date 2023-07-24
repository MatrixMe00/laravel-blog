<x-layout>
    <x-slot name="nav">
        <h1>Single blog</h1>
    </x-slot>

    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>
            <h5>Cat: <a href="categories/{{$post->category->id}}">{{$post->category->name}}</a></h5>
            {!! $post->body !!}
        </article>

        <a href="/">Go back</a>
    </x-slot>
</x-layout>


