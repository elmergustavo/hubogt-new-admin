<div class="flex flex-col items-center py-6 bg-gray-100 full-screen sm:justify-center dark:bg-gray-900">

    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md ">
        
        <div class="px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:rounded-lg dark:bg-gray-700">
            {{ $slot }}
        </div>

        <div class="grid mt-6 justify-items-center md:justify-items-end">
            <div>
                <a target="_blank" href="https://carilat.zendesk.com/hc/es/categories/10909664771987" class="mr-6 text-xs text-gray-600 hover:text-gray-900 dark:text-gray-200 dark:hover:text-gray-300">
                    {{ __('Help') }}
                </a>
                <a target="_blank" href="{{ route('policy.show') }}" class="mr-6 text-xs text-gray-600 hover:text-gray-900 dark:text-gray-200 dark:hover:text-gray-300">
                    {{ __('Privacy') }}
                </a>
                <a target="_blank" href="{{ route('terms.show') }}" class="text-xs text-gray-600 hover:text-gray-900 md:mr-2 dark:text-gray-200 dark:hover:text-gray-300">
                    {{ __('Terms') }}
                </a>
            </div>
        </div>

    </div>
    
</div>