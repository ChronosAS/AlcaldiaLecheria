<div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
    <div>
        <div class=" text-center">
            <h3 class="text-lg font-medium leading-6 text-slate-900">
                {{ $title ?? '' }}
            </h3>
            <p class="mt-1 text-sm text-slate-500">
                {{ $subTitle ?? '' }}
            </p>
        </div>
        <div class="mt-5 space-y-4 md:space-y-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-150 ease-out hover:ease-in-out hover:shadow-blue-400 ">
            {{ $content }}
        </div>
    </div>
</div>
