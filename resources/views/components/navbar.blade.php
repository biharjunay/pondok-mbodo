<nav id="navbar" class="fixed flex justify-around h-16 items-center px-5 w-screen text-white z-50 font-bold">
    <a href="/" wire:navigate>Pondok Mbodo</a>
    <ul class="hidden lg:flex gap-5 ">
        {{-- <li class="relative">
            <button href=""hover:text-emerald-950 hover:bg-white class="navbarnav cursor-pointer">Home <i class="fa fa-angle-down"></i></button>
            <div
                class="absolute border border-black -mt-1 rounded -z-10 top-10 flex-col navbarlist hidden bg-emerald-950 p-2">
                <a href="">Lorem, ipsum.</a>
                <a href="">Nemo, consequuntur!</a>
                <a href="">Rerum, itaque!</a>
            </div>
        </li> --}}
        <li>
            <a href="{{ route('index') }}" wire:navigate>Home</a>
        </li>
        <li>
            <a href="/tentang-kami" wire:navigate>Tentang Kami</a>
        </li>
    </ul>
</nav>
<script>
    const navbar = document.getElementById('navbar')
    window.addEventListener('scroll', () => {
        console.log(scrollX, scrollY);
        if (scrollY > 100) {
            navbar.classList.add('bg-teal-950')
        } else {
            navbar.classList.remove("bg-teal-950")
        }
    })

    const navbarNav = document.querySelectorAll('.navbarnav')
    const navbarList = document.querySelectorAll('.navbarlist')
    navbarNav.forEach((nav, index) => {
        nav.addEventListener('click', () => {
            navbarList[index].classList.toggle('hidden')
            if (nav.children[0].style.transform === 'rotate(180deg)') {
                nav.children[0].style.transform = 'rotate(0deg)'
            } else {
                nav.children[0].style.transform = 'rotate(180deg)'
            }

            navbarList.forEach((n, i) => {
                if (i != index) {
                    navbarNav[i].children[0].style.transform = 'rotate(0deg)'
                    n.classList.add('hidden')
                }
            })
        })
    });

    document.addEventListener('click', e => {
        let isDropdown = e.target.closest('.navbarnav')
        if (!isDropdown) {
            navbarList.forEach(n => {
                n.classList.add('hidden')
            })
            navbarNav.forEach(n => {
                n.children[0].style.transform = 'rotate(0deg)'
            })
        }
    })
</script>
