<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- SEO -->
    @stack('seo')

    <!-- CRITICAL: Prevents flash on page load - inline minimal script -->
    <script>
        (() => {
            const m = matchMedia('(prefers-color-scheme: dark)');
            const t = localStorage.theme || 'system';
            const cls = t === 'system' ? (m.matches ? 'dark' : 'light') : t;
            document.documentElement.className = cls;
            document.documentElement.dataset.theme = cls;
        })();
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Head -->
    @stack('head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Extra styles -->
    @stack('styles')
</head>

<body class="font-geist antialiased bg-(--background) text-neutral-800 dark:text-(--accent-foreground)">
    <!-- Page Content -->
    <div class="min-h-screen">{{ $slot }}</div>

    <!-- Extra scripts -->
    @stack('scripts')
</body>

</html>
