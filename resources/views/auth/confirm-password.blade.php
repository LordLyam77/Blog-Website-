@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Confirm Password</h2>

    <p style="margin-top:10px;">
        Please confirm your password before continuing.
    </p>

    @if ($errors->any())
        <div class="success" style="background:#dc2626;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST"
          action="{{ route('password.confirm') }}">

        @csrf

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit"
                class="btn btn-primary">
            Confirm Password
        </button>

    </form>

</div>

@endsection