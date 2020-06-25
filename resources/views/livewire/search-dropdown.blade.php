<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="text-sm bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" ><path fill="#fff" d="M108.9,108.9L108.9,108.9c-2.3,2.3-6.1,2.3-8.5,0L87.7,96.2c-2.3-2.3-2.3-6.1,0-8.5l0,0c2.3-2.3,6.1-2.3,8.5,0l12.7,12.7C111.2,102.8,111.2,106.6,108.9,108.9z"/><path fill="#fff" d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z" transform="rotate(-45.001 52.337 52.338)"/><path fill="#fff" d="M52.3 17.299999999999997A35 35 0 1 0 52.3 87.3A35 35 0 1 0 52.3 17.299999999999997Z" transform="rotate(-45.001 52.337 52.338)"/><path fill="#adf9d2" d="M52.3 84.3c-1.7 0-3-1.3-3-3s1.3-3 3-3c6.9 0 13.5-2.7 18.4-7.6 6.4-6.4 9-15.5 6.9-24.4-.4-1.6.6-3.2 2.2-3.6 1.6-.4 3.2.6 3.6 2.2C86 55.8 82.9 67.1 75 75 68.9 81 60.9 84.3 52.3 84.3zM72.9 35c-.8 0-1.5-.3-2.1-.9L70.8 34c-1.2-1.2-1.2-3.1 0-4.3 1.2-1.2 3-1.2 4.2 0l.1.1c1.2 1.2 1.2 3.1 0 4.3C74.5 34.7 73.7 35 72.9 35z"/><path fill="#444b54" d="M52.3 90.3c-9.7 0-19.5-3.7-26.9-11.1-14.8-14.8-14.8-38.9 0-53.7 14.8-14.8 38.9-14.8 53.7 0 0 0 0 0 0 0C94 40.3 94 64.4 79.2 79.2 71.8 86.6 62.1 90.3 52.3 90.3zM52.3 20.4c-8.2 0-16.4 3.1-22.6 9.4-12.5 12.5-12.5 32.8 0 45.3C42.2 87.4 62.5 87.4 75 75c12.5-12.5 12.5-32.8 0-45.3C68.7 23.5 60.5 20.4 52.3 20.4zM111 98.3L98.3 85.6c-1.7-1.7-4-2.6-6.4-2.6-1.4 0-2.7.3-3.9.9l-2.5-2.5c-1.2-1.2-3.1-1.2-4.2 0-1.2 1.2-1.2 3.1 0 4.2l2.5 2.5c-1.6 3.3-1 7.5 1.7 10.2L98.3 111c1.8 1.8 4.1 2.6 6.4 2.6s4.6-.9 6.4-2.6c0 0 0 0 0 0 1.7-1.7 2.6-4 2.6-6.4C113.7 102.3 112.7 100 111 98.3zM106.8 106.8C106.8 106.8 106.8 106.8 106.8 106.8c-1.2 1.2-3.1 1.2-4.2 0L89.8 94.1c-1.2-1.2-1.2-3.1 0-4.2 0 0 0 0 0 0 0 0 0 0 0 0 .6-.6 1.3-.9 2.1-.9.8 0 1.6.3 2.1.9l12.7 12.7c.6.6.9 1.3.9 2.1S107.4 106.2 106.8 106.8z"/></svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) > 2)
        <div class="absolute text-sm bg-gray-800 rounded w-64 mt-4">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">                                    
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span> 
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="py-3 px-3">
                    Tidak ada hasil untuk "{{ $search }}"
                </div>
            @endif
        </div>
    @endif
</div>
