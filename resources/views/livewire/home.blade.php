<div class="relative dark:text-white text-black flex flex-col overflow-x-hidden">
    <x-navbar/>
    <div class="w-full h-[30rem]">
        <section class="relative h-full w-full bg-center bg-cover text-white flex flex-col justify-center items-center"
            style="background-image: url('/assets/santri.jpg')">
            <div class="w-full h-full bg-black opacity-50"></div>
            <div class="absolute">
                <h1 class="text-xl md:text-5xl text-center font-extrabold font-roboto-sans-bold" id="test">SUGENG
                    RAWUH</h1>
                <p class="text-center">website pondok mbodo created by <strong
                        class="text-yellow-300">lyrihkaesa</strong></p>
            </div>
        </section>
    </div>
    <div class="w-[95%] mx-auto -mt-10 z-10">
        <div
            class="grid grid-cols-2 md:grid-cols-4 w-full bg-white border border-zinc-200 h-[15rem] text-black dark:bg-slate-900 dark:text-white">
            @for ($i = 0; $i < 4; $i++)
                <div class="min-h-fit flex justify-center gap-5 items-center px-5">
                    <i class="hover:text-emerald-950 hover:bg-white fa-solid fa-school sm:text-5xl"></i>
                    <span>
                        <h1 class="font-extrabold">School Life</h1>
                        <p>Lorem, ipsum dolor.</p>
                    </span>
                </div>
            @endfor
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 ">
            <div class="h-full">
                <img src="/assets/santricowo.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="relative min-h-[25rem]" style="background-image: url('/assets/pesantren.jpg')">
                <div class="bg-cyan-950 w-full h-full z-10 opacity-50"></div>
                <div class="absolute w-full h-full top-0 p-10 lg:p-20 text-white flex flex-col gap-3 items-start">
                    <h1 class="font-roboto-sans-bold text-3xl">Pondok Mbodo</h1>
                    <b>Sejak 2003</b>
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quis provident nam
                        minima, nesciunt soluta velit facilis maxime! Exercitationem libero facilis, corporis voluptatem
                        sequi sunt officiis nisi corrupti veniam adipisci repellendus sed deserunt illum dolorum sit,
                        vitae nesciunt dignissimos.</p>
                    <button class="bg-teal-600 active:bg-teal-300 rounded py-2 px-5">More</button>
                </div>
            </div>
        </div>
        <div class="bg-teal-950 flex flex-col pb-20">
            <h1 class="text-center pt-10 text-2xl font-extrabold text-white ">Tujuan dan cita - cita pondok</h1>
            <p class="text-white text-xs text-center self-center w-[15rem] md:w-[30rem]">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Ullam quod facere culpa delectus perferendis, velit nemo sed repellendus
                nesciunt at consequatur distinctio corrupti ut modi.</p>
            <div class="mt-16 w-full flex flex-col md:flex-row justify-center">
                @for ($i = 0; $i < 3; $i++)
                    <span class="flex flex-col text-center text-white items-center">
                        <img src="/assets/santri-2.png" alt="" class="w-[50%] md:w-full">
                        <span>Lorem ipsum dolor sit.</span>
                    </span>
                @endfor
            </div>
        </div>
    </div>
    <h1 class="text-center mt-10 text-3xl font-extrabold font-roboto-sans-bold">Berita Terbaru</h1>
    <p class="text-blue-700 text-center font-semibold mt-2">berita seputar pondok mbodo</p>
    <div class="w-[90%] md:w-[90%] mx-auto grid grid-cols-1 lg:grid-cols-2">
        @for ($i = 0; $i < 4; $i++)
            <div class="w-full flex flex-col md:flex-row mt-5">
                <img src="/assets/pesantren.jpg" alt="image" class="w-full md:w-48 aspect-video md:aspect-[8/9] object-cover">
                <div class="w-full p-5 ">
                    <h1 class="font-extrabold">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                    <p class="font-extralight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
                        consectetur corrupti et cupiditate! Commodi harum veniam architecto, quisquam expedita aliquid.
                    </p>
                    <span class="float-right underline hover:no-underline cursor-pointer">Read more</span>
                </div>
            </div>
        @endfor
    </div>
    <div class="w-[90%] self-center">
        <h1 class="text-center mt-10 text-3xl font-extrabold font-roboto-sans-bold my-5">Lokasi</h1>
        <div style="width: 100%;" class="flex flex-col md:flex-row justify-between mb-14">
            <div class="w-full md:w-[30%] md:h-[400px] align-bottom">
                <h2 class="text-xl font-bold">Alamat Pondok</h2>
                <p class="my-5">Dsn Sendangsari RT 05 RW 07 Desa Tambirejo, Kecamatan Toroh, Kabupaten Grobogan</p>
            </div>
            <iframe class="w-full md:w-[60%] h-[400px]" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=625&amp;height=390&amp;hl=en&amp;q=jln%20tombo%20ati,%20Sendangsari,%20Tambirejo,%20Kec.%20Toroh,%20Kabupaten%20Grobogan,%20Jawa%20Tengah%2058171%20Grobogan+(Pondok%20Mbodo)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/population/">Population Estimator map</a>
            </iframe>
            {{-- <iframe width="625" height="390" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=625&amp;height=390&amp;hl=en&amp;q=jln%20tombo%20ati,%20Sendangsari,%20Tambirejo,%20Kec.%20Toroh,%20Kabupaten%20Grobogan,%20Jawa%20Tengah%2058171%20Grobogan+(Pondok%20Mbodo)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.versicherungen.at/cyber-versicherung/'>Cyberversicherungen</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=8941c49829e74649b113924c51d692efafc4ec8a'></script> --}}
        </div>
    </div>
    <x-footer/>
</div>
