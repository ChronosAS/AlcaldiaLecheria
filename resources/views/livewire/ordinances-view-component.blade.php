<div>
    <x-main-header bg_img="../assets/img/lecheria-bg.jpg">
        <h1 class="text-7xl">ORDENANZAS</h1>
    </x-main-header>
    <div class="my-8 space-y-4 px-4 mx-auto max-w-7xl">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="mt-5 space-y-4 md:space-y-6">
                <x-table.table>
                    <x-slot name="thead">
                        <tr class="rounded bg-blue-900 text-white ">
                            <x-table.th>
                                <h1 class=" text-right">Links</h1>
                                {{-- <div class="flex w-[40%]">
                                    <input
                                    type="search"
                                    class="relative   flex-auto rounded border border-solid border-neutral-200   text-base font-normal  text-surface outline-none transition duration-200 ease-in-out placeholder:text-neutral-500 focus:border-primary focus:shadow-inset focus:outline-none motion-reduce:transition-none dark:border-white/10 dark:text-black dark:placeholder:text-black dark:autofill:shadow-autofill dark:focus:border-primary"
                                    placeholder="Buscar"
                                    aria-label="Search"
                                    id="exampleFormControlInput2"
                                    aria-describedby="button-addon2" />
                                    <span
                                    class="flex items-center whitespace-nowrap px-3 py-[0.25rem] text-surface dark:border-neutral-400 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
                                    id="button-addon2">
                                       <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       fill="none"
                                       viewBox="0 0 24 24"
                                       stroke-width="2"
                                       stroke="currentColor">
                                       <path
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                       </svg>
                                    </span>
                                 </div>--}}
                            </x-table.th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        <tr>
                           <x-table.td>
                            <!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center">
    <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
      Latest articles
    </h2>

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
            <p class="text-wrap">
              Ut pretium ultricies dignissim. Sed sit amet mi eget urna
              placerat vulputate. Ut vulputate est non quam dignissim
              elementum. Donec a ullamcorper diam.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
              more</a>
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
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
              more</a>
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
            <p class=" text-wrap">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="#!" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
              more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
                           </x-table.td>
                        </tr>
                    </x-slot>
                </x-table.table>
            </div>
        </div>
    </div>
</div>
