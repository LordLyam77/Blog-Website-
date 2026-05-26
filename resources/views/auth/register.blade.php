@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Register</h2>

    @if ($errors->any())
        <div class="success" style="background:#dc2626;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('register') }}">

        @csrf

        <input type="text"
               name="name"
               placeholder="Name"
               value="{{ old('name') }}"
               required>

        <input type="email"
               name="email"
               placeholder="Email"
               value="{{ old('email') }}"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <input type="password"
               name="password_confirmation"
               placeholder="Confirm Password"
               required>

        <button type="submit"
                class="btn btn-primary">
            Register
        </button>

    </form>

</div>

@endsection