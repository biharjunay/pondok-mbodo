<div class="overflow-x-hidden">
    <x-navbar />
    <x-header text="pendiri" />
    <div class="w-full flex justify-center gap-5 p-5">
        <div class="flex flex-col p-5 rounded-lg shadow-lg">
            <img src="/assets/K.H.AhmadBasyirKudus.jpg" alt="image" class="w-48 h-52 object-cover">
            <span class="text-center py-3">K.H. Ahmad Basyir Kudus</span>
            <a class="bg-emerald-600 text-center text-white py-2 rounded-lg" wire:navigate
                href="{{ route('tentang_kami.pendiri_detail', ['id' => 1]) }}">klik</a>
        </div>
        <div class="flex flex-col p-5 rounded-lg shadow-lg">
            <img src="/assets/SimbahMulyadiBinKardiRonodikromo.jpg" alt="" class="w-48 h-52 object-cover">
            <span class="text-center py-3">Simbah Mulyadi Bin Kardi R.</span>
            <a class="bg-emerald-600 text-center text-white py-2 rounded-lg" wire:navigate
                href="{{ route('tentang_kami.pendiri_detail', ['id' => 2]) }}">klik</a>
        </div>
        <div class="flex flex-col p-5 rounded-lg shadow-lg">
            <img src="/assets/GusMbodo.jpg" alt="" class="w-48 h-52 object-cover">
            <span class="text-center py-3">K.H. Muhammad Gufron M.</span>
            <a class="bg-emerald-600 text-center text-white py-2 rounded-lg" wire:navigate
                href="{{ route('tentang_kami.pendiri_detail', ['id' => 3]) }}">klik</a>
        </div>
    </div>
    <x-footer />
</div>
