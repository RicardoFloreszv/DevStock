<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">¿Estas interesado en este producto?</h3>

    @if (session()->has('mensaje'))
        <p class="rounded-lg uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5">
            {{session('mensaje')}}
        </p>
    
    @else
        <form class="w-96 mt-5" wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-input-label class="text-center" for="cv" :value="__('send a notification to the seller')" />
                {{-- <x-text-input 
                    id="cv" 
                    class="block mt-1 w-full" 
                    type="file" wire:model="cv"
                    accept=".pdf"
                /> --}}
            </div>

            <x-input-error :messages="$errors->get('cv')" 
                class="bg-red-100 border border-red-500 text-red-700 font-bold uppercase p-2 mt-2 text-xs" 
            />

            <x-primary-button class="w-full flex-col py-4 my-3">
                {{ __('Enviar peticion') }}
            </x-primary-button>

        </form>
        
    @endif


</div>
