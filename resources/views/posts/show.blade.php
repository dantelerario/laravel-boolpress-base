@extends('layouts.main')
@section('content')

    <h1 class="mb-2"> {{ $post->title }}</h1>
    <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit post</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"">
        @csrf 
        @method('DELETE')

        <input class="d-inline btn btn-sm btn-danger" type="submit" value="Delete">
    </form>

    <p class="mt-5 mb-4"> {{ $post->body }}</p>

    <section class="wrap-tags mt-5">
        <h4>Tags</h4>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
        @empty
            <p>No tags for this post.</p>
        @endforelse
    </section>

@endsection