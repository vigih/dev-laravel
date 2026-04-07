<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', 'Welcome')</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div id="app" class="min-h-screen flex flex-col">

        <main class="flex-grow container mx-auto px-4 py-8">
            @yield('content')
        </main>

    </div>

    @stack('scripts')
</body>
</html>
