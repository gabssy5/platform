<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Layout Dengan Blade Template Laravel</h1>
    <header>
        @include('layout.header')
    </header>

    <ul>
        @section('sidebar')
            <li>React</li>
            <li>Next JS</li>
            <li>Laravel</li>
        @show
    </ul>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
