<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-stone-50 text-slate-900 antialiased">
    <div class="flex min-h-screen flex-col">
        @include('partials.header')

        <main id="main-content" class="mx-auto w-full max-w-6xl flex-1 px-5 py-12 md:py-16">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>
</html>