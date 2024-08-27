<!-- Navbar -->
<div x-data="{ contact: false }">
    <nav
      :class="{ 'bg-blue-900 shadow transition duration-100' : showBar, 'bg-blue-900 sm:bg-transparent' : !showBar }"
      @scroll.window="showBar = (window.pageYOffset > 20) ? true : false, contact = (window.pageYOffset > document.querySelector('#contact').getBoundingClientRect().top) ? true : false"
      class=" flex-no-wrap z-10 fixed top-0 flex w-full items-center justify-between py-2 sm:flex-wrap sm:justify-start sm:py-4"
      >
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
          class="block border-0 bg-transparent px-2  hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 text-neutral-200 sm:hidden"
          type="button"
          data-twe-collapse-init
          data-twe-target="#navbarSupportedContent1"
          aria-controls="navbarSupportedContent1"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- Hamburger icon -->
          <span class="[&>svg]:w-7">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-7 w-7">
              <path
                fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Collapsible navigation container -->
        <div
          class="!visible hidden flex-grow basis-[100%] items-center sm:!flex sm:basis-auto"
          id="navbarSupportedContent1"
          data-twe-collapse-item>
          <!-- Logo -->
          <a
            class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-200 hover:text-neutral-400 focus:text-neutral-400 sm:mb-0 sm:mt-0"
            wire:navigate href="{{ route('app') }}">
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
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 {{ request()->routeIs('app.vdv') ? 'active pointer-events-none' : '' }} [&.active]:text-orange-500"
                href="{{ route('app.vdv') }}" data-twe-nav-link-ref>
                            VDV2024
                </a>
            </li>
            <!-- About me link -->
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 "
                href="http://200.41.118.109/appweb/"
                target="_blank"
                data-twe-nav-link-ref
                >DECLARACIÓN EN LÍNEA</a
              >
            </li>
            <!-- Testimonials link -->
            @if (request()->routeIs('app'))
                <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
                <a
                    class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500"
                    :class="{ 'active': contact }"
                    href="#contact"
                    data-twe-nav-link-ref
                    >ATENCIÓN AL CIUDADANO</a>
                </li>
            @endif
            <!-- Contact link -->
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500"
                href="https://lecheria.bmeurl.co/10FF3CFB"
                target="_blank"
                data-twe-nav-link-ref
                >BOLETÍN DE NOTICIAS</a
              >
            </li>
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
            <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 {{ request()->routeIs('app.info') ? 'active pointer-events-none' : '' }}"
                href="{{ route('app.info') }}"
                data-twe-nav-link-ref
                >NUESTRO MUNICIPIO</a>
            </li>
            <!-- information link -->
             {{-- <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2  [&.active]:text-orange-500 [&.active]:text-orange-500 {{ (request()->routeIs('app.info') || request()->routeIs('app.ordinances')) ? 'active' : '' }}"
                data-twe-nav-link-ref
                id="dropdownDelayButton" data-dropdown-toggle="dropdownDelay" data-dropdown-delay="500" type="button">NUESTRO MUNICIPIO</a>
                  <div id="dropdownDelay" class="z-10 hidden bg-white divide-y divide-blue-100  shadow w-44 bg-blue-800">
                      <ul class="py-2 text-sm text-white text-white" aria-labelledby="dropdownDelayButton">
                        <li>
                          <a  class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 [&.active]:text-orange-500 {{ request()->routeIs('app.info') ? 'active pointer-events-none' : '' }} text-lg font-sans" href="{{ route('app.info') }}" >Historia y Simbolos</a>
                        </li>
                        <li>
                          <a href="{{ route('app.ordinances') }}" class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 [&.active]:text-orange-500 {{ request()->routeIs('app.ordinances') ? 'active pointer-events-none' : '' }} text-lg font-sans">Ordenanzas</a>
                        </li>
                      </ul>
                  </div>
            </li> --}}
             {{--<li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 [&.active]:text-orange-500 {{ request()->routeIs('app.ordinances') ? 'active pointer-events-none' : '' }}"

                data-twe-nav-link-ref
                >ORDENANZAS</a>
            </li>--}}
            {{-- <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-dropdown-ref>
                <a
                class=" transition duration-200 hover:ease-in-out motion-reduce:transition-none text-neutral-200 hover:text-orange-400 focus:text-neutral-300 sm:px-2 [&.active]:text-orange-500 [&.active]:text-orange-500 font-sans"
                wire:navigate href="#"
                type="button"
                id="dropdownMenuButton2"
                data-twe-dropdown-toggle-ref
                aria-expanded="false">
                DROPDOWN
                <span class=" absolute [&>svg]:w-5">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
                </a>
                <ul
                class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-blue-800 bg-clip-padding text-left text-base shadow-lg font-sans data-[twe-dropdown-show]:block bg-blue-800 text-md p-5 sm:p-0"
                aria-labelledby="dropdownMenuButton1"
                data-twe-dropdown-menu-ref>
                <li>
                    <a
                    class="block w-full whitespace-nowrap bg-blue-800 px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline  text-white hover:bg-neutral-800/25 focus:bg-neutral-800/25 active:bg-neutral-800/25"
                    wire:navigate href="#"
                    data-twe-dropdown-item-ref
                    >ORDENANZA</a
                    >
                </li>
                </ul>
            </li> --}}
          </ul>
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
            <div class="m-2 text-center text-xl space-x-3">
                <a class="btn btn-lg text-white text-blak text-center sm:text-center  " wire:navigate href="https://twitter.com/Urbanejalcaldia" target="_blank" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                <a class="btn btn-lg text-violet-400 text-center sm:text-center" wire:navigate href="https://www.instagram.com/alcaldiadelecheria/"target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg text-red-500 text-center sm:text-center " wire:navigate href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
      </div>
    </nav>
</div>

<!-- Navbar -->
