<a href="{{ route('tentang_kami.'.$name) }}" wire:navigate
    class="w-96 h-36 rounded-lg m-5 bg-cover bg-center relative hover:shadow-2xl transition-all hover:shadow-emerald-950 hover:scale-105"
    style="background-image: url('/assets/pesantren-tua.jpg')">
    <div class="w-full h-full bg-black opacity-70 rounded-lg"></div>
    <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 uppercase">
        <span class="text-white font-bold">{{$name}}</span>
        <i class="fas fa-angle-right text-white"></i>
    </button>
</a>
