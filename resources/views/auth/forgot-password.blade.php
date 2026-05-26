@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Forgot Password</h2>

    <p style="margin-top:10px;">
        Enter your email to receive a password reset link.
    </p>

    <form method="POST"
          action="{{ route('password.email') }}">

        @csrf

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <button type="submit"
                class="btn btn-primary">
            Send Reset Link
        </button>

    </form>

</div>

@endsection