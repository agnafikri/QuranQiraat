<x-layout>
    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Perbandingan Qiraat untuk Surah {{ $ayah->surah->name }} Ayat {{ $ayah->ayah_number }}</h1>

    {{-- <audio controls class="my-9 rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
        <source src="{{ asset('audio/test1.mp3') }}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio> --}}
    <ul>
        @foreach ($qiraat as $qiraat)
            <div class="mb-4">
                <h3 class="mb-4 text-md font-bold leading-tight text-gray-900 lg:mb-6 lg:text-xl md:text-xl sm:text-2xl dark:text-white"><strong>Imam: </strong> {{ $qiraat->qiraat_name }} | <strong>Riwayat: </strong> {{ $qiraat->riwayah }} </h3>
                <p class="font-amiri text-3xl text-end">{{ $qiraat->qiraat_ayah }}</p>
                <p class="text-justify my-8 lg:text-xl md:text-xl sm:text-2xl"><strong>Penjelasan Perbedaan Qiraat: </strong>{{ $qiraat->penjelasan }}</p>

                @if ($qiraat->audio_path)
                    <audio controls class="my-9 rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm">
                        <source src="{{ asset('audio/' . $qiraat->audio_path) }}" type="audio/mp3">
                        Your browser does not support the audio element.
                    </audio>
                @else
                    <p><em>Audio tidak tersedia.</em></p>
                @endif

                <hr class="h-px my-5 bg-gray-900 border-0 dark:bg-gray-600">
            </div>
        @endforeach
    </ul>

    <script>
        function checkAyat(ayah_id){
            let ayahExists = false;

            if(!ayahExists) {
                alert("Ayat Ini Tidak Ada Perbedaan");
            }
        }
    </script>

    <a href="{{ route('surah.show', $ayah->surah->id) }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Kembali</a>
</x-layout>
