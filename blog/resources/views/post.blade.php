@extends('layout')

@section('content')
    <article>
        <h1>
            <?= $post->title ?>
        </h1>
        <div>
            {!! $post->body!!}
        </div>
        <br>
        <button><a href="/">Return</a></button>
    </article>

@endsection
