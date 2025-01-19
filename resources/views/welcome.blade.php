<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            form {
                display: grid;
                justify-items: start;
            }

            form button {
                margin-top: 1em;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container div {
                padding: 0.5em 1em;
            }
        </style>
    @endif
</head>

<body>
    <div class="container">

        {{-- POST, UPDATE, DELETE --}}

        @include('pets.addPet')
        @include('pets.updatePet')
        @include('pets.deletePet')
    </div>

</body>

</html>
