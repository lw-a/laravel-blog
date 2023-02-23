@extends('layout')

@section('title', $post->title)

@section('content')
<div class="post-item">
  <div class="post-content">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <small>Posted by <b>{{ $post->user->name }}</b></small>
    @can('update', $post)
    <a href="{{ route('posts.edit', [$post]) }}">Edit post</a>
    @endcan
    @can('delete', $post)
    <form method="POST" action="{{ route('posts.destroy', [$post]) }}">
      @csrf
      @method('DELETE')
      <button type="submit"> Delete post</button>
    </form>
    @endcan
  </div>
</div>
@endsection
