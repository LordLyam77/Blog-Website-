@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Reset Password</h2>

    @if ($errors->any())
        <div class="success" style="background:#dc2626;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('password.update') }}">

        @csrf

        <input type="hidden"
               name="token"
               value="{{ $request->route('token') }}">

        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email', request()->email) }}"
               required>

        <input type="password"
               name="password"
               placeholder="New Password"
               required>

        <input type="password"
               name="password_confirmation"
               placeholder="Confirm Password"
               required>

        <button type="submit"
                class="btn btn-primary">
            Reset Password
        </button>

    </form>

</div>

@endsection