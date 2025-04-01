<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Book List</title>
</head>
<body class="bg-gray-100">
    @include('layouts.header')
    <main class="p-4">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>
</html>