@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Create Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <input type="text"
               name="title"
               placeholder="Post Title">

        <textarea name="content"
                  placeholder="Write something..."></textarea>

        <button class="btn btn-primary">
            Create Post
        </button>

    </form>

</div>

@endsection