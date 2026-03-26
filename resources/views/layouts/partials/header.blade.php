<!-- HEADER -->
        <header class="fixed top-0 left-0 w-full z-50
            bg-gray-50 backdrop-blur-md
            border-b border-gray-200 shadow-sm"
            >

            <div class="mx-auto px-6 lg:px-8">

                <div class="flex items-center justify-between h-20">

                    <!-- LEFT LOGO -->
                    <div class="flex items-center space-x-3">
                        <img src="{{asset("logo.png")}}" alt="" class="w-auto h-10">
                    </div>

                    <!-- CENTER NAVIGATION -->
                    <nav class="hidden lg:flex items-center space-x-8 text-[14px] font-medium text-gray-900">

                        <a href="/"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('/') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        Home

                        @if(request()->is('/'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>

                        <div class="relative group">

                            <!-- Main Link -->
                            <button class="flex items-center gap-1 hover:text-blue-400 transition duration-300">
                                Services
                                <i class="fa-solid fa-chevron-down text-[10px] mt-[2px] transition-transform duration-300 group-hover:rotate-180"></i>
                            </button>

                            <!-- Dropdown -->
                            <div class="absolute left-0 mt-4 w-56 
                                bg-gray-50 border border-gray-200 
                                rounded-md 
                                opacity-0 invisible 
                                group-hover:opacity-100 group-hover:visible
                                transition-all duration-300">

                                <ul class="py-3 text-sm text-gray-900">

                                    <li>
                                        <a href="/services/air-freight" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Air Freight
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/services/ocean-freight" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Ocean Freight
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/services/road-freight" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Road Transport
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/services/rail-freight" class="block px-5 py-2 hover:bg-blue-600/20 hover:text-blue-400 transition">
                                            Rail Transport
                                        </a>
                                    </li>

                                    
                                    

                                </ul>

                            </div>

                        </div>
                        
                        <a href="/blog"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('blog*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        News & Insights

                        @if(request()->is('blog*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>
                        <a href="/industry"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('challenge*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        Industries we serve

                        @if(request()->is('industry*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>
                        <a href="/challenge"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('challenge*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        Challenges

                        @if(request()->is('challenge*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>
                        <a href="/about"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('about*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        About Us

                        @if(request()->is('about*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        <a href="/seo"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('about*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        SEO

                        @if(request()->is('seo*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>
                        <a href="/contact"
                        class="relative pb-1 text-gray-900 hover:text-blue-400
                        after:absolute after:left-0 after:-bottom-2
                        after:h-[2px] after:w-0 after:bg-blue-400
                        after:transition-all after:duration-300
                        hover:after:w-full">
                        {{-- class="relative pb-1 {{ request()->is('contact*') ? 'text-[#1ecbff]' : 'text-gray-300 hover:text-blue-400' }}"> --}}

                        Contact

                        @if(request()->is('contact*'))
                        <span class="absolute left-0 -bottom-2 w-full h-[2px] 
                        bg-[#1ecbff] rounded-full shadow-[0_0_8px_#3b82f6]"></span>
                        @endif

                        </a>

                    </nav>

                    <!-- RIGHT SIDE -->
                <!-- RIGHT SIDE -->
                    <div class="hidden lg:flex items-center space-x-5">

                        <!-- Customer Support Icon -->
                        {{-- <div class="w-9 h-9 flex items-center justify-center 
                            bg-white/5 border border-white/10 rounded-md
                            text-gray-300 hover:text-blue-400 
                            hover:bg-blue-600/20 transition cursor-pointer">
                            <i class="fa-solid fa-headset text-sm"></i>
                        </div> --}}

                        <!-- Get Quote -->
                        <a href="/contact"
                        class="bg-gradient-to-r from-blue-600 to-blue-500
                        hover:from-blue-500 hover:to-blue-600
                        transition text-white px-5 py-2 rounded-md text-sm font-semibold
                        shadow-lg shadow-blue-600/30">
                            Get Quote
                        </a>

                    </div>

                    <!-- MOBILE MENU BUTTON -->
                    <button id="menuBtn" class="lg:hidden  text-2xl">
                        ☰
                    </button>

                </div>

                <!-- RIGHT LOWER ROW (Language + Icons) -->
                {{-- <div class="flex items-center justify-end gap-6 pb-3">

                    <!-- Language -->
                    <div class="flex items-center space-x-2 text-sm text-gray-300 
                            border border-white/10 px-3 py-1.5 rounded-md 
                            bg-white/5 hover:bg-white/10 transition cursor-pointer">
                        <i class="fa-solid fa-globe text-blue-400"></i>
                        <span>EN</span>
                    </div>

                    <!-- Icons -->
                    <div class="flex items-center space-x-5 text-gray-300 text-[15px]">
                        <i class="fa-regular fa-bell hover:text-blue-400 cursor-pointer transition"></i>
                        <i class="fa-solid fa-cart-shopping hover:text-blue-400 cursor-pointer transition"></i>
                    </div>

                </div> --}}

            </div>


            <!-- MOBILE MENU -->
            <div id="mobileMenu" class="lg:hidden hidden bg-[#0b2238] border-t border-white/10">

                <div class="px-6 py-6 space-y-4 text-gray-300 text-sm">

                    <a href="/" class="block hover:text-blue-400 transition">
                        Home
                    </a>

                    <a href="/services/air-freight" class="block hover:text-blue-400 transition">
                        Air Freight
                    </a>

                    <a href="/services/ocean-freight" class="block hover:text-blue-400 transition">
                        Ocean Freight
                    </a>

                    <a href="/services/road-freight" class="block hover:text-blue-400 transition">
                        Road Transport
                    </a>

                    <a href="/services/rail-freight" class="block hover:text-blue-400 transition">
                        Rail Transport
                    </a>

                    <a href="/blog" class="block hover:text-blue-400 transition">
                        News & Insights
                    </a>

                    <a href="/industry" class="block hover:text-blue-400 transition">
                        Industries we serve
                    </a>

                    <a href="/challenge" class="block hover:text-blue-400 transition">
                        Challenges
                    </a>

                    <a href="/about" class="block hover:text-blue-400 transition">
                        About Us
                    </a>

                    <a href="/contact" class="block hover:text-blue-400 transition">
                        Contact
                    </a>

                    <!-- Get Quote Button -->
                    <a href="/contact"
                    class="block mt-4 text-center bg-blue-600 hover:bg-blue-500
                    transition px-5 py-2 rounded-md font-semibold">
                        Get Quote
                    </a>

                </div>

            </div>

        </header>
        <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        </script>


