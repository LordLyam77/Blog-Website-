@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Login</h2>

    @if ($errors->any())
        <div class="success" style="background:#dc2626;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email') }}"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <a href="{{ route('password.request') }}"
           style="display:block;margin-top:10px;color:#2563eb;text-decoration:none;">
            Forgot Password?
        </a>

        <button type="submit"
                class="btn btn-primary">
            Login
        </button>

    </form>

</div>

@endsection