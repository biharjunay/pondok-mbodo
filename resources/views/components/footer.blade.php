<div class="bg-emerald-950 w-screen h-full grid grid-cols-1 lg:grid-cols-4 flex-wrap justify-center md:justify-around p-auto text-white gap-5 p-3 md:p-10">
    <div class="flex justify-center lg:justify-normal flex-row lg:flex-col w-full lg-:w-[12rem] gap-5 mx-auto mt-5">
        <img src="/favicon.png" alt="logo" class="lg:w-28 aspect-square">
        <span class="w-36 self-center lg:self-auto ">Yayasan Pondok Pesantren Darul Falah Ki Ageng Mbodo</span>
    </div>
    <div class="w-full flex flex-col justify-evenly mx-auto px-5">
        <span class="pb-5 font-semibold text-lg">Arsip</span>
        @for ($i = 0; $i < 5; $i++)
            <div class="border-t-2 flex"></div>
            <h5 class="my-1 cursor-pointer hover:text-blue-800">April 2024 {{$i }}</h5>
        @endfor
        <div class="border-b-2"></div>
    </div>
    <div class="w-full lg:w-[15rem] flex flex-col px-5">
        <span class="pb-5 font-semibold text-lg">Kontak Kami</span>
        <div class="flex items-center gap-4 pb-4">
            <i class="cursor-pointer hover:text-emerald-950 hover:bg-white fa-solid fa-phone p-3 border "></i>
            <p>081234567890</p>
        </div>
        <div class="flex items-center gap-4">
            <i class="cursor-pointer hover:text-emerald-950 hover:bg-white fa-solid fa-envelope p-3 border "></i>
            <p class="text-xs">pondokmbodo@email.com</p>
        </div>
    </div>
    <div class=" w-full  lg:w-[15rem] flex flex-col px-5">
        <span class="pb-5 font-semibold text-lg">Ikuti Kami</span>
        <div class="flex items-center gap-4 pb-4">
            <i class="cursor-pointer hover:text-emerald-950 hover:bg-white fa-brands fa-square-facebook p-3 border"></i>
            <i class="cursor-pointer hover:text-emerald-950 hover:bg-white fa-brands fa-square-instagram p-3 border"></i>
            <i class="cursor-pointer hover:text-emerald-950 hover:bg-white fa-brands fa-square-youtube p-3 border"></i>
        </div>

    </div>
</div>
<footer class="bg-emerald-950 w-screen text-center text-white">Copyright &copy; 2024 <strong class="self-end">All
        Rights Reserved</strong></footer>
