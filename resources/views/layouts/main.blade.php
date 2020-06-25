<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geka Movies</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6 flex-col md:flex-row">
            {{-- left items --}}
            <ul class="flex items-center flex-col md:flex-row ">
                <li>
                    <a href="">Logo SVG</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
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
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="text-sm bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-5 text-gray-500 mt-2 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" ><path fill="#fff" d="M108.9,108.9L108.9,108.9c-2.3,2.3-6.1,2.3-8.5,0L87.7,96.2c-2.3-2.3-2.3-6.1,0-8.5l0,0c2.3-2.3,6.1-2.3,8.5,0l12.7,12.7C111.2,102.8,111.2,106.6,108.9,108.9z"/><path fill="#fff" d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z" transform="rotate(-45.001 52.337 52.338)"/><path fill="#fff" d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z" transform="rotate(-45.001 52.337 52.338)"/><path fill="#adf9d2" d="M52.3 84.3c-1.7 0-3-1.3-3-3s1.3-3 3-3c6.9 0 13.5-2.7 18.4-7.6 6.4-6.4 9-15.5 6.9-24.4-.4-1.6.6-3.2 2.2-3.6 1.6-.4 3.2.6 3.6 2.2C86 55.8 82.9 67.1 75 75 68.9 81 60.9 84.3 52.3 84.3zM72.9 35c-.8 0-1.5-.3-2.1-.9L70.8 34c-1.2-1.2-1.2-3.1 0-4.3 1.2-1.2 3-1.2 4.2 0l.1.1c1.2 1.2 1.2 3.1 0 4.3C74.5 34.7 73.7 35 72.9 35z"/><path fill="#444b54" d="M52.3 90.3c-9.7 0-19.5-3.7-26.9-11.1-14.8-14.8-14.8-38.9 0-53.7 14.8-14.8 38.9-14.8 53.7 0 0 0 0 0 0 0C94 40.3 94 64.4 79.2 79.2 71.8 86.6 62.1 90.3 52.3 90.3zM52.3 20.4c-8.2 0-16.4 3.1-22.6 9.4-12.5 12.5-12.5 32.8 0 45.3C42.2 87.4 62.5 87.4 75 75c12.5-12.5 12.5-32.8 0-45.3C68.7 23.5 60.5 20.4 52.3 20.4zM111 98.3L98.3 85.6c-1.7-1.7-4-2.6-6.4-2.6-1.4 0-2.7.3-3.9.9l-2.5-2.5c-1.2-1.2-3.1-1.2-4.2 0-1.2 1.2-1.2 3.1 0 4.2l2.5 2.5c-1.6 3.3-1 7.5 1.7 10.2L98.3 111c1.8 1.8 4.1 2.6 6.4 2.6s4.6-.9 6.4-2.6c0 0 0 0 0 0 1.7-1.7 2.6-4 2.6-6.4C113.7 102.3 112.7 100 111 98.3zM106.8 106.8C106.8 106.8 106.8 106.8 106.8 106.8c-1.2 1.2-3.1 1.2-4.2 0L89.8 94.1c-1.2-1.2-1.2-3.1 0-4.2 0 0 0 0 0 0 0 0 0 0 0 0 .6-.6 1.3-.9 2.1-.9.8 0 1.6.3 2.1.9l12.7 12.7c.6.6.9 1.3.9 2.1S107.4 106.2 106.8 106.8z"/></svg>
                    </div>
                </div>

                <div class="md:ml-4 mt-3 md:mt-0 ">
                    <a href="#">
                        <img src="/img/avatar-tele.png" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    
</body>
</html>