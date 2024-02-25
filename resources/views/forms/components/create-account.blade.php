<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        <!-- Interact with the `state` property in Alpine.js -->
        <h2 class="md:text-2xl text-center font-semibold">
            {{$title}}
        </h2>

        <p class="text-center text-sm md:text-base">
            {{$sub_title}}
        </p>
    </div>
</x-dynamic-component>
