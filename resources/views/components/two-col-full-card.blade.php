<div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <h3 class="text-lg font-medium leading-6 text-slate-900">
                {{ $title }}
            </h3>
            <p class="mt-1 text-sm text-slate-500">
                {{ $subTitle ?? '' }}
            </p>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            {{ $content }}
        </div>
    </div>
</div>
