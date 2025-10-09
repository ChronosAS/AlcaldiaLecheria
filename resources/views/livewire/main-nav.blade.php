<!-- Minimalist Navbar Example -->
<nav x-data="{ showBar: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
     :class="scrolled ? 'bg-blue-900 shadow-lg backdrop-blur-none -translate-y-0 opacity-100' : 'bg-transparent shadow-none  -translate-y-2 opacity-90'"
     class="fixed top-0 left-0 w-full z-50 transition-all duration-500 ease-in-out transform">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
        <!-- Mobile Logo -->

        <!-- Collapsible navigation container -->
        <div
          class="!visible hidden flex-grow basis-[100%] items-center sm:!flex sm:basis-auto"
          id="navbarSupportedContent1"
          data-twe-collapse-item>
          <!-- Logo -->
          <a
            class="mb-4 me-5 ms-2 mt-3 flex items-center hover:text-neutral-400 focus:text-neutral-400 sm:mb-0 sm:mt-0"
            href="{{ route('app') }}">
            <img
              src="{{ asset('assets/img/logo-lecheria.png') }}"
              style="height: 35px"
              alt="Logo Lecheria"
              loading="lazy" />
          </a>
          <!-- Left navigation links -->
          <ul
            class="text-md list-style-none me-auto flex flex-col ps-0 sm:flex-row"
            data-twe-navbar-nav-ref>
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <!-- Projects link -->
                <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none hover:text-blue-400 md:px-0 xl:px-2 focus:text-neutral-300 sm:px-2 {{ request()->routeIs('app.vdv') ? 'active pointer-events-none' : '' }} [&.active]:text-blue-500"
                href="{{ route('app.vdv') }}" data-twe-nav-link-ref>
                            VDV2024
                </a>
            </li>
            @if(Route::currentRouteName() === 'app')
                <li>
                    <a href="#contact" class="hover:text-blue-300 transition flex items-center space-x-2">
                        <!-- Chat SVG -->
                        <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 21l1.8-4A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span>Atención</span>
                    </a>
                </li>
            @endif
            <li>
                <a href="{{ route('app.news') }}" class="hover:text-blue-300 transition flex items-center space-x-2">
                    <!-- Newspaper SVG -->
                    <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect width="20" height="14" x="2" y="5" rx="2" ry="2"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h6"/>
                    </svg>
                    <span>Noticias</span>
                </a>
            </li>
            <li>
                <a href="{{ route('app.civil-registry') }}" class="hover:text-blue-300 transition flex items-center space-x-2">
                    <!-- User SVG -->
                    <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="7" r="4"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 21a8.38 8.38 0 0113 0"/>
                    </svg>
                    <span>Registro Civil</span>
                </a>
            </li>
            <li>
                <a href="{{ route('app.info') }}" class="hover:text-blue-300 transition flex items-center space-x-2">
                    <!-- Info SVG -->
                    <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16v-4M12 8h.01"/>
                    </svg>
                    <span>Nuestro Municipio</span>
                </a>
            </li>
        </ul>
        <!-- Social Icons -->
        <div class="flex items-center space-x-4">
            <a href="https://x.com/Urbanejalcaldia" target="_blank" class="text-white hover:text-black text-2xl">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="https://www.instagram.com/alcaldiadelecheria/" target="_blank"
               class="inline-flex items-center justify-center text-white text-2xl rounded-md
                      hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500 transition">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" class="text-white hover:text-red-500 text-2xl">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <!-- Hamburger for Mobile -->
        <button class="md:hidden text-white focus:outline-none" @click="showBar = !showBar">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div x-show="showBar" x-transition class="md:hidden bg-blue-900/90 backdrop-blur-md px-4 py-4 space-y-4 text-lg font-semibold">
        <a href="http://200.41.118.109/appweb/" target="_blank" class=" text-white hover:text-blue-500 flex items-center space-x-2">
            <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7V3a1 1 0 011-1h8a1 1 0 011 1v18a1 1 0 01-1 1H8a1 1 0 01-1-1v-4"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10"/>
            </svg>
            <span>Declaración</span>
        </a>
        <a href="#contact" class=" text-white hover:text-blue-500 flex items-center space-x-2">
            <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8L3 21l1.8-4A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            <span>Atención</span>
        </a>
        <a href="{{ route('app.news') }}" class=" text-white hover:text-blue-500 flex items-center space-x-2">
            <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect width="20" height="14" x="2" y="5" rx="2" ry="2"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h6"/>
            </svg>
            <span>Noticias</span>
        </a>
        <a href="{{ route('app.civil-registry') }}" class=" text-white hover:text-blue-500 flex items-center space-x-2">
            <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="7" r="4"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.5 21a8.38 8.38 0 0113 0"/>
            </svg>
            <span>Registro Civil</span>
        </a>
        <a href="{{ route('app.info') }}" class=" text-white hover:text-blue-500 flex items-center space-x-2">
            <svg class="w-7 h-7 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16v-4M12 8h.01"/>
            </svg>
            <span>Nuestro Municipio</span>
        </a>
        <div class="flex items-center space-x-4 pt-2">
            <a href="https://x.com/Urbanejalcaldia" target="_blank" class="text-white hover:text-blue-500 text-2xl">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="https://www.instagram.com/alcaldiadelecheria/" target="_blank"
               class="inline-flex items-center justify-center text-white text-2xl rounded-md
                      hover:bg-gradient-to-r hover:from-indigo-500 hover:via-purple-500 hover:to-pink-500 transition">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" class="text-white hover:text-red-500 text-2xl">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

    </div>
</nav>
