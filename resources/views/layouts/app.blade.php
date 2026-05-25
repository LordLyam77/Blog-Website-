<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LyamNet</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        nav{
            background:#111827;
            padding:15px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        nav h1{
            color:white;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
        }

        .container{
            width:80%;
            margin:40px auto;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .btn{
            display:inline-block;
            padding:10px 15px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            text-decoration:none;
            color:white;
            margin-top:10px;
        }

        .btn-primary{
            background:#2563eb;
        }

        .btn-danger{
            background:#dc2626;
        }

        .btn-warning{
            background:#f59e0b;
        }

        input, textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        textarea{
            min-height:150px;
        }

        .success{
            background:#16a34a;
            color:white;
            padding:10px;
            border-radius:5px;
            margin-bottom:20px;
        }
    </style>
</head>
<body>

<nav>
    <h1>LyamNet</h1>

    <div>

        <a href="{{ route('posts.index') }}">
            Home
        </a>

        @auth

            <a href="{{ route('posts.create') }}">
                Create Post
            </a>

            <span style="color:white; margin-left:20px;">
                Welcome, {{ Auth::user()->name }}
            </span>

            <form action="/logout"
                  method="POST"
                  style="display:inline; margin-left:20px;">

                @csrf

                <button class="btn btn-danger">
                    Logout
                </button>

            </form>

        @else

            <span style="color:#d1d5db; margin-left:20px;">
                Login to write a blog
            </span>

            <a href="/login">
                Login
            </a>

            <a href="/register">
                Register
            </a>

        @endauth

    </div>
</nav>

<div class="container">

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>