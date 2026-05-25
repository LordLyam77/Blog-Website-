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
    background:#f3f4f6;
}

/* NAVBAR */

nav{
    background:#111827;
    padding:15px 20px;
}

.nav-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.nav-top h1{
    color:white;
    font-size:24px;
}

.menu-toggle{
    display:none;
    background:none;
    border:none;
    color:white;
    font-size:28px;
    cursor:pointer;
}

.nav-links{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:10px;
}

.nav-links a{
    color:white;
    text-decoration:none;
    font-size:15px;
}

/* CONTAINER */

.container{
    width:90%;
    max-width:900px;
    margin:30px auto;
}

/* CARD */

.card{
    background:white;
    padding:20px;
    border-radius:12px;
    margin-bottom:20px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
    overflow-wrap:break-word;
}

.card h2{
    font-size:28px;
    color:#111827;
}

.card p{
    line-height:1.6;
    color:#374151;
}

/* BUTTONS */

.btn{
    display:inline-block;
    padding:10px 16px;
    border:none;
    border-radius:8px;
    cursor:pointer;
    text-decoration:none;
    color:white;
    margin-top:10px;
    font-size:14px;
    transition:0.2s;
}

.btn:hover{
    opacity:0.9;
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

/* FORMS */

input,
textarea{
    width:100%;
    padding:14px;
    margin-top:12px;
    border:1px solid #d1d5db;
    border-radius:8px;
    font-size:15px;
}

textarea{
    min-height:150px;
    resize:vertical;
}

/* SUCCESS */

.success{
    background:#16a34a;
    color:white;
    padding:12px;
    border-radius:8px;
    margin-bottom:20px;
}

/* COMMENTS */

.comment-box{
    background:#f9fafb;
    padding:14px;
    border-radius:10px;
    margin-top:12px;
    border:1px solid #e5e7eb;
}

/* MOBILE */

@media(max-width:768px){

    .menu-toggle{
        display:block;
    }

    .nav-links{
        display:none;
        flex-direction:column;
        align-items:flex-start;
        width:100%;
        margin-top:15px;
    }

    .nav-links.active{
        display:flex;
    }

    .nav-links a,
    .nav-links span,
    .nav-links form{
        width:100%;
    }

    .btn{
        width:100%;
        text-align:center;
    }

    .container{
        width:95%;
    }

    .card{
        padding:16px;
    }

    .card h2{
        font-size:22px;
    }
}

</style>
</head>

<script>

function toggleMenu() {

    const nav = document.getElementById('navLinks');

    nav.classList.toggle('active');
}

</script>

<body>

<nav>

    <div class="nav-top">

        <h1>LyamNet</h1>

        <button class="menu-toggle" onclick="toggleMenu()">
            ☰
        </button>

    </div>

    <div class="nav-links" id="navLinks">

        <a href="{{ route('posts.index') }}">
            Home
        </a>

        @auth

            <a href="{{ route('posts.create') }}">
                Create Post
            </a>

            <span style="color:white;">
                {{ Auth::user()->name }}
            </span>

            <form action="/logout"
                  method="POST">

                @csrf

                <button class="btn btn-danger">
                    Logout
                </button>

            </form>

        @else

            <span style="color:#d1d5db;">
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