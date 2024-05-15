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
                            

                           </x-table.td>
                        </tr>
                    </x-slot>
                </x-table.table>
            </div>
        </div>
    </div>
</div>
