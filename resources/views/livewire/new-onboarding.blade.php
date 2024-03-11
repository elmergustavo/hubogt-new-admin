<div class="flex flex-grow flex-col h-screen" x-cloak>

    <div>
        <form wire:submit.prevent=" submit">
            <div class="max-w-10xl mx-auto py-4 sm:py-12">
                <div>
                    <div class="flex justify-center items-center md:justify-start">
                        <img src="/assets/logo/new-logo-mombii.svg" alt="" class="md:w-44 w-32 object-cover" />
                    </div>
                    @if ($step == 1)
                    <div>
                        <h2 class="md:text-3xl text-xl text-center">Crea tu cuenta</h2>
                        <p class="text-center md:text-base text-sm">
                            Empecemos! Cuéntanos algo sobre ti y tu tienda
                            <strong>Mombii</strong>
                        </p>
                    </div>
                    @endif
                    <div class="md:my-12 my-4">
                        @if ($step == 1)
                        {{ $this->form }}
                        @endif

                        @if ($step == 2)
                        <div>
                            <h2 class="md:text-3xl text-xl text-center">¡Estamos emocionados que seas parte de <strong>Mombii</strong></h2>
                            <p class="text-center md:text-base text-sm">
                                Te estaremos compartiendo más de <strong>Mombii</strong>                                
                            </p>
                        </div>
                        <div class="flex flex-col justify-center items-center flex-1 p-20 space-y-16" x-cloak>
                            <div class="bg-[#b6f4c0] h-52 w-96 flex p-4 space-x-5">
                                @svg('heroicon-s-check-circle', 'w-24 h-24')
                                <div class="flex flex-col space-y-4">
                                    <label class="text-xl flex justify-center text-center">Gracias por registrarte como
                                        vendedor
                                        de
                                        Buhogt.</label>
                                    <label>Estaremos revisando tu solictitud, y te estaremos contactando por medio de
                                        correo en
                                        las
                                        proximas 48 horas.</label>
                                </div>
                            </div>

                            <div class="flex justify-center lg:justify-end w-full py-2 lg:pb-0">
                                <x-filament::button
                                    class="bg-primary-500 hover:bg-blue-700 lg:w-60 p-2 text-white lg:mr-20 lg:mb-10 ">
                                    Ir a la tienda
                                </x-filament::button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- <footer id="myFooter"
        class="hidden md:flex underline underline-offset-4 md:items-center md:space-x-6 bg-black text-white h-16  text-center md:text-left px-4 md:px-10">
        <a href="#">Q - Español</a>
        <a href="#">Contenido de productos</a>
        <a href="#">Privacidad</a>
        <a href="#">Anuncios basados en intereses</a>
        <a href="#">Regiones</a>
    </footer> --}}
</div>