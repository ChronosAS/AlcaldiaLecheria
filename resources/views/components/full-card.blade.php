<div class="bg-white px-4 py-5 sm:rounded-lg sm:p-6">
    <div>
        <div class=" text-center">
            <h3 class="text-lg font-medium leading-6 text-slate-900">
                {{ $title ?? '' }}
            </h3>
            <p class="mt-1 text-sm text-slate-500">
                {{ $subTitle ?? '' }}
            </p>
        </div>
        <div class="mt-5 space-y-4 md:space-y-6 rounded-xl ">
            {{ $content }}
        </div>
    </div>
</div>
