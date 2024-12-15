<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article class="mx-auto w-full max-w-6xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <a href="/surah_daftar" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">&laquo; Kembali ke Daftar Surat</a>
                        {{-- <hr class="h-px my-5 bg-gray-400 border-0 dark:bg-gray-200"> --}}
                        <div class="flex items-center my-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Surah {{ $surah->name }} ({{ $surah->description }})</h1>
                            </div>
                        </div>
                    </header>

                    @foreach ($ayahs as $ayah)
                        {{-- Judul Surah --}}
                        <div>
                            <div class="my-5">
                                <div class="text-end my-12 px-6">
                                    <p class="text-4xl text-gray-900 dark:text-white font-amiri tracking-wide leading-extra-loose">{{ $ayah->arabic_text }} ({{ $ayah->ayah_number }})</p>
                                </div>
                                <div class="px-6 text-justify text-lg">
                                    <p class="italic font-bold text-green-600 dark:text-green-400 ">{{ $ayah->latin_text }}</p>
                                    <h3 class="font-bold my-2">Terjemahan:</h3>
                                    <p class="text-gray-900 dark:text-white">"{{ $ayah->translation_id }}"</p>
                                    <h3 class="font-bold my-2">Translate:</h3>
                                    <p class="text-gray-900 dark:text-white ">"{{ $ayah->translation_en }}"</p>
                                </div>
                            </div>
                            {{-- Tombol untuk pindah ke perbedaan qiraat --}}
                            <div class="my-7">
                                <p class="fs-4">{{ $ayah->text }}</p>
                                {{-- @if($ayah->qiraats->isNotEmpty()) --}}
                                <a href="{{ route('ayah.qiraat', ['ayah' => $ayah->id]) }}" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Lihat Perbandingan Qiraat</a>
                                {{-- @else --}}
                                {{-- <p>Ayat ini Tidak Memiliki Perbedaan</p> --}}
                                {{-- @endif --}}
                            </div>
                            <hr class="h-px my-5 bg-gray-400 border-0 dark:bg-gray-200">
                        </div>
                    @endforeach
                    {{-- <p>{{ $post->body }}</p> --}}
                    <a href="/surah_daftar" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">&laquo; Kembali ke Daftar Surat</a>
                </article>
            </div>
        </main>

</x-layout>
