<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YardageIQ</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<header>
    <div class="container">
        <h1>YardageIQ</h1>
        <nav>
            <a href="/">Home</a>
        </nav>
    </div>
</header>

<main class="main-content">
    <div class="container">
        <div class="content-box">
            @yield('content')
        </div>
    </div>
</main>

<footer class="site-footer">
    © {{ date('Y') }} YardageIQ. All rights reserved.
</footer>

</body>
</html>
