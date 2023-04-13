<div>

    <livewire:filtrar-vacantes />



    <div class="py-12">
        <div class="max-w-7xl mx-auto p-4
                    md:max-w-xl
                    lg:max-w-5xl
                    xl:max-w-screen-2xl">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">New & Featured</h3>
            
            <div class="bg-white shadow-sm rounded-lg p-4 
                        grid grid-cols-1 justify-items-center
                            lg:grid-cols-2 
                            xl:grid-cols-3 xl:">
                @forelse ($vacantes as $vacante )  
                <div class="max-w-sm rounded overflow-hidden shadow-lg mx-2 my-3 sm:m-4
                            xl:max-w-4xl">
                    <img class="lg:h-80 w-full" src="{{ asset('storage/vacantes' . '/' . $vacante->imagen ) }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">                            
                        <a href="{{route('vacantes.show', $vacante->id)}}">
                            {{$vacante->titulo}}
                        </a></div>
                      <p class="text-gray-700 text-base">
                        {{$vacante->descripcion}}
                      </p>
                      <p class="text-gray-700 font-bold text-base">
                        Size: <span class="font-normal">{{$vacante->salario_id}}</span>
                      </p>
                    </div>


                    <div class="w-full bg-gray-200 text-center font-semibold p-2">
                      <p>$ {{$vacante->precio}}</p>
                      
                    </div>
                    <div class="">
                        <a href="{{route('vacantes.show', $vacante->id)}}"
                            class="bg-gray-900 p-2 sm:p-3 text-sm uppercase font-bold text-white block text-center"
                            >
                            View product
                        </a>
                    </div>
                  </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay productos con esos filtros</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

{{-- d
<div>

    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">New & Featured</h3>
            
            <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                @forelse ($vacantes as $vacante )
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                            <a href="{{route('vacantes.show', $vacante->id)}}">
                                {{$vacante->titulo}}
                            </a>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->empresa}}</p>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->categoria->categoria}}</p>
                            <p class="text-base text-gray-600 mb-1">{{$vacante->salario->salario}}</p>
                            <p class="font-bold text-xs text-gray-600">
                                Ultimo dia para mandar la peticion
                                <span>{{$vacante->ultimo_dia->format('d/m/Y')}}</span>
                            </p>
                            <div>
                                <img src="{{ asset('storage/vacantes' . '/' . $vacante->imagen ) }}" alt="{{ 'Imagen vacante' . $vacante->titulo }}"
                                    width="100" height="100">
                            </div>
                        </div>

                        <div>
                            <p class="mr-10 text-orange-400 font-bold">$ {{$vacante->precio}}</p>
                        </div>

                        <div class="mt-5 md:mt-0">
                            <a href="{{route('vacantes.show', $vacante->id)}}"
                                class="bg-gray-700 p-3 text-sm uppercase font-bold text-white rounded-lg block text-center"
                                >
                                Ver Producto
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay productos con esos filtros</p>
                @endforelse
            </div>
        </div>
    </div>
</div> --}}