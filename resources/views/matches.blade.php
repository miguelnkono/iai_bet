<x-layouts::app :title="__('Matches')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl bg-gray-50 p-5 dark:bg-neutral-800">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl items-center justify-center dark:border-neutral-700">
            <img src="/champ_logo.png" alt="Champion league logo" class="h-50 w-50 object-cover mx-auto mt-10 mb-5"/>
            <h2 class="text-2xl font-bold text-center">Welcome to your matches view.</h2>
        </div>

        {{-- Games of the day — curved, styled match card with dark-mode support and extra spacing --}}
        <div class="w-full flex items-center justify-center md:py-10">
            <div class="relative max-w-4xl w-full px-8 py-10 md:px-12 md:py-14 rounded-[48px] bg-linear-to-r from-white to-gray-100 dark:from-neutral-900 dark:to-neutral-800 border border-gray-200 dark:border-neutral-700 shadow-2xl overflow-hidden backdrop-blur-sm">
                <!-- soft shader/texture -->
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute -left-28 -top-20 w-72 h-72 bg-linear-to-tr from-indigo-400 to-pink-400 rounded-full opacity-10 dark:opacity-6 blur-3xl"></div>
                    <div class="absolute -right-36 -bottom-16 w-80 h-80 bg-linear-to-tr from-yellow-300 to-rose-300 rounded-full opacity-8 dark:opacity-5 blur-3xl"></div>
                </div>

                <!-- subtle skewed shine (lighter in light mode, subtle in dark) -->
                <div class="absolute inset-0 -skew-y-3 bg-linear-to-r from-transparent via-white/25 to-transparent opacity-20 dark:from-transparent dark:via-white/5"></div>

                <div class="relative flex items-center justify-between gap-8 md:gap-12">
                    <div class="flex items-center gap-6 min-w-0">
                        <img src="/real_madrid.png" alt="Real Madrid" class="w-24 h-24 md:w-28 md:h-28  p-2 object-contain"/>
                        <p class="text-lg md:text-xl font-semibold text-gray-900 dark:text-gray-100 truncate">Real Madrid</p>
                    </div>

                    <div class="relative flex items-center justify-center px-4">
                        <div class="absolute -inset-8 bg-linear-to-r from-indigo-400 to-pink-400 rounded-full blur-3xl opacity-30 dark:opacity-20"></div>
                        <img src="/vs_logo.png" alt="VS" class="w-36 h-36 md:w-44 md:h-44 object-contain z-10"/>
                    </div>

                    <div class="flex items-center gap-6 min-w-0 justify-end">
                        <p class="text-lg md:text-xl font-semibold text-right text-gray-900 dark:text-gray-100 truncate">Barcelona</p>
                        <img src="/barcelona.png" alt="Barcelona" class="w-24 h-24 md:w-28 md:h-28 p-2 object-contain"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
