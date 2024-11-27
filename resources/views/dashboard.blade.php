<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 flex items-center space-x-6">
                <!-- Icono de la mano saludando con animación (sin círculo) -->
                <div class="animate-waving-hand text-6xl text-blue-500">
                    <i class="fa-solid fa-hand fa-3x"></i>
                </div>

                <!-- Mensaje de bienvenida -->
                <div class="pl-4">
                    <h3 class="text-3xl text-gray-800 font-semibold">
                        ¡Bienvenido, {{ Auth::user()->name }} {{ Auth::user()->last_name }}!
                    </h3>
                    <p class="mt-4 text-lg text-gray-600">
                        Nos alegra tenerte de vuelta en el sistema.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS de la animación -->
    <style>
        /* Animación para el icono de la mano saludando */
        @keyframes wavingHand {
            0% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(15deg);
            }
            50% {
                transform: rotate(0deg);
            }
            75% {
                transform: rotate(-15deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        .animate-waving-hand {
            animation: wavingHand 2s infinite ease-in-out;
        }
    </style>
</x-app-layout>
