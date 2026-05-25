@extends('layouts.app')

@section('content')

@guest

<div class="card">

    <h3>Want to share your thoughts?</h3>

    <p style="margin-top:10px;">
        Login to write blogs and comments.
    </p>

    <a href="/login" class="btn btn-primary">
        Login
    </a>

</div>

@endguest

@foreach($posts as $post)

<div class="card">

    <h2>{{ $post->title }}</h2>

    <p style="margin-top:15px;">
        {{ $post->content }}
    </p>

    <small>
        Posted by User #{{ $post->user_id }}
    </small>

    @auth

        @if(Auth::id() == $post->user_id)

            <div style="margin-top:15px;">

                <a href="{{ route('posts.edit', $post) }}"
                   class="btn btn-warning">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Delete
                    </button>

                </form>

            </div>

        @endif

    @endauth

    <hr style="margin:20px 0;">

    <h3>Comments</h3>

    @forelse($post->comments as $comment)

        <div style="
            background:#f3f4f6;
            padding:12px;
            border-radius:8px;
            margin-top:10px;
        ">

            <strong>
                {{ $comment->user->name }}
            </strong>

            <p style="margin-top:5px;">
                {{ $comment->comment }}
            </p>

            @auth

                @if(Auth::id() == $comment->user_id)

                    <form action="{{ route('comments.destroy', $comment) }}"
                          method="POST"
                          style="margin-top:10px;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Delete Comment
                        </button>

                    </form>

                @endif

            @endauth

        </div>

    @empty

        <p style="margin-top:10px;">
            No comments yet.
        </p>

    @endforelse

    @auth

        <form action="{{ route('comments.store', $post) }}"
              method="POST"
              style="margin-top:20px;">

            @csrf

            <textarea name="comment"
                      placeholder="Write a comment..."
                      style="min-height:100px;"></textarea>

            <button class="btn btn-primary">
                Add Comment
            </button>

        </form>

    @else

        <p style="margin-top:15px; color:gray;">
            Login to comment.
        </p>

    @endauth

</div>

@endforeach

@endsection