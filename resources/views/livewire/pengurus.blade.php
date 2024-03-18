<div class="overflow-x-hidden">
    <x-navbar />
    <x-header text="Pengurus" />
    <div class="w-full p-5 mt-4 flex justify-center lg:grid lg:grid-cols-3">
        <div class="flex flex-col col-span-2 justify-center items-center">
            <h1 class="text-center font-bold text-3xl mb-10">Pengurus pondok mbodo</h1>

            <div class="grid col-span-2 border border-black text-center">
                <span class="p-2">Ahmad Nur Sholihin</span>
                <span class="bg-yellow-400 p-2">Direktur Pendidikan</span>
            </div>
            <div class="h-20 border border-black bg-black"></div>
            <div class="grid col-span-2 border border-black text-center">
                <span class="p-2">Vera puspitaningsih, S.pd</span>
                <span class="bg-yellow-400 p-2">KEPALA BAGIAN ADMINISTRASI</span>
            </div>
            <div class="h-20 border border-black bg-black"></div>
            <div class="w-96 border border-black hidden lg:flex"></div>
            <div class="w-96 h-20 border-l border-r border-black hidden lg:flex mx-auto"></div>
            <div class="flex justify-center lg:gap-48  flex-col lg:flex-row items-center m-auto">
                <div class="grid col-span-2 border border-black text-center ">
                    <span class="p-2">Yani Mundari, S.pd</span>
                    <span class="bg-yellow-400 p-2">KEPALA PAUD-QU AL HAWI</span>
                </div>
                <div class="h-20 border border-black bg-black lg:hidden"></div>
                <div class="grid col-span-2 border border-black text-center">
                    <span class="p-2">Ulfatul Hidayati, S.pd</span>
                    <span class="bg-yellow-400 p-2">KEPALA MI AL HAWI</span>
                </div>
            </div>
            <div class="w-96 h-20 border-l border-r border-black hidden lg:flex"></div>
            <div class="h-20 border border-black bg-black lg:hidden"></div>
            <div class="flex justify-center lg:gap-48  flex-col lg:flex-row items-center m-auto">
                <div class="grid col-span-2 border border-black text-center">
                    <span class="p-2">Eni Mafthukah, S.pd.I AH</span>
                    <span class="bg-yellow-400 p-2">KEPALA SMP ISLAM AL HAWI</span>
                </div>
                <div class="h-20 border border-black bg-black lg:hidden"></div>
                <div class="grid col-span-2 border border-black text-center">
                    <span class="p-2">Dodi Dede Widodo,S.pd</span>
                    <span class="bg-yellow-400 p-2">KEPALA MA PLUS AL HAWI</span>
                </div>
            </div>
            <div class="w-96 h-20 border-l border-r border-black hidden lg:flex"></div>
            <div class="h-20 border border-black bg-black lg:hidden"></div>
            <div class="flex justify-center lg:gap-48  flex-col lg:flex-row items-center m-auto">
                <div class="grid col-span-2 border border-black text-center">
                    <span class="p-2">Luthfi Ibnu Hajar</span>
                    <span class="bg-yellow-400 p-2">KEPALA ASRAMA PUTRA</span>
                </div>
                <div class="h-20 border border-black bg-black lg:hidden"></div>
                <div class="grid col-span-2 border border-black text-center">
                    <span class="p-2">Vera puspitaningsih, S.pd</span>
                    <span class="bg-yellow-400 p-2">KEPALA ASRAMA PUTRI</span>
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
            <input class="w-full bg-transparent rounded" type="text" placeholder="Search">
            <div class="mt-10">
                <div class="flex">
                    <span class="bg-red-500 p-1"></span>
                    <h1 class="ml-10">Di laman ini</h1>
                </div>
                <ul class="mt-5 border-t-2">
                    <li class="border-b-2 py-3"><a class="hover:text-blue-800" href="/tentang-kami/pendiri"
                            wire:navigate>Pendiri</a></li>
                    <li class="border-b-2 py-3"><a class="hover:text-blue-800" href="/tentang-kami/pengurus"
                            wire:navigate>Pengurus</a></li>
                    <li class="border-b-2 py-3"><a class="hover:text-blue-800" href="/tentang-kami/peraturan"
                            wire:navigate>Peraturan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <x-footer />
    <script>

    </script>
</div>
