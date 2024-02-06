<x-filament-panels::page>

    <style>
        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
            -webkit-tap-highlight-color: transparent;
        }

        .submit-button:disabled {
            cursor: not-allowed;
            background-color: #D1D5DB;
            color: #111827;
        }

        .submit-button:disabled:hover {
            background-color: #9CA3AF;
        }

        .credit-card {
            max-width: 420px;
            margin-top: 3rem;
        }

        @media only screen and (max-width: 420px) {
            .credit-card .front {
                font-size: 100%;
                padding: 0 2rem;
                bottom: 2rem !important;
            }

            .credit-card .front .number {
                margin-bottom: 0.5rem !important;
            }
        }
    </style>

    <div class="bg-blue-50">
        <div class="m-4">
            <div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white" x-data="creditCard">
                <header class="flex flex-col justify-center items-center">
                    <div class="relative" x-show="card === 'front'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100">
                        <img class="w-full h-auto"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-front.png"
                            alt="front credit card">
                        <div class="front bg-transparent text-lg w-full text-white px-12 absolute left-0 bottom-12">
                            <p class="number mb-5 sm:text-xl"
                                x-text="cardNumber !== '' ? cardNumber : '0000 0000 0000 0000'"></p>
                            <div class="flex flex-row justify-between">
                                <p x-text="cardholder !== '' ? cardholder : 'Card holder'"></p>
                                <div class="">
                                    <span x-text="expired.month"></span>
                                    <span x-show="expired.month !== ''">/</span>
                                    <span x-text="expired.year"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative" x-show="card === 'back'" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100">
                        <img class="w-full h-auto"
                            src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-back.png"
                            alt="">
                        <div
                            class="bg-transparent text-white text-xl w-full flex justify-end absolute bottom-20 px-8  sm:bottom-24 right-0 sm:px-12">
                            <div class="border border-white w-16 h-9 flex justify-center items-center">
                                <p x-text="securityCode !== '' ? securityCode : 'code'"></p>
                            </div>
                        </div>
                    </div>
                    <ul class="flex">
                        <li class="mx-2">
                            <img class="w-16"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/computop.png"
                                alt="" />
                        </li>
                        <li class="mx-2">
                            <img class="w-14"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/verified-by-visa.png"
                                alt="" />
                        </li>
                        <li class="ml-5">
                            <img class="w-7"
                                src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/mastercard-id-check.png"
                                alt="" />
                        </li>
                    </ul>
                </header>
                <main class="mt-4 p-4">
                    <h1 class="text-xl font-semibold text-gray-700 text-center">Card payment</h1>
                    <div class="">
                        <div class="my-3">
                            <input type="text"
                                class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                placeholder="Card holder" maxlength="22" x-model="cardholder" />
                        </div>
                        <div class="my-3">
                            <input type="text"
                                class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                placeholder="Card number" x-model="cardNumber" x-on:keydown="format()"
                                x-on:keyup="isValid()" maxlength="19" />
                        </div>
                        <div class="my-3 flex flex-col">
                            <div class="mb-2">
                                <label for="" class="text-gray-700">Expired</label>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <select name="" id=""
                                    class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    x-model="expired.month">
                                    <option value="" selected disabled>MM</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select name="" id=""
                                    class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    x-model="expired.year">
                                    <option value="" selected disabled>YY</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                                <input type="text"
                                    class="block w-full col-span-2 px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
                                    placeholder="Security code" maxlength="3" x-model="securityCode"
                                    x-on:focus="card = 'back'" x-on:blur="card = 'front'" />
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="mt-6 p-4">
                    <button
                        class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
                        x-bind:disabled="!isValid" x-on:click="onSubmit()">
                        Pay now
                    </button>
                </footer>
            </div>
        </div>
        <script>
            document.addEventListener("alpine:init", () => {
                Alpine.data("creditCard", () => ({
                    init() {
                        console.log('Component mounted');
                    },
                    format() {
                        if (this.cardNumber.length > 18) {
                            return;
                        }
                        this.cardNumber = this.cardNumber.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
                    },
                    get isValid() {
                        if (this.cardholder.length < 5) {
                            return false;
                        }
                        if (this.cardNumber === '') {
                            return false;
                        }
                        if (this.expired.month === '' && this.expired.year === '') {
                            return false;
                        }
                        if (this.securityCode.length !== 3) {
                            return false;
                        }
                        return true;
                    },
                    onSubmit() {
                        alert(`You did it ${this.cardholder}.`);
                    },
                    cardholder: '',
                    cardNumber: '',
                    expired: {
                        month: '',
                        year: '',
                    },
                    securityCode: '',
                    card: 'front',
                }));
            });
        </script>
    </div>

    </html>


    <!-- component -->
    <header class="max-w-6xl mx-auto py-8 px-5 flex justify-between lg:px-8">
        <a href="#/" class="text-2xl text-gray-900 font-semibold">price<span
                class="text-indigo-600">ly</span></a>
        <nav class="">
            <ul class="flex pt-1.5 text-md lg:pt-0 lg:text-lg">
                <li class="lg:px-4">
                    <a href="#/" class="p-3 text-gray-500 font-semibold">about</a>
                </li>
                <li class="lg:px-4">
                    <a href="#/" class="p-3 text-gray-500 font-semibold">blog</a>
                </li>
                <li class="lg:pl-4">
                    <a href="#/" class="p-3 text-gray-500 font-semibold">contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="max-w-6xl mx-auto pt-10 pb-36 px-8">

        <div class="max-w-md mx-auto mb-14 text-center">
            <h1 class="text-4xl font-semibold mb-6 lg:text-5xl"><span class="text-indigo-600">Flexible</span> Plans
            </h1>
            <p class="text-xl text-gray-500 font-medium">Choose a plan that works best for you and your team.</p>
        </div>

        <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">

            <div
                class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg" alt=""
                        class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-2xl font-semibold">Basic</span>
                        <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span
                                class="text-3xl font-bold">10 </span></span><span class="text-gray-500 font-medium">/
                            user</span>
                    </div>
                </div>
                <ul class="mb-7 font-medium text-gray-500">
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">Get started with <span class="text-black">messaging</span></span>
                    </li>
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">Flexible <span class="text-black">team meetings</span></span>
                    </li>
                    <li class="flex text-lg">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">5 TB</span> cloud storage</span>
                    </li>
                </ul>
                <a href="#/"
                    class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

            <div
                class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
                <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg" alt=""
                        class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-3xl font-semibold text-white">Startup</span>
                        <span><span class="font-medium text-xl align-top">$&thinsp;</span><span
                                class="text-3xl font-bold text-white">24 </span></span><span class="font-medium">/
                            user</span>
                    </div>
                </div>
                <ul class="mb-10 font-medium text-xl">
                    <li class="flex mb-6">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3">All features in <span class="text-white">Basic</span></span>
                    </li>
                    <li class="flex mb-6">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3">Flexible <span class="text-white">call scheduling</span></span>
                    </li>
                    <li class="flex">
                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                        <span class="ml-3"><span class="text-white">15 TB</span> cloud storage</span>
                    </li>
                </ul>
                <a href="#/"
                    class="flex justify-center items-center bg-indigo-600 rounded-xl py-6 px-4 text-center text-white text-2xl">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

            <div
                class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                    <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg" alt=""
                        class="rounded-3xl w-20 h-20" />
                    <div class="ml-5">
                        <span class="block text-2xl font-semibold">Enterprise</span>
                        <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span
                                class="text-3xl font-bold">35 </span></span><span class="text-gray-500 font-medium">/
                            user</span>
                    </div>
                </div>
                <ul class="mb-7 font-medium text-gray-500">
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">All features in <span class="text-black">Startup</span></span>
                    </li>
                    <li class="flex text-lg mb-2">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3">Growth <span class="text-black">oriented</span></span>
                    </li>
                    <li class="flex text-lg">
                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                        <span class="ml-3"><span class="text-black">Unlimited</span> cloud storage</span>
                    </li>
                </ul>
                <a href="#/"
                    class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                    Choose Plan
                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                </a>
            </div>

        </div>

    </main>

</x-filament-panels::page>
