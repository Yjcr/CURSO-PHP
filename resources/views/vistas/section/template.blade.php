<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto godsisimo</title>
</head>
<style>
    nav{
        background: darkkhaki;
        position: sticky;
        top: 0;
        border-radius: 10px;
        border-bottom: 1px solid green;
        display: flex;
        /* justify-content: space-between; */
    }
    nav ul{
        display: flex;
        list-style: none;
    }
    nav ul li{
        margin-right: 5px;
        text-decoration: none;
    }
    nav ul li a{
        text-decoration: none;
        color:green;
    }
</style>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">home</a>
            </li>
        </ul>
        
        <ul>
            <li>
                <a href="{{ route('blog') }}">blog</a>
            </li>
        </ul>

        <ul>
            <!-- esta directiva permite verificar si el usurio ha iniciado sesion -->
            @auth
            <li>
                <a href="{{ route('dashoard') }}">dashboard</a>    
            </li>
            @else
            <li>
                <a href="{{ route('login') }}">login</a>
            </li>
            @endauth
        </ul>
    </nav>

</body>
</html>
@yield('content')