<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <h2>Hello This is MyController Page</h2>

       <a href="{{route('home')}}">HOME</a>
       <a href="{{route('posts')}}">POSTS</a>
       <a href="{{route('about')}}">ABOUT</a>
       <a href="{{route('contact')}}">CONTACT</a>

    </nav>

    @yield('content')
</body>
</html>
