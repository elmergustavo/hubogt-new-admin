<x-guest-layout>
    <div class="bg-white">
        <div class="flex justify-center h-screen">
            <div class="hidden lg:block lg:w-1/4 relative">
                <div class="bg-cover h-full" style="background-image: url('images/banner_login.png');">
                    <div class="absolute inset-0 bg-[#02418B] bg-opacity-60">
                        <div class="flex items-center h-full px-20">
                            <div>
                                <h2 class="text-2xl font-bold text-white sm:text-3xl">
                                    ¡Todo lo que quieras, te lo traemos volando!
                                </h2>
                                <p class="max-w-xl mt-3 text-gray-300">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. In autem ipsa, nulla
                                    laboriosam dolores, repellendus perferendis libero suscipit nam temporibus
                                    molestiae.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="flex items-center w-full max-w-md px-5 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="">



                        <div class="block md:hidden flex justify-center">
                            <x-authentication-card-logo />
                        </div>

                        <p class="mt-3 text-gray-900 text-4xl font-bold hidden md:block">
                            Bienvenido a
                            Buhogt.com
                        </p>







                    </div>

                    <div class="mt-8">

                        <div class="mt-8">
                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-label for="email" value="{{ __('Correo electrónico') }}" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-label for="password" value="{{ __('Contraseña') }}" />
                                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                        required autocomplete="current-password" />
                                </div>


                                <div class="flex justify-between">

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                                        </label>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a class="underline block mt-4 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('¿Ha olvidado su contraseña?') }}
                                        </a>
                                    @endif
                                </div>



                                <div class="flex flex-col mt-4">


                                    <x-button
                                        class="my-4 w-full text-2xl hover:bg-blue-900 text-center flex justify-center bg-[#252A61]">
                                        {{ __('Iniciar Sesión') }}
                                    </x-button>
                                </div>
                            </form>

                            @if (JoelButcher\Socialstream\Socialstream::show())
                                <x-socialstream />
                            @endif





                        </div>

                        <p class="mt-4 text-sm text-center text-gray-400">
                            Aun no tienes cuenta?
                            <a href="{{route('register')}}"
                                class="text-blue-900 focus:outline-none focus:underline hover:underline">Registrate</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
