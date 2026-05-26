@extends('layouts.app')

@section('content')

<div class="card">

    <h2>Verify Email</h2>

    <p style="margin-top:10px;">
        Please verify your email address by clicking the link we emailed to you.
    </p>

    <form method="POST"
          action="{{ route('verification.send') }}">

        @csrf

        <button class="btn btn-primary">
            Resend Verification Email
        </button>

    </form>

</div>

@endsection