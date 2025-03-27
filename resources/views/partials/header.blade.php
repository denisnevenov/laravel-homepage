<header class="fixed w-full top-0 left-0 bg-white z-2">
    <div class="container max-w-[1224px] mx-auto px-3 py-3 flex items-center justify-between relative">
        <a href="{{ route('home') }}" aria-label="LabForty Home" class="block"><img src="{{ asset('images/logo.svg') }}" width="108" height="20" alt="LabForty logo"></a>

        <button id="navToggle" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
            </svg>
        </button>

        <nav id="nav" class="max-md:absolute max-md:right-0 max-md:top-full max-md:bg-white max-md:w-full max-md:transition-all max-md:duration-300 [.show]:opacity-100 max-md:translate-x-[150%] max-md:opacity-0 [.show]:translate-x-0 max-md:shadow">
            <ul class="block md:flex flex-wrap items-center gap-4 max-md:text-end max-md:pb-2 max-md:px-2">
                <li class="relative group">
                    <button type="button" class="max-md:p-3 p-2 max-md:ms-auto flex items-center gap-2 text-sm font-semibold hover:opacity-75 cursor-pointer">
                        Company   

                        <i class="ico-chevron-down-sm inline-block w-[12px] h-[10px]"></i>
                    </button>

                    <div class="z-3 absolute top-5 md:top-full max-md:right-0 md:-left-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible pt-4">
                        <ul class="bg-white rounded-xl min-w-[12rem] text-sm font-semibold py-2 shadow-md">
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">About us</a></li>
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">FAQ</a></li>
                        </ul>
                    </div>
                </li>

                <li class="relative group">
                    <button type="button" class="max-md:p-3 p-2 max-md:ms-auto flex items-center gap-2 text-sm font-semibold hover:opacity-75 cursor-pointer">
                        Services   

                        <i class="ico-chevron-down-sm inline-block w-[12px] h-[10px]"></i>
                    </button>

                    <div class="z-3 absolute top-5 md:top-full max-md:right-0 md:-left-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible pt-4">
                        <ul class="bg-white rounded-xl min-w-[12rem] text-sm font-semibold py-2 shadow-md">
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">Websites</a></li>
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">Apps</a></li>
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">E-commerce</a></li>
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:text-blue">Support</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="max-md:p-3 p-2 block text-sm font-semibold hover:opacity-75 cursor-pointer">Insights</a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="max-md:p-3 p-2 block text-sm font-semibold hover:opacity-75 cursor-pointer">Careers</a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="max-md:p-3 p-2 block md:hidden text-sm font-semibold hover:opacity-75 cursor-pointer">Get in touch</a>
                </li>
            </ul>
        </nav>

        <a href="{{ route('about') }}" class="hidden md:block px-4 py-2 text-dark hover:text-blue text-xs font-bold">
            Get in touch >
        </a>
    </div>
</header>