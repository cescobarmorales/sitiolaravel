<x-app-layout>
    
    <div class="py-12">

        <div class="max-w-7xl  mx-auto sm:px6 lg:px-8">

            <div class="bg-[#f1f5f9] overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                <div class="flex items-stretch space-x-4 max-w-7xl mx-auto sm:px6 lg:px-8 py-12">


                                <!-- component -->
                    
                    <!-- Inicio Formulario -->
                    <div class="flex flex-col  grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">

                    
                        <div class="flex justify-center">

                            <div class="flex">
                                <h1 class="text-gray-600 font-bold md:text-2xl text-xl mt-6">Punto de Venta</h1>
                            </div>

                        </div>
                    
              
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            
                            <div class="grid grid-cols-1">

                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Rut</label>
    
                                <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 
                                focus:ring-purple-600 focus:border-transparent" type="text" />    
    
                            </div>

                            <div class="grid grid-cols-1">

                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre Funcionario</label>

                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2
                             focus:ring-purple-600 focus:border-transparent" type="text"  />
                            
                            </div>


                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">

                            
                            <div class="grid grid-cols-1">

                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ibm - Grado</label>
    
                                <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2
                                 focus:ring-purple-600 focus:border-transparent" type="text"  />
                                
                            </div>

                            <div class="grid grid-cols-1">

                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Num. Transbank</label>

                                <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2
                                focus:ring-purple-600 focus:border-transparent" type="text"  />
                            
                            </div>

                            <div class="grid grid-cols-1">

                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cantidad</label>

                                <input type="number" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2
                                focus:ring-purple-600 focus:border-transparent" id="descripcion">
                            
                            </div>

                            <div class="grid grid-cols-1 ">
                           
                                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Productos</label>
    
                                <select class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
    
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
    
                                </select>
    
                            </div>

                        </div>
                    
                    
                        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>

                            <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>

                            <button class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>

                        </div>
                    
                    </div>

                    <!-- Fin Formulario -->

                    <br>

                            <!-- Inicio Detalle Compra -->
                    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">

                            
                        <div class="flex justify-center">

                            <div class="flex">
                                <h1 class="text-gray-600 font-bold md:text-2xl text-xl mt-6">Detalle de Venta</h1>
                            </div>

                        </div>
                    
                        <div class="grid grid-cols-1 mt-5 mx-7">

                            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Rut</label>

                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 
                            focus:ring-purple-600 focus:border-transparent" type="text" />    

                        </div>
                    
                        <br>
                        
                    
                    
                    </div>

                    <!-- FIN Detalle Compra -->

                </div>

            </div>
           
        </div>
    </div>
</div>
</x-app-layout>
