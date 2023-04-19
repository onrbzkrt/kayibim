<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>
