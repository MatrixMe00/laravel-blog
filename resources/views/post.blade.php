<x-layout>
    <x-slot name="nav">
        <h1>Single blog</h1>
    </x-slot>

    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>
            {!! $post->body !!}
        </article>

        <a href="/">Go back</a>
    </x-slot>
</x-layout>


