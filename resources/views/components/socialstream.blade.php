<div class="flex flex-row items-center justify-between py-4 text-gray-500 dark:text-gray-200">
    <hr class="w-full ">
    <span class="whitespace-nowrap dark:text-gray-600">
        @if ($attributes['signup'])
            {{ __('O registrarse con') }}
        @else
            {{ __('O iniciar sesión con') }}
        @endif
    </span>
    <hr class="w-full ml-2">
</div>

<div class="flex items-center justify-center flex-col">

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}"
            class="flex w-full items-center justify-center gap-3 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:ring-transparent">
            <svg class="h-5 w-5" viewBox="0 0 24 24" aria-hidden="true">
                <path
                    d="M12.0003 4.75C13.7703 4.75 15.3553 5.36002 16.6053 6.54998L20.0303 3.125C17.9502 1.19 15.2353 0 12.0003 0C7.31028 0 3.25527 2.69 1.28027 6.60998L5.27028 9.70498C6.21525 6.86002 8.87028 4.75 12.0003 4.75Z"
                    fill="#EA4335" />
                <path
                    d="M23.49 12.275C23.49 11.49 23.415 10.73 23.3 10H12V14.51H18.47C18.18 15.99 17.34 17.25 16.08 18.1L19.945 21.1C22.2 19.01 23.49 15.92 23.49 12.275Z"
                    fill="#4285F4" />
                <path
                    d="M5.26498 14.2949C5.02498 13.5699 4.88501 12.7999 4.88501 11.9999C4.88501 11.1999 5.01998 10.4299 5.26498 9.7049L1.275 6.60986C0.46 8.22986 0 10.0599 0 11.9999C0 13.9399 0.46 15.7699 1.28 17.3899L5.26498 14.2949Z"
                    fill="#FBBC05" />
                <path
                    d="M12.0004 24.0001C15.2404 24.0001 17.9654 22.935 19.9454 21.095L16.0804 18.095C15.0054 18.82 13.6204 19.245 12.0004 19.245C8.8704 19.245 6.21537 17.135 5.2654 14.29L1.27539 17.385C3.25539 21.31 7.3104 24.0001 12.0004 24.0001Z"
                    fill="#34A853" />
            </svg>
            <span class="text-sm font-semibold leading-6">Google</span>

        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}">
            <x-socialstream-icons.facebook class="h-8 w-8 mx-3" />
            <span class="sr-only">Facebook</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth1Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}">
            <x-socialstream-icons.twitter class="h-8 w-8 mx-3" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterOAuth2Support())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitterOAuth2()]) }}">
            <x-socialstream-icons.twitter class="h-8 w-8 mx-3" />
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-socialstream-icons.linkedin class="h-8 w-8 mx-3" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-socialstream-icons.github class="h-8 w-8 mx-3" />
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-socialstream-icons.gitlab class="h-8 w-8 mx-3" />
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-socialstream-icons.bitbucket />
            <span class="sr-only">BitBucket</span>
        </a>
    @endif

    {{-- <a href="{{ route('oauth.redirect', ['provider' => 'microsoft']) }}">
        <x-socialstream-icons.microsoft class="h-8 w-8 mx-3" />
        <span class="sr-only">Microsoft</span>
    </a> --}}

    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => 'apple']) }}">
            {{-- <x-socialstream-icons.apple class="h-8 w-8 mx-3 dark:hidden" /> --}}
            <span class="text-white hidden dark:block">
                <svg width="32px" height="32px" viewBox="0 0 256 315" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    preserveAspectRatio="xMidYMid">
                    <g>
                        <path
                            d="M213.803394,167.030943 C214.2452,214.609646 255.542482,230.442639 256,230.644727 C255.650812,231.761357 249.401383,253.208293 234.24263,275.361446 C221.138555,294.513969 207.538253,313.596333 186.113759,313.991545 C165.062051,314.379442 158.292752,301.507828 134.22469,301.507828 C110.163898,301.507828 102.642899,313.596301 82.7151126,314.379442 C62.0350407,315.16201 46.2873831,293.668525 33.0744079,274.586162 C6.07529317,235.552544 -14.5576169,164.286328 13.147166,116.18047 C26.9103111,92.2909053 51.5060917,77.1630356 78.2026125,76.7751096 C98.5099145,76.3877456 117.677594,90.4371851 130.091705,90.4371851 C142.497945,90.4371851 165.790755,73.5415029 190.277627,76.0228474 C200.528668,76.4495055 229.303509,80.1636878 247.780625,107.209389 C246.291825,108.132333 213.44635,127.253405 213.803394,167.030988 M174.239142,50.1987033 C185.218331,36.9088319 192.607958,18.4081019 190.591988,0 C174.766312,0.636050225 155.629514,10.5457909 144.278109,23.8283506 C134.10507,35.5906758 125.195775,54.4170275 127.599657,72.4607932 C145.239231,73.8255433 163.259413,63.4970262 174.239142,50.1987249"
                            fill="#e5e7eb"></path>
                    </g>
                </svg>
            </span>

            <span class="sr-only">Apple</span>
        </a>
    @endif

</div>
