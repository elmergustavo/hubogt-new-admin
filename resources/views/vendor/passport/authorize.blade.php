<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <p class="text-center mb-2">
            <span class="text-lg">Elige una cuenta</span><br>
            para continuar a <strong>{{ $client->name }}</strong>
        </p>

        <ul role="list" class="mx-auto max-w-md py-4">
            <li class="group/item relative flex items-center justify-between border-b">
                <form method="post" action="{{ route('passport.authorizations.approve') }}" class="flex-1">

                    @csrf
                    <input type="hidden" name="state" value="{{ $request->state }}">
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <input type="hidden" name="auth_token" value="{{ $authToken }}">

                    <button type="submit" class="hover:bg-slate-100 flex gap-4 w-full text-left p-4">
                        <div class="flex-shrink-0">
                            <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}" class="h-12 w-12 rounded-full">
                        </div>
                        <div class="w-full text-sm leading-6">
                            <span class="font-semibold text-slate-900">
                                <span class="inset-0 rounded-xl" aria-hidden="true"></span>
                                {{ Auth::user()->name }}
                            </span><br>
                            <span class="text-slate-500">{{ Auth::user()->email }}</span>
                        </div>
                    </button>

                </form>
                {{-- <form method="POST" action="{{ route('logout') }}" class="px-3 flex-initial">
                    @csrf
                    <button type="submit" class="text-red-500">
                        {{ __('Salir') }}
                    </button>
                </form> --}}
                {{-- <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="group/edit invisible relative flex items-center whitespace-nowrap rounded-full py-1 pl-4 pr-3 text-sm text-slate-500 transition hover:bg-red-400 group-hover/item:visible">
                        <span class="font-semibold transition group-hover/edit:text-white">{{ __('Cerrar Sesión') }}</span>
                        <svg class="mt-px h-5 w-5 text-slate-400 transition group-hover/edit:translate-x-0.5 group-hover/edit:text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </form> --}}
            </li>
            <li class="group/item relative border-b">
                <a class="hover:bg-slate-100 flex gap-4 w-full text-left p-4" href="{{ 
                    route('passport.authorizations.authorize', [
                        'client_id' => request()->client_id,
                        'redirect_uri' => request()->redirect_uri,
                        'response_type' => request()->response_type ?? 'code',
                        'scope' => request()->scope ?? '',
                        'state' => request()->state ?? '',
                        'prompt' => 'login',
                    ]) }}
                ">
                    <div class="flex-shrink-0 w-12 h-6">
                        <img src="https://ui-avatars.com/api/" class="h-6 w-6 rounded-full mx-auto">
                    </div>
                    <div class="w-full text-sm leading-6">
                        <span class="text-slate-500">
                            {{ __('Utilizar otra cuenta') }}
                        </span>
                    </div>
                </a>
            </li>
        </ul>

        {{-- <p class="pb-5">
            <strong>{{ $client->name }}</strong> is requesting permission to access your account.
        </p>

        @if (count($scopes) > 0)
            <div class="scopes">
                    <p><strong>This application will be able to:</strong></p>

                    <ul>
                        @foreach ($scopes as $scope)
                            <li>{{ $scope->description }}</li>
                        @endforeach
                    </ul>
            </div>
        @endif --}}

        <form method="post" action="{{ route('passport.authorizations.deny') }}" class="text-center">
            @csrf
            @method('DELETE')

            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->id }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <button class="btn btn-danger">
                {{ __('Cancelar') }}
            </button>
        </form>
        {{-- <form method="post" action="{{ route('passport.authorizations.deny') }}" class="text-center">
            @csrf
            @method('DELETE')

            <input type="hidden" name="state" value="{{ $request->state }}">
            <input type="hidden" name="client_id" value="{{ $client->id }}">
            <input type="hidden" name="auth_token" value="{{ $authToken }}">
            <button class="text-red-500">
                {{ __('Cerrar Sesión') }}
            </button>
        </form> --}}

        {{-- Para continuar, Google compartirá su nombre, dirección de correo electrónico, preferencia de idioma y foto de perfil con felplex.com. Antes de usar esta aplicación, puede revisar la política de privacidad y los términos de servicio de felplex.com. --}}

    </x-jet-authentication-card>
</x-guest-layout>