@extends('layouts.main')
@section('content')
   @if (session('post-deleted'))
      <div class="alert alert-success">
         <p>Post deleted</p>
      </div>
   @endif

   <h1>Blog Archive</h1>

   {{-- Users posts --}}
   {{--@dump($posts)--}}
   @foreach($posts as $post)
   <article>
      <h2>{{ $post->title }}</h2>
      <h3 class="author">Autore: {{ $post->user->name }}</hh3>
      <h4>Created: {{ $post->created_at }}, Last update: {{ $post->updated_at }}</h4>
      <p>{{ $post->body }}</p>
      <a href="{{ route('posts.show', $post->slug) }}">Read More</a>
   </article>

      @if (!$loop->last)
      <hr>
      @endif
   @endforeach

   <h4>Navigation</h4>
   {{ $posts->links() }}
@endsection