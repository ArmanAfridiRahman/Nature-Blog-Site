<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand mt-3">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand secondary-color hover"><i class="fa fa-tree"></i> Nursery</a>
            <ul class="navbar-nav">
                @if(empty(Auth::user()->id))
                <li><a href="{{route('home')}}" class="nav-link menu-hover rounded-2 mx-2 px-2 grow-2">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link menu-hover rounded-2 mx-2 px-2 grow-2">About</a></li>
                    <li><a href="{{route('login')}}" class="ms-5 nav-link bg-secondary-color rounded-2 mx-2 px-2 grow-2 px-4 text-white">Login</a></li>
                @else
                <li><a href="{{route('add-blog')}}" class="nav-link menu-hover rounded-2 mx-2 px-2 grow-2">Add blog</a></li>
                <li><a href="{{route('manage-blog')}}" class="nav-link menu-hover rounded-2 mx-2 px-2 grow-2 me-5">Manage Blog</a></li>
                <li><a href="{{route('add-slider')}}" class="nav-link menu-hover rounded-2 mx-2 px-2 grow-2 me-5">Add Slider</a></li>
                <li class="dropdown dropdown-hover">
                    <a href="" data-bs-toggle="dropdown" class="dropdown-toggle nav-link bg-secondary-color rounded-2 grow-2 px-4 text-white">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="" onclick="event.preventDefault(); document.getElementById('formLogout').submit()" class="dropdown-item text-capitalize">logout</a></li>
                        <li><a href="{{route('dashboard')}}" class="dropdown-item text-capitalize">dashboard</a></li>
                        <form action="{{route('logout')}}" id='formLogout' method="POST">
                            @csrf
                        </form>
                    </ul>
                </li>

                @endif
            </ul>
        </div>

    </nav>
    @yield('body')
<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>
