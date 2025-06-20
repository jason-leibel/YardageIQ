<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YardageIQ</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<header class="navbar">
    <div class="container nav-container">
        <a href="{{ route('landing') }}" class="brand">
            <h1>YardageIQ</h1>
        </a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">&#9776;</button>
        <nav id="mainNav" class="nav-links">
            <a href="{{ route('landing') }}" class="{{ request()->routeIs('landing') ? 'active' : '' }}">Overview</a>
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
