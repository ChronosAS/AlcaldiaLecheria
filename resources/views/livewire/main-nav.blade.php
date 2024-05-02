<!-- Navbar -->
<div>
    <nav
      :class="{ 'bg-blue-900 shadow transition duration-100' : showBar, 'bg-blue-900 sm:bg-transparent' : !showBar}"
      @scroll.window="showBar = (window.pageYOffset > 20) ? true : false"
      class="flex-no-wrap z-10 fixed top-0 flex w-full items-center justify-between py-2 sm:flex-wrap sm:justify-start sm:py-4"
      >
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
          class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 sm:hidden"
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
            class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 sm:mb-0 sm:mt-0"
            href="{{ route('app') }}">
            <img
              src="{{ asset('assets/img/logo-lecheria.png') }}"
              style="height: 35px"
              alt="Logo Lecheria"
              loading="lazy" />
          </a>
          <!-- Left navigation links -->
          <ul
            class="text-lg list-style-none me-auto flex flex-col ps-0 sm:flex-row"
            data-twe-navbar-nav-ref>
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <!-- Projects link -->
              <a
                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                href="#"
                data-twe-nav-link-ref
                >Projects</a
              >
            </li>
            <!-- About me link -->
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-twe-nav-link-ref
                >About me</a
              >
            </li>
            <!-- Testimonials link -->
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-twe-nav-link-ref
                >Testimonials</a
              >
            </li>
            <!-- Contact link -->
            <li class="mb-4 sm:mb-0 sm:pe-2" data-twe-nav-item-ref>
              <a
                class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-twe-nav-link-ref
                >Contact</a
              >
            </li>
          </ul>
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
            <div class="m-2 text-center text-xl space-x-3">
                <a class="btn btn-lg text-white dark:text-blak text-center sm:text-center  " href="https://twitter.com/Urbanejalcaldia" target="_blank" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                <a class="btn btn-lg text-violet-400 dark:text-violet-400 text-center sm:text-center" href="https://www.instagram.com/alcaldiadelecheria/"target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg text-red-500  dark:text-red-500 text-center sm:text-center " href="https://www.youtube.com/@alcaldiadelecheria9429" target="_blank" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
      </div>
    </nav>
</div>

<!-- Navbar -->
