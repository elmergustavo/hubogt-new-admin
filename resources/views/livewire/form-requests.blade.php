<div>
    <section class="relative bg-white">
        <div class="lg:absolute lg:inset-0 lg:left-1/2">
            <img class="h-64 w-full bg-white object-cover sm:h-80 lg:absolute lg:h-full py-32"
                src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=2560&h=3413&&q=80"
                alt="">
        </div>
        <div class="pb-24 pt-16 sm:pb-32 sm:pt-24 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:pt-32">
            <div class="px-6 lg:px-8">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Únete a la Revolución Empresarial con
                        Buhogt</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">¡Estás a punto de dar el primer paso hacia el
                        éxito! Completa el formulario a
                        continuación para unirte a Buhogt y comenzar tu viaje hacia nuevas oportunidades
                        de venta en línea. Únete a la comunidad de emprendedores exitosos y descubre
                        cómo Buhogt puede impulsar tu negocio.
                    </p>
                    <form action="{{ route('form.send') }}" method="POST" class="mt-16">
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <label for="first_name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                                <div class="mt-2.5">
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Apellido</label>
                                <div class="mt-2.5">
                                    <input type="text" name="last_name" id="last_name" value="{{ old('first_name') }}" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Correo
                                    eléctronico</label>
                                <div class="mt-2.5">
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="company"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Empresa</label>
                                <div class="mt-2.5">
                                    <input type="text" name="company" id="company" value="{{ old('company') }}" autocomplete="organization"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="flex justify-between text-sm leading-6">
                                    <label for="phone" class="block font-semibold text-gray-900">Numero</label>
                                    <p id="phone-description" class="text-gray-400">Optional</p>
                                </div>
                                <div class="mt-2.5">
                                    <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" autocomplete="tel"
                                        aria-describedby="phone-description"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <fieldset class="sm:col-span-2">
                                <legend class="block text-sm font-semibold leading-6 text-gray-900">¿Cómo te enteraste
                                    de buhogt?</legend>
                                <div class="mt-4 space-y-4 text-sm leading-6 text-gray-600">
                                    <div class="flex gap-x-2.5">
                                        <input id="Amigos o familia" name="reference" value="Amigos o familia" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="Amigos o familia">Amigos o familiares</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="Facebook" name="reference" value="Facebook" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="Facebook">Facebook</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="Instagram" name="reference" value="Instagram" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="Instagram">Instagram</label>
                                    </div>
                                    <div class="flex gap-x-2.5">
                                        <input id="Pagina web" name="reference" value="Pagina web" type="radio"
                                            class="mt-1 h-4 w-4 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-600">
                                        <label for="Pagina web">Pagina web</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="mt-10 flex justify-end border-t border-gray-900/10 pt-8">
                            <button type="submit"
                                class="rounded-lg bg-indigo-950 shadow-2xl px-8 py-2.5 text-center text-md font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar
                                registro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if (session('info'))
		<button x-data hidden="true" x-init="$nextTick(() => { $dispatch('notice', { type: 'success', text: 'Estaremos revisando su correo muy pronto' }) })"
            class="m-4 bg-green-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
            Success
        </button>

        <div x-data="noticesHandler()" class="absolute right-0 top-2" @notice.window="add($event.detail)"
            style="pointer-events:none">
            <template x-for="notice of notices" :key="notice.id">
                <div x-show="visible.includes(notice)" x-transition:enter="transition ease-in duration-200"
                    x-transition:enter-start="transform opacity-0 translate-y-2"
                    x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-out duration-3000"
                    x-transition:leave-start="transform  opacity-100"
                    x-transition:leave-end="transform  opacity-0" @click="remove(notice.id)"
                    class="rounded mb-4 mr-6 w-56  h-16 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer"
                    :class="{
                        'bg-green-500': notice.type === 'success',
                    }"
                    style="pointer-events:all" x-text="notice.text">
                </div>
            </template>
        </div>

        <script>
            function noticesHandler() {
                return {
                    notices: [],
                    visible: [],
                    add(notice) {
                        notice.id = Date.now()
                        this.notices.push(notice)
                        this.fire(notice.id)
                    },
                    fire(id) {
                        this.visible.push(this.notices.find(notice => notice.id == id))
                        const timeShown = 2000 * this.visible.length
                        setTimeout(() => {
                            this.remove(id)
                        }, timeShown)
                    },
                    remove(id) {
                        const notice = this.visible.find(notice => notice.id == id)
                        const index = this.visible.indexOf(notice)
                        this.visible.splice(index, 1)
                    },
                }
            }
        </script>
		@endif
</div>
