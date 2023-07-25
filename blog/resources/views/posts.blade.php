@extends('layout')

@section('content')
{{--  --}}

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count() == 0)
            <p class="text-center">There is no posts</p>

        @else   
        <x-post-featured-card :post="$posts[0] "/>
        <div class="lg:grid lg:grid-cols-2">
        @foreach ($posts->skip(1) as $post)
        <x-post-card :post="$post" class="bg-red-500"/>
        @endforeach
        @endif 
    </div>

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