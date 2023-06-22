<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
</head>
<body>


<nav class="navbar navbar-expand-md bg-light navbar-light shadow">
<div class="container">
    <a href="{{route('home.index')}}" class="navbar-brand">Blog With Category</a>
    <ul class="navbar-nav">
        <li><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
        <li class="dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog Module</a>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a href="{{route('blog.add')}}" class="dropdown-item">Add Blog</a></li>
                <li><a href="{{route('blog.manage')}}" class="dropdown-item">Manage Blog</a></li>
            </ul>
        </li>
    </ul>
</div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
