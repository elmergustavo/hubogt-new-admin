<div class="flex-grow">
    <form wire:submit.prevent="submit">
        <div class="max-w-10xl mx-auto py-4 sm:py-12">
            <div>
                <div class="flex justify-center items-center md:justify-start">
                    <img src="/assets/logo/new-logo-mombii.svg" alt="" class="md:w-44 w-32 object-cover" />
                </div>
                <div>
                    <h2 class="md:text-3xl text-xl text-center">Crea tu cuenta</h2>
                    <p class="text-center md:text-base text-sm">
                        Empecemos! Cuéntanos algo sobre ti y tu tienda
                        <strong>Mombii</strong>
                    </p>
                </div>
                <div class="md:my-12 my-4">
                    {{ $this->form }}
                </div>
            </div>
        </div>
    </form>

    {{-- footer --}}
    <footer id="myFooter"
        class="hidden md:flex underline underline-offset-4 md:items-center md:space-x-6 bg-black text-white h-16  text-center md:text-left px-4 md:px-10">
        <a href="#">Q - Español</a>
        <a href="#">Contenido de productos</a>
        <a href="#">Privacidad</a>
        <a href="#">Anuncios basados en intereses</a>
        <a href="#">Regiones</a>
    </footer>
</div>