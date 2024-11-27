<div id="paginated-users" class="p-6">
    <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6">
        <div>
            <!-- Encabezado -->
            <div class="flex justify-between items-left p-4 border-b border-gray-300">
                <h2 class="font-semibold text-xl text-gray-700">
                    {{ __('Lista Usuarios') }}
                </h2>
                @can('crear usuarios')
            <div class="flex justify-end">
                <a href="{{ route('user.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold py-1 px-3 rounded-full shadow-md transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    + Crear usuario
                </a>
            </div>
        @endcan


            </div><br>
    
            <!-- Filtros -->
            <div class="pb-2 flex items-center space-x-2">
                <div class="w-3/4">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search" wire:model.live="search" class="block w-full pt-2 px-6 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Buscar por nombre, apellido, email o especificar el estado (activo/inactivo)." />
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm">Mostrar</span>
                    <select wire:model.live="cant" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div><br>
    
            <!-- Tabla -->
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b border-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nombres</th>
                            <th scope="col" class="px-6 py-3">Apellidos</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Teléfono</th>
                            <th scope="col" class="px-6 py-3">Estado</th>
                            <th scope="col" class="px-6 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-left">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-left">{{ $user->last_name }}</td>
                                <td class="px-6 py-4 text-left">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-left">{{ $user->phone }}</td>
                                <td class="px-6 py-4 text-left">
                                    <span class="{{ $user->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} px-2 py-1 rounded-lg">
                                        {{ $user->is_active ? 'Activo' : 'Inactivo' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-left flex space-x-2 text-lg">
                                    @can('editar usuarios')
                                        <a href="{{ route('user.create', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-pen-to-square"></i></a>
                                    @endcan
                                    @can('eliminar usuarios')
                                        @if ($user->id === auth()->user()->id)
                                            <small class="px-2 w-14 flex justify-center items-center rounded-full bg-red-600 text-xs text-white">En uso</small>
                                        @else
                                            <a href="#" wire:click.prevent="confirmUserDeletion('{{ (int) $user->id }}')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        @endif
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        @if($showConfirmationModal)
                            <x-confirmation-modal wire:model="showConfirmationModal" overlayClasses="bg-gray-500 bg-opacity-25">
                                <x-slot name="title">
                                    Eliminar Usuario
                                </x-slot>
                                <x-slot name="content">
                                    ¿Estás seguro que deseas eliminar este usuario? Esta acción no se puede deshacer.
                                </x-slot>
                                <x-slot name="footer">
                                    <button wire:click="deleteUser" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">Eliminar
                                    </button>
                                    <button wire:click="$set('showConfirmationModal', false)" class="mt-3 w-full inline-flex justify-center rounded-md border border-blue-300 shadow-sm px-4 py-2 bg-blue-50 text-base font-medium text-blue-700 hover:bg-blue-100 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                        Cancelar
                                    </button>
                                </x-slot>
                            </x-confirmation-modal>
                        @endif
                    </tbody>
                </table>                
            </div>
    
            <!-- Paginación -->
            @if ($users->hasPages())
                <div class="p-4">
                    {{ $users->links(data: ['scrollTo' => '#paginated-users']) }}
                </div>
            @endif
        </div>
    </div>
</div>
