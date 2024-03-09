<div>
    {{-- The whole world belongs to you. --}}



    <button wire:click="openModalslide()">
        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-[25px] w-5 md:h-[25px] h-5" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
        </svg>
        <span
            class="text-xs -z-10 -top-4 bg-red-500 rounded-full p-1 px-2 font-bold text-white -right-3 absolute hidden"></span>

    </button>




    {{-- <div class="block sm:hidden">

        <button wire:click="openModalslide()">
            <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-[25px] w-6 sm:h-[25px] h-6" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.137a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m12.75 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" />
            </svg>
            <span
                class="text-xs -z-10 -top-4 bg-red-500 rounded-full p-1 px-2 font-bold text-white -right-3 absolute hidden"></span>

        </button>



    </div> --}}

    <x-filament::modal icon="heroicon-o-exclamation-triangle" icon-color="danger" slide-over id="feedback" width="md" class="ml-[70px] md:ml-0">


        <div class="pointer-events-none fixed inset-y-0 right-0 flex  pl-10">
            <!--
                Slide-over panel, show/hide based on slide-over state.

                Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                  From: "translate-x-full"
                  To: "translate-x-0"
                Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                  From: "translate-x-0"
                  To: "translate-x-full"
              -->
            <div class="pointer-events-auto w-screen md:max-w-md max-w-xs">
                <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                    <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                        <div class="flex items-start justify-between">
                            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping
                                cart</h2>
                            <div class="ml-3 flex h-7 items-center">
                                <button wire:click="closeModalslide()"  type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Close panel</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flow-root">
                                <ul role="list" class="-my-6 divide-y divide-gray-200">
                                    <li class="flex py-6">
                                        <div
                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                class="h-full w-full object-cover object-center">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="#">Throwback Hip Bag</a>
                                                    </h3>
                                                    <p class="ml-4">$90.00</p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                            </div>
                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                <p class="text-gray-500">Qty 1</p>

                                                <div class="flex">
                                                    <button type="button"
                                                        class="font-medium text-primary hover:text-indigo-500">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex py-6">
                                        <div
                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                                alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                class="h-full w-full object-cover object-center">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="#">Medium Stuff Satchel</a>
                                                    </h3>
                                                    <p class="ml-4">$32.00</p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">Blue</p>
                                            </div>
                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                <p class="text-gray-500">Qty 1</p>

                                                <div class="flex">
                                                    <button type="button"
                                                        class="font-medium text-primary hover:text-indigo-500">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- More products... -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <p>Subtotal</p>
                            <p>$262.00</p>
                        </div>
                        <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at
                            checkout.</p>
                        <div class="mt-6">
                            <a href="#"
                                class="flex items-center justify-center rounded-md border border-transparent bg-primary px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                        </div>
                        <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                            <p>
                                or
                                <button type="button" class="font-medium text-primary hover:text-indigo-500">
                                    Continue Shopping
                                    <span aria-hidden="true"> &rarr;</span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-filament::modal>



</div>
