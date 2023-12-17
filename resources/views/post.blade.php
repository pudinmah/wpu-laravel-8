{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
<article>
    <h2>{{$post->title}}</h2>

    {{-- {{$post->body}} --}}

    {!!$post->body!!}

    </article>
    <a href="/posts">Back to post</a>
@endsection
