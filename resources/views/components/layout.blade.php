<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset("css/tailwindcsssv4.0.7.css") }}" />
    @endif
</head>
<body class="bg-[#060606] text-white">
    <div class="px-10">
        <nav class="flex justify-between item-center py-4 border-b border-white/10">
            <div>
                <a href="http://">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Position">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Carriers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                Post a Job
            </div>
        </nav>        
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>