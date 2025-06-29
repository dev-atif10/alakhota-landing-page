<header class="fixed left-0 right-0 z-20 top-0 px-4 h-[80px] md:h-[100px] sm:px-14 lg:px-20">
    <div class="container-fluid h-full mx-auto py-3">
        <div class="flex items-center h-full justify-between">
            <div class="flex items-center">
                <a href="/">
                    <img src="assets/images/logo.svg" alt="site logo" class="object-contain" style="max-width: 100px;"/>
                </a>
            </div>

            <button class="list-button btn-primary rounded-full font-bold py-3 px-6 transition duration-300 md:hidden text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="x-mark" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
                <svg class="w-6 h-6 bars" fill="none" stroke="#fff" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <nav data-v-c970699f="" class="header-nav hidden md:flex gap-x-6 space-x-reverse"></nav>
            <div class="hidden md:flex gap-2">
                <a href="#" class="block py-3 btn-secondary rounded-full px-5 transition duration-300">
                    تسجيل الدخول
                </a>
                <a href="{{ route('join-request') }}" class="block py-3 btn-primary rounded-full px-5 transition duration-300">
                    تقديم طلب الإنضمام
                </a>
            </div>
        </div>

        <div class="fadeOut mobileNav md:hidden fixed w-full left-0 top-[50px] px-3">
            <div class="relative bg-white h-full rounded-xl bg-[#008cca]/80 border-2 border-primary p-5 flex items-center justify-center flex-col">
                <div class="nav-container flex items-center justify-center flex-col">
                    <a href="/about" class="list_item text-lg block py-2 text-primary transition duration-300">
                        <span class="block hover:-translate-x-1 transition"></span>
                    </a>
                </div>
                <div class="py-4"></div>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="block py-3 btn-secondary rounded-full px-5 text-primary transition duration-300">
                        تسجيل الدخول
                    </a>
                    <a href="{{ route('join-request') }}" class="block py-3 btn-primary rounded-full px-5 text-primary2 transition duration-300">
                        تقديم طلب الإنضمام
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>