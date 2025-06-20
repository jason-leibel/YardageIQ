<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YardageIQ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-softblue text-slate font-sans min-h-screen">

<header class="bg-primary text-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-wide">YardageIQ</h1>
        <nav>
            <a href="/" class="text-white hover:underline">Home</a>
        </nav>
    </div>
</header>

<main class="py-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow">
            @yield('content')
        </div>
    </div>
</main>

<footer class="text-sm text-center text-gray-500 py-6">
    © {{ date('Y') }} YardageIQ. All rights reserved.
</footer>

</body>
</html>
