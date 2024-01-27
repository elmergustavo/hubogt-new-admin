<div class="dark:bg-gray-800">
    <div class="p-6 text-center bg-white border-b border-gray-200 dark:border-gray-800 sm:px-20 dark:bg-gray-800">
        <div class="text-gray-500 dark:text-white">
            {{ config('plex.title') }}
        </div>
    </div>
    <div class="grid grid-cols-1 text-center bg-gray-200 bg-opacity-25 md:grid-cols-2 xl:grid-cols-3 dark:bg-gray-700">
        @foreach (config('plex.apps') as $app_key => $app)
            @if($app['verify'] == true)
                <x-card-apps-plex logo="{{ $app_key }}"
                    title="{{ __('apps.' . $app_key . '.title') }}"
                    description="{{ __('apps.' . $app_key . '.description') }}"
                    url="{{ config('plex.apps.' . $app_key . '.url_login') ? config('plex.apps.' . $app_key . '.url_login') : '' }}"
                    link="{{ config('plex.apps.' . $app_key . '.url') }}"
                    verify="{{config('plex.apps.' . $app_key . '.verify') === false ? '' : true }}"
                    x-cloak
                />
            @endif
        @endforeach
    </div>
</div>
