

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    
                
                @if (session()->has('message'))
                    <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                                <h4>{{session('message')}}</h4>
                            </div>
                        </div>
                    </div>
                @endif

                <div class='flex flex-row '>

                    <div class="w-3/4 justify-star">
                        <button wire:click="crear()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mb-8 rounded"> + Agregar GiftCard</button>
                    </div>
                    
                    <div class="w-1/4 justify-self-end ">
                        <input wire:model="search" type="text"
                            class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-300 focus:border-indigo-300 focus:z-10 sm:text-sm"
                            placeholder="Buscar Producto...">
                    </div>

                </div>

                @if ($modal)
                    @include('livewire.crear')
                @endif


                <table class="table-fixed w-full">

                    <thead>

                        <tr class="bg-[#0369a1] text-white ">

                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">ID</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">QR</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">DESCRIPCION</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">PRECIO</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">FECHA VENCIMIENTO</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">ESTADO</th>
                            <th class="px-4 py-2 text-center text-xs font-medium text-gray-200 uppercase tracking-wider">ACCIONES</th>

                        </tr>

                    </thead>

                    <tbody class="bg-white  divide-gray-300">

                        @foreach ($productos as $producto)
                            @if ($productos->count())
                                    
                                <tr class="container border ">

                                    <td class="px-4 py-4 text-sm text-gray-500 border text-center">
                                        {{ $producto->id }}
                                    </td> 

                                    <td class="px-4 py-4 text-sm text-gray-500 border text-center">
                                        {{ $producto->qr }}
                                    </td> 

                                    <td class="px-4 py-4 border text-center">
                                        <div class="text-sm text-gray-900">
                                            {{ $producto->descripcion }}
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 border text-center">
                                        <div class="text-sm text-gray-900">
                                            $ {{ str_replace(',', '.', number_format($producto->cantidad, 0)) }}

                                        </div>
                                    </td>

                                    <td class="px-4 py-4 border text-center">
                                        <div class="text-sm text-gray-900">
                                            {{ $producto->fec_vencimiento }}
                                        </div>
                                    </td>
                                    
                                    <td class="border text-center "> 
                                        <div> 
                                            <livewire:toogle 
                                            :model="$producto"
                                            field="estado"
                                            key="'estado'.{{ $producto->id }}" />
                                        </div>
                                    </td>


                                    <td class="flex justify-center px-4 py-4  ">

                                        <div class= "transform hover:text-green-500 hover:scale-110 ">
                                            <button wire:click="editar({{$producto->id}})" >
                                                <svg 
                                                    xmlns="http://www.w3.org/2000/svg" 
                                                    class="h-6 w-6 " fill="none" viewBox="0 0 28 28" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 
                                                    0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            
                                                </svg>
                                            </button>
                                        </div>
                                        
                                        <div class="transform hover:text-red-500 hover:scale-110 ">
                                            <button wire:click="borrar({{$producto->id}})">
                                                <svg 
                                                    xmlns="http://www.w3.org/2000/svg" 
                                                    class="h-6 w-6" fill="none" viewBox="0 0 28 28" stroke="currentColor">
                                                
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2
                                                        0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />

                                                </svg> 
                                            </button>
                                        </div>

                                    </td>

                                </tr>
                            @else
                            <div class="bg-white px-4 py-3 border-gray-200 text-gray-500">
                                No hay resultados para la busqueda "{{ @search }}"
                            </div>
                            @endif
                        @endforeach


                    </tbody>

                </table>

            </div>

        

        </div>


    </div>

  
