<x-layout>
    {{-- <section class="bg-white dark:bg-gray-900"> --}}
        <div class="py-8 px- mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            {{-- header --}}
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-8">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Daftar Surah</h2>
            </div>
            <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
                {{-- Tombol Search --}}
                <div class="mx-auto max-w-screen-md sm:text-center">
                   <form action="{{ route('search') }}" method="GET">
                        <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                            <div class="relative w-full">
                                <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>

                                <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-green-600 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pencarian Surah" type="search" id="q" name="q" autocomplete="off">
                            </div>
                            <div>
                                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-green-700 border-green-600 sm:rounded-none sm:rounded-r-lg hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{ $surahs->links() }}
            </div>
            {{-- daftar surah --}}
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-3">
                @foreach ($surahs as $surah)
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <h3 class="grid mb-6 lg:mb-16 md:grid-cols-2 text-xl font-bold tracking-tight leading-extra-loose text-gray-900 dark:text-white">
                            <a href="{{ route('surah.show', $surah->id) }}">Surah {{ $surah->name }}</a>
                            <a href="{{ route('surah.show', $surah->id) }}" class="font-mirza text-end">{{ $surah->arabic_name }}</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">{{ $surah->total_ayah }} Ayat</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{ $surah->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $surahs->links() }}
        </div>
      {{-- </section> --}}
</x-layout>
