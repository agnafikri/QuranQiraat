<x-layout>
    {{-- <h1>Hasil Pencarian untuk: "{{ request('searchTerm') }}"</h1> --}}
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

                     <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-green-600 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Pencarian Surah/Ayat/Qiraat" type="search" id="q" name="q" autocomplete="off">
                 </div>
                 <div>
                     <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-green-700 border-green-600 sm:rounded-none sm:rounded-r-lg hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Cari</button>
                 </div>
             </div>
         </form>
     </div>

    <div class="container my-4">
        <a href="/surah_daftar" class="rounded-md bg-green-600 px-3.5 py-2.5 my-5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">&laquo; Kembali ke Daftar Surat</a>
        <h1 class="font-bold text-3xl my-5">Hasil Pencarian untuk: "{{ $query }}"</h1>

        @if($surahs->count())
            <!-- Hasil Pencarian Surah -->
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-3">
                @foreach($surahs as $surah)
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <h3 class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="{{ route('surah.show', $surah->id) }}"> Surah {{ $surah->name }}</a>
                            <a href="{{ route('surah.show', $surah->id) }}" class="font-mirza">{{ $surah->arabic_name }}</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">{{ $surah->total_ayah }} Ayat</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{ $surah->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        @elseif($ayahs->count())
            <!-- Hasil Pencarian Ayat -->
            <hr class="h-px my-5 bg-gray-400 border-0 dark:bg-gray-200">
            <div class="my-5">
                @foreach($ayahs as $ayah)
                <a href="{{ route('surah.show', $ayah->surah->id) }}" class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                   <h3>Surah {{ $ayah->surah->name }} - Ayat {{ $ayah->ayah_number }}:</h3>
                </a>
                <div class="text-end my-12 px-6">
                    <a href="{{ route('surah.show', $ayah->surah->id) }}" class="text-4xl text-gray-900 dark:text-white font-amiri tracking-wide leading-extra-loose">{{ $ayah->arabic_text }}</a>
                </div>
                <div class="px-6 my-4 text-justify text-lg">
                    <h3 class="font-bold my-2">Terjemahan:</h3>
                    <a href="{{ route('surah.show', $ayah->surah->id) }}" class="text-gray-900 dark:text-white">"{{ $ayah->translation_id }}"</a>
                </div>
                <hr class="h-px my-5 bg-gray-400 border-0 dark:bg-gray-200">
                @endforeach
            </div>
            @elseif($qiraats->count())
            <!-- Hasil Pencarian Qiraat -->
            <hr class="h-px my-5 bg-gray-400 border-0 dark:bg-gray-200">
            <div class="">
                @foreach($qiraats as $qiraat)
                <div class="my-5">
                    <a href="{{ route('ayah.qiraat', ['ayah' => $qiraat->ayah_id]) }}">
                        <h2 class="font-bold lg:text-xl md:text-2xl sm:text-2xl">Imam {{ $qiraat->qiraat_name }} Riwayat Imam {{ $qiraat->riwayah }}</h2>
                    </a>
                    <a href="{{ route('surah.show', $qiraat->ayah->surah->id) }}">
                        <h3 class="font-semibold mb-3 lg:text-xl md:text-2xl sm:text-2xl text-green-500">Surah {{ $qiraat->ayah->surah->name}} Ayat {{ $qiraat->ayah->ayah_number }}</h3>
                    </a>
                    <p class="text-4xl text-end text-gray-900 dark:text-white font-amiri tracking-wide leading-extra-loose">{{ $qiraat->qiraat_ayah }}</p>
                </div>
                <hr class="h-px my-4 bg-gray-400 border-0 dark:bg-gray-200">
                @endforeach
            </div>
        @else
            <p>Tidak ada hasil ditemukan.</p>
        @endif
    </div>
</x-layout>
