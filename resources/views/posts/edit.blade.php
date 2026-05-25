@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}"
          method="POST">

        @csrf
        @method('PUT')

        <input type="text"
               name="title"
               value="{{ $post->title }}">

        <textarea name="content">{{ $post->content }}</textarea>

        <button class="btn btn-primary">
            Update Post
        </button>

    </form>

</div>

@endsection