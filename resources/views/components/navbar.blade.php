<nav class="bg-green-900" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
            <div class="shrink-0">
                <svg class="w-6 h-6 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                </svg>
            {{-- <img class="size-8" src="img/quran.png" alt="Quran Qiraat"> --}}
            </div>
            <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
                <x-nav-link href="/surah_daftar" :active="request()->is('surah_daftar')">Daftar Surah</x-nav-link>
                {{-- <x-nav-link href="{{ route('ayah.qiraat', $ayah->id, 'qiraat') }}" :active="request()->is('perbandingan_qiraah')">Qiraah</x-nav-link> --}}
            </div>
            </div>
            {{-- <form action="{{ route('search') }}" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" name="q" placeholder="Cari..." aria-label="Search" required>
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form> --}}

        </div>
        <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-green-800 p-2 text-gray-400 hover:bg-green-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-1 pb-3 pt-2 sm:px-3 bg-green-600">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
        <x-nav-link href="/surah_daftar" :active="request()->is('surah_daftar')">Daftar Surah</x-nav-link>
        </div>
    </div>
    </nav>
