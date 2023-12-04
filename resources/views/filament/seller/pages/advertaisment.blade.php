
<x-filament-panels::page>
    <div class="bg-gray-100 font-sans">

        <!-- Encabezado -->
        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semibold">Tu Tienda Online xd</h1>
                <p class="mt-2">Descubre nuestras increíbles ofertas</p>
            </div>
        </header>

        <!-- Contenido Principal -->
        <section class="py-12">
            <div class="container mx-auto flex flex-wrap">
                <div class="w-full md:w-1/2 p-4">
                    <img src="imagen-producto.jpg" alt="Producto destacado" class="w-full h-auto">
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-2xl font-semibold mb-4">Producto Destacado</h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        euismod justo eget tortor euismod, nec feugiat justo venenatis.</p>
                    <p class="text-2xl text-blue-500 font-semibold">$99.99</p>
                    <button class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">Comprar Ahora</button>
                </div>
            </div>
        </section>

        <!-- Sección de Testimonios -->
        <section class="bg-gray-200 py-12">
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold mb-6">Lo que dicen nuestros clientes</h2>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 p-4">
                        <blockquote class="bg-white p-6 rounded shadow">
                            <p class="text-gray-700">"¡Increíble servicio! Rápido y confiable. Definitivamente volveré a
                                comprar."</p>
                            <cite class="block mt-4 text-blue-500">- Cliente Satisfecho</cite>
                        </blockquote>
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <blockquote class="bg-white p-6 rounded shadow">
                            <p class="text-gray-700">"Productos de alta calidad a precios asequibles. ¡Recomendado!"</p>
                            <cite class="block mt-4 text-blue-500">- Otro Cliente Feliz</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pie de Página -->
        <footer class="bg-blue-500 text-white text-center p-4">
            <p>&copy; 2023 Tu Tienda Online. Todos los derechos reservados.</p>
        </footer>

    </div>

</x-filament-panels::page>
