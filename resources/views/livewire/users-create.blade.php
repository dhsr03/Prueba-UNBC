<div id="paginated-users" class="p-6">
    <div>
        <div class="p-4 border border-gray-300 bg-white rounded-lg mt-6 mx-6">
            <div class="flex space-x-2 items-center p-4">
                <a href="{{ route('user.table') }}" class="bg-gray-100 shadow-lg hover:bg-gray-300 duration-75 transition-all ease-in-out text-gray-600 hover:text-black rounded-full px-2 py-1">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ $action ? 'Editar usuario' : 'Agregar nuevo usuario' }}
                </h2>
            </div>
            <form class="p-6 w-full" wire:submit="save">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <x-label for="firstName" value="{{ __('Nombre') }}" />
                        <x-input id="firstName" type="text" class="mt-1 block w-full" wire:model.live="firstName" placeholder="Ingrese nombre" required autocomplete="firstName" />
                        <x-input-error for="firstName" class="mt-2" />
                    </div>
                    <div>
                        <x-label for="lastName" value="{{ __('Apellido') }}" />
                        <x-input id="lastName" type="text" class="mt-1 block w-full" wire:model.live="lastName" placeholder="Ingrese apellido" required autocomplete="lastName" />
                        <x-input-error for="lastName" class="mt-2" />
                    </div>
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" type="text" class="mt-1 block w-full" wire:model.live="email" placeholder="Ingrese su correo electrónico" autocomplete="email" />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                    <div>
                        <x-label for="phone" value="{{ __('Teléfono') }}" />
                        <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.live="phone" placeholder="Ingrese número de celular" autocomplete="phone" />
                        <x-input-error for="phone" class="mt-2" />
                    </div>
                    <div>
                        <x-label for="status" value="{{ __('Estado') }}" />
                        <div class="flex items-center mt-1">
                            <!-- Toggle Button -->
                            <button 
                                type="button"
                                wire:click="toggleStatus"
                                class="relative inline-flex h-6 w-11 items-center rounded-full transition duration-200 
                                {{ $status ? 'bg-green-500' : 'bg-gray-300' }}">
                                <span
                                    class="inline-block h-4 w-4 transform rounded-full bg-white shadow transition duration-200 
                                    {{ $status ? 'translate-x-5' : 'translate-x-1' }}">
                                </span>
                            </button>
                            <span class="ml-2 text-sm">{{ $status ? 'Activo' : 'Inactivo' }}</span>
                        </div>
                        <x-input-error for="status" class="mt-2" />
                    </div>
                </div>
                <div class="w-full flex mt-4 2xl:justify-end 2xl:mt-6">
                    <div class="text-blue-500" wire:loading wire:target="save">
                        {{ $action ? 'Actualizando usuario' : 'Creando usuario...' }}
                    </div>
                    <x-button wire:loading.class="hidden" wire:target="save">
                        {{ __('Guardar') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
