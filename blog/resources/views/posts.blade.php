@extends('layout')

@section('content')
{{--  --}}

    @include('_posts-header')
   

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-posts-grid :posts="$posts" />

</main>
    {{-- <h1>Welcome to the blade</h1>

    @foreach ($posts as $post)
     {{-- <article class="{{$loop-> even ? 'foobar' : ''}}"> --}}
        {{-- <h1> --}}
            {{-- <a href="/posts/{{ $post-> slug }}"> --}}
                {{-- {{ $post->title}} --}}
            {{-- </a> --}}
        {{-- </h1> --}}

        {{-- <p>
            by <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug}}"> {{$post->category->name}}</a>
        </p> --}}

        {{-- <div>
           {{ $post->excerpt}}
        </div>
     </article> --}}

    {{-- @endforeach --}} 

    @endsection