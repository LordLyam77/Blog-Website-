@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Verify Email</h2>

    <p style="margin-top:10px;">
        Please verify your email by clicking the link we sent.
    </p>

    @if (session('status') == 'verification-link-sent')

        <div class="success">
            Verification link sent successfully.
        </div>

    @endif

    <form method="POST"
          action="{{ route('verification.send') }}">

        @csrf

        <button type="submit"
                class="btn btn-primary">
            Resend Verification Email
        </button>

    </form>

</div>

@endsection