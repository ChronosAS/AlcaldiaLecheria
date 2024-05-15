<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">ORDENANZAS</h1>
    </x-main-header>
    <div class="my-8 space-y-4 px-4 mx-auto max-w-7xl">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 ">
          <div class="mt-5 space-y-4 md:space-y-6">
            <div id="controls-carousel" class="relative w-full" data-carousel="static">
              <div class="grid grid-cols-5 grid-rows-5 gap-4">
                <div class="row-span-5">
                  <button type="button" class="absolute z-30 start-0 flex items-center justify-center h-full px- cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                </div>
                <div class="col-span-3 row-span-5">
                  
                </div>
                <div class="row-span-5 col-start-5">
                  <button type="button" class="absolute end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                          <span class="sr-only">Next</span>
                      </span>
                    </button>
                </div>
              </div>
            </div>
                    <!-- Carousel wrapper 
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 
                        <div class="hidden duration-700 ease-in-out  " data-carousel-item>
                            <div class="grid gap-3 lg:grid-cols-3 xl:gap-x-12 ">
                                <div class="mb-6 lg:mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6 flex flex-col items-center">
                                      <h5 class="mb-1 text-lg font-bold">My paradise</h5>
                                      <p class="mb-2 text-neutral-500 dark:text-neutral-300 text-xs">
                                        <small>Published <u>13.01.2022</u> by
                                          <a href="#!">Anna Maria Doe</a></small>
                                      </p>
                                      <p class="text-wrap text-white text-xs">
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                      </p>
                                     
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-6 lg:mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6">
                                      <h5 class="mb-3 text-lg font-bold">Travel to Italy</h5>
                                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                        <small>Published <u>12.01.2022</u> by
                                          <a href="#!">Halley Frank</a></small>
                                      </p>
                                      <p class="text-wrap">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                      </p>
                                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Descargar</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6">
                                      <h5 class="mb-3 text-lg font-bold">Chasing the sun</h5>
                                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                        <small>Published <u>10.01.2022</u> by
                                          <a href="#!">Joe Svan</a></small>
                                      </p>
                                      <p class=" text-wrap text-white">
                                        Curabitur tristique, mi a mollis sagittis, metus felis mattis
                                        arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                                        massa volutpat feugiat. Donec.
                                      </p>
                                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Descargar</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                                <div class="mb-6 lg:mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6">
                                      <h5 class="mb-3 text-lg font-bold">My paradise</h5>
                                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                        <small>Published <u>13.01.2022</u> by
                                          <a href="#!">Anna Maria Doe</a></small>
                                      </p>
                                      <p class="text-wrap text-white">
                                        Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                        placerat vulputate. Ut vulputate est non quam dignissim
                                        elementum. Donec a ullamcorper diam.
                                      </p>
                                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Descargar</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-6 lg:mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6">
                                      <h5 class="mb-3 text-lg font-bold">Travel to Italy</h5>
                                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                        <small>Published <u>12.01.2022</u> by
                                          <a href="#!">Halley Frank</a></small>
                                      </p>
                                      <p class="text-wrap text-white">
                                        Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                        diam orci, nec ornare metus semper sed. Integer volutpat
                                        ornare erat sit amet rutrum.
                                      </p>
                                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Descargar</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-0">
                                  <div
                                    class="relative block rounded-lg bg-blue-800 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                                    <div class="flex">
                                      <div
                                        class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                                        data-te-ripple-init data-te-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp" class="w-full" />
                                        <a href="#!">
                                          <div
                                            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="p-6">
                                      <h5 class="mb-3 text-lg font-bold">Chasing the sun</h5>
                                      <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                                        <small>Published <u>10.01.2022</u> by
                                          <a href="#!">Joe Svan</a></small>
                                      </p>
                                      <p class=" text-wrap text-white">
                                        Curabitur tristique, mi a mollis sagittis, metus felis mattis
                                        arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                                        massa volutpat feugiat. Donec.
                                      </p>
                                      <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Descargar</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider controls 
                    <button type="button" class="absolute row-span-5 col-start-5 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>-->
        </div>
    </div>
</div>
