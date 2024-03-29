<div>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/alpinejs" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <meta name="description" content="{{ $description ?? 'Welcome to my portfolio' }}">
        <x-layout.favicons />
        <title>Daan Michielsen | {{ $title ?? '' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="flex flex-col space-y-4 min-h-screen text-gray-800 bg-gray-100">
        <header class="shadow bg-slate-800 text-slate-100 sticky inset-0 backdrop-blur-sm z-10">
            {{--  Navigation  --}}
            <x-layout.nav />
        </header>
        <main class="container mx-auto p-4 flex-1 px-4">
            {{-- Title --}}
            <h1 class="text-3xl mb-4 text-bold">
                {{ $title ?? 'Title here...' }}
            </h1>
            {{-- Main content --}}
            {{ $slot }}
        </main>
        <x-layout.footer />
    </div>
    @stack('script')
    </body>
    </html></div>
