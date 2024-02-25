<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        <!-- Interact with the `state` property in Alpine.js -->
        <h2 class="text-2xl text-center">Datos de contacto
        </h2>

        <p class="text-center">
            Estos datos serán utilizados para el envío de notificaciones de ventas, administración de las órdenes y notificaciones en general.





        </p>
    </div>
</x-dynamic-component>
