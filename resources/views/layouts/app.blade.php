<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
