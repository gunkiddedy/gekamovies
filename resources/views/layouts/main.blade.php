<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geka Movies</title>

    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles>
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6 flex-col md:flex-row">
            {{-- left items --}}
            <ul class="flex items-center flex-col md:flex-row ">
                <li>
                    <a href="{{ route('movies.index') }}">Logo SVG</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>

            {{-- right items --}}
            <div class="flex items-center flex-col md:flex-row">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0 ">
                    <a href="#">
                        <img src="/img/avatar-tele.png" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    <livewire:scripts>
</body>
</html>