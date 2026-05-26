@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <a href="{{ route('password.request') }}"
   style="display:block; margin-top:10px; color:#2563eb;">
    Forgot Password?
     </a>

    </form>

</div>

@endsection