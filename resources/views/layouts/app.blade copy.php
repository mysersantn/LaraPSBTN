<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('images/tirtanadi-logo.png') }}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    {{-- <script src="../path/to/flowbite/dist/datepicker.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js"></script> --}}

    <script src="https://kit.fontawesome.com/52e3311a73.js" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
    {{-- Loading screen --}}
    {{-- <div id="loading-screen">
        <livewire:loading />
    </div> --}}

    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    {{-- Loading screen js  --}}
    <script>
        document.addEventListener('livewire:loading', function() {
            document.getElementById('loading-screen').style.display = 'block';
        });

        document.addEventListener('livewire:load', function() {
            setTimeout(function() {
                document.getElementById('loading-screen').style.display = 'none';
            }, 2000); // Ubah nilai 2000 menjadi waktu delay yang diinginkan (dalam milidetik)
        });
    </script>
</body>

</html>
