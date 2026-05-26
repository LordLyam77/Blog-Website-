@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Reset Password</h2>

    <form method="POST"
          action="{{ route('password.update') }}">

        @csrf

        <input type="hidden"
               name="token"
               value="{{ $request->route('token') }}">

        <input type="email"
               name="email"
               placeholder="Email"
               required>

        <input type="password"
               name="password"
               placeholder="New Password"
               required>

        <input type="password"
               name="password_confirmation"
               placeholder="Confirm Password"
               required>

        <button class="btn btn-primary">
            Reset Password
        </button>

    </form>

</div>

@endsection