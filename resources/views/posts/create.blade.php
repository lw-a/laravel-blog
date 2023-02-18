@extends('layout')

@section('title', 'Blog - Create a Post')

@section('content')
<h1>Create A Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
  @csrf

  <label>Title</label>
  <input type="text" value="{{ old('title') }}" name='title' class="@error('title') error-border @enderror">
  @error('title')
  <div class="error">
    {{ $message }}
  </div>
  @enderror

  <label>Description</label>
  <textarea name="description" class="@error('description') error-border @enderror">{{ old('description') }}</textarea>
  @error('description')
  <div class="error">
    {{ $message }}
  </div>
  @enderror

  <button type="submit">Submit</button>
</form>
@endsection
