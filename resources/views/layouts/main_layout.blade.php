<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('components.head')
</head>
<body style="height: 100vh;">
    <header>
        <nav class="navbar navbar-primary bg-primary">
        <!-- Navbar content -->
            <a class="nav-link fs-4" href="">LINE HxH dialogue BOT</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
