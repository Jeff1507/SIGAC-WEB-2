<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50">
    <nav class="bg-gray-800">
        <div class="container mx-auto px-8 py-4 text-gray-50">
            <a href="#" class="font-bold text-2xl tracking-tight leading-none whitespace-nowrap flex items-center">
                SIGAC
            </a>
        </div>
    </nav>
    <div class="container mx-auto px-8 py-8">
        @yield('content')
    </div>
</body>
</html>