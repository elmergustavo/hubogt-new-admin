<div>

    <div class="max-w-2xl py-28 flex justify-center items-center mx-auto">
        <div x-data="{ openItem: null }" class="w-full">
            <p class="font-bold text-2xl py-2 mb-4">Preguntas frecuentes</p>
            @foreach ($faqs as $index => $faq)
                <div>
                    <div @click="openItem === {{ $index }} ? openItem = null : openItem = {{ $index }}"
                        class="cursor-pointer  border-b border-opacity-25 border-gray-400 font-bold py-2 flex gap-4 justify-between items-center">
                        <span>{{ $faq->question }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-all"
                            :class="{ 'rotate-90': openItem === {{ $index }} }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div x-show="openItem === {{ $index }}" x-transition:enter.duration.500ms class=" my-4">
                        <p>{!! $faq->answer !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>
