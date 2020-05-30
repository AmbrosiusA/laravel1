<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="d-flex flex-column h-screen justify-content-between" id="app">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-white text-black-50 text-center py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>