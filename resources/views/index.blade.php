<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Datatable</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @livewireStyles()
</head>

<body class="bg-light">

    <section class="container py-5">
        <div class="card shadow-sm border-0 p-4 p-xl-5 rounded-4">
            @livewire('user-list')
        </div>
    </section>

    @livewireScripts()
</body>

</html>
