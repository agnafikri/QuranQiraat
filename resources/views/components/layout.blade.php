<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Mirza:wght@400;500;600;700&family=Scheherazade+New:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="style.css"> --}}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Quran Qiraat</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        {{-- <x-header>{{ $title }}</x-header> --}}
        <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
        </main>
    </div>

</body>
</html>
