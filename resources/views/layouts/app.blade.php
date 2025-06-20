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
        <a href="/">
            <h1>YardageIQ</h1>
        </a>
        <nav>
            <a href="{{ route('dashboard', ['group' => 'Pro']) }}" class="{{ request('group') === 'Pro' ? 'active' : '' }}">Pro</a>
            <a href="{{ route('dashboard', ['group' => 'Amateur']) }}" class="{{ request('group') === 'Amateur' ? 'active' : '' }}">Amateur</a>
            <a href="{{ route('dashboard', ['group' => 'Recreational']) }}" class="{{ request('group') === 'Recreational' ? 'active' : '' }}">Recreational</a>
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
