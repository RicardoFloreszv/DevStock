
<form class="md:w-1/2 space-y-4 mb-7" wire:submit.prevent='editarVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Nombre del articulo')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Nombre del producto"
            />

        <x-input-error :messages="$errors->get('titulo')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs" 
        />
    </div>

    <div>
        <x-input-label for="precio" :value="__('Precio del articulo')" />
        <x-text-input 
            id="precio" 
            class="block mt-1 w-full" 
            type="text" wire:model="precio" 
            :value="old('precio')" 
            placeholder="Precio del producto"
            />

        <x-input-error :messages="$errors->get('precio')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs"
        />
    </div>


    <div>
        <x-input-label for="salario" :value="__('Talla del articulo')" />

        <select wire:model="salario" id="salario"
            class='w-full text-center border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'   
        >
            <option value="">-- Selecciona --</option>
            @foreach ($salarios as $salario)

                <option value={{$salario->id}}>{{$salario->salario}}</option>
                
            @endforeach
            
        
        </select>

        <x-input-error :messages="$errors->get('salario')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs" 
        />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select wire:model="categoria" id="categoria"
            class='w-full text-center border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'   
        >
            <option value="">-- Selecciona --</option>
            @foreach ($categorias as $categoria)

                <option value={{$categoria->id}}>{{$categoria->categoria}}</option>
            
            @endforeach
            
        </select>

        <x-input-error :messages="$errors->get('categoria')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs" 
        />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Marca del articulo')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" wire:model="empresa" 
            :value="old('empresa')" 
            placeholder="¿Que marca es el producto?"
            />

        <x-input-error :messages="$errors->get('empresa')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs"
        />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Fecha de lanzamiento')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" wire:model="ultimo_dia" 
            :value="old('ultimo_dia')" 
            />

        <x-input-error :messages="$errors->get('ultimo_dia')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs" 
        />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del producto')" />
        <textarea wire:model="descripcion" id="descripcion" 
            placeholder="Descripcion del producto"
            class='h-32 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'
            >
        
        </textarea>

        <x-input-error :messages="$errors->get('ultimo_dia')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs"
        />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen del producto')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" wire:model="imagen_nueva" 
            accept="image/*"
            />
        
        
            <div class="my-5 w-80">
                <x-input-label :value="__('Imagen Actual')" />

                <img src="{{ asset('storage/vacantes/' . $imagen)}}" alt="Imagen Vacante">
            </div>

            <div class="my-5 w-80">
                @if ($imagen_nueva)
                    Imagen nueva:
                    <img src="{{ $imagen_nueva->temporaryUrl() }}">
                    
                @endif
            </div>



        <x-input-error :messages="$errors->get('imagen_nueva')" 
            class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs"
        />
    </div>


    <x-primary-button class="w-full flex-col py-4">
        {{ __('Guardar Cambios') }}
    </x-primary-button>
</form>

