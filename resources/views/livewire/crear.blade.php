<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform
            transition-all  sm:my-8 sm:align-middle sm:max-w-lg sm:w-full " role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="qr" class="block text-gray-700 text-sm font-bold mb-2">Qr:</label>
                            <input type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                            focus:outline-none focus:shadow-outline" id="qr" wire:model="qr">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                            <input type="text" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                            focus:outline-none focus:shadow-outline" id="descripcion" wire:model="descripcion">
                        </div>

                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad:</label>
                            <input type="number" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                            focus:outline-none focus:shadow-outline" id="descripcion" wire:model="cantidad">
                        </div>
                        <div class="mb-4">
                            <label for="fec_vencimiento" class="block text-gray-700 text-sm font-bold mb-2">Fecha Vencimiento:</label>
                            <input type="date" class="shadow apperance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
                            focus:outline-none focus:shadow-outline" id="fec_vencimiento" wire:model="fec_vencimiento">
                        </div>
                       

                        {{--Modificar Modal para agregar switch Estado y QR--}}

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="bg-green-500 hover:bg-green-700 text-white inline-flex justify-center w-full rounded-md border border-transparent
                                px-4 py-2  underline-none focus:shadow-outline-green transition ease-in-out duration-150
                                sm:text-sm sm:leading-5" >Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="cerrarModal()" type="button" class="inline-flex  justify-center w-full rounded-md border border-transparent
                                px-4 py-2 underline-none focus:shadow-outline-green transition ease-in-out duration-150
                                sm:text-sm sm:leading-5" >Cancelar</button>
                            </span>


                        </div>

                    </div>
                </form>
        
            </div>

    </div>

</div>