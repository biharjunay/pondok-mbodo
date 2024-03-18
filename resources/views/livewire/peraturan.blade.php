<div>
    <x-navbar />
    <x-header text="peraturan" />
    <div class="w-full p-5 mt-4 flex justify-center lg:grid lg:grid-cols-3 gap-5">
        <div class="flex flex-col col-span-2 justify-center items-center">
            <h1 class="text-center font-bold text-3xl mb-10">Peraturan</h1>
            <strong>Peraturan umum</strong>
            <h5 class="text-lg font-bold">Pasal 1</h5>
            <h5>Kewajiban</h5>
            <table border="1" class="border w-full text-center">
                <tr class="">
                    <th class="w-[10%] bg-blue-300">Ayat</th>
                    <th class="w-[80%] bg-emerald-500">Isi</th>
                    <th class="w-[10%] bg-blue-500">Poin</th>
                </tr>
                @for ($i = 0; $i < 42; $i++)
                <tr class="border-b-black border-b">
                        <td>{{$i}}</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae dolorum veniam quidem ad autem provident suscipit dolorem neque, delectus perspiciatis.</td>
                        <td>{{$i}}</td>
                    </tr>
                    @endfor
            </table>
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
</div>
