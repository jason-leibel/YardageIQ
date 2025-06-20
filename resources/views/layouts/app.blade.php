<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YardageIQ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans p-6">
<div class="max-w-4xl mx-auto">
    @yield('content')
</div>
</body>
</html>
