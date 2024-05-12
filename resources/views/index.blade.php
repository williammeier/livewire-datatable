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

        <div class="card shadow-sm border-0 p-4 p-xl-5 rounded-4 mt-4">
            <p class="text-secondary mb-1">Publish Pagination Command</p>
            <code class="bg-dark text-white py-2 px-3 rounded">
                php artisan livewire:publish --pagination
            </code>
        </div>
    </section>

    @livewireScripts()
</body>

</html>
