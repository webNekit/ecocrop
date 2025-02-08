<header aria-label="Шапка сайта" class="" id="header">
    <div class="max-w-[1240px] px-4 mx-auto">
        <div class="flex items-center justify-between max-w-full px-3 py-6 rounded-full bg-white/10 backdrop-blur-sm">
            {{-- logo --}}
            <div aria-label="Логотип" class="shrink-0">
                <a aria-label="На главную" href="{{ route('page.home') }}" class="">
                    <img width="95" height="25" src="{{ asset('images/logo.svg') }}"
                        alt="Логотип сайта {{ config('app.name') }}" class="">
                </a>
            </div>
            {{-- end logo --}}
            {{-- navbar --}}
            <nav aria-label="Навигация" class="hidden md:block">
                <menu aria-label="Меню навигации" class="flex items-center gap-5">
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Service" href="#!" class="font-medium text-white transition-colors hover:text-green-500">Service</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="Product" href="#!" class="font-medium text-white transition-colors hover:text-green-500">Product</a>
                    </li>
                    <li aria-label="Элемет меню навигации" class="inline-flex">
                        <a aria-label="About" href="#!" class="font-medium text-white transition-colors hover:text-green-500">About</a>
                    </li>
                </menu>
            </nav>
            {{-- end navbar --}}
            <button aria-label="Открыть модальное окно" class="bg-white flex items-center gap-3 text-center text-green-500 rounded-full px-[30px] py-[12px] border border-green-500">
                Contact Us
                <span class="w-[20px] h-[20px] rounded-full bg-green-500 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white size-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>                      
                </span>
            </button>
        </div>
    </div>
</header>
