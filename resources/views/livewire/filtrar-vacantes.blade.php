<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Productos</h2>

    <div class="max-w-7xl mx-auto md:mt-10 p-3">
        <form wire:submit.prevent='leerDatosFormulario'>
            <div class="md:grid md:grid-cols-3 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">search term
                    </label>
                    <input 
                        id="termino"
                        type="text"
                        placeholder="Search for brand, color, etc."
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model='termino'
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">category</label>
                    <select class="border-gray-300 p-2 w-full text-center"
                            wire:model='categoria'>
                        <option>-- Select --</option>
            
                        @foreach ($categorias as $categoria )
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Size</label>
                    <select class="border-gray-300 p-2 w-full text-center"
                            wire:model='salario'>
                        <option>-- Select --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{$salario->salario}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-md font-bold px-12 py-3 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Search"
                />
            </div>
        </form>
    </div>
</div>