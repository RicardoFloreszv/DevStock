<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            <p class="font-bold text-md uppercase text-gray-800 my-3">Empresa:
                <span class="normal-case font-normal">{{$vacante->empresa}}</span>
            </p>

            <p class="font-bold text-md uppercase text-gray-800 my-3">Fecha de salida:
                <span class="normal-case font-normal">{{$vacante->ultimo_dia->toFormattedDateString()}}</span>
            </p>

            <p class="font-bold text-md uppercase text-gray-800 my-3">Categoria:
                <span class="normal-case font-normal">{{$vacante->categoria->categoria}}</span>
            </p>

            <p class="font-bold text-md uppercase text-gray-800 my-3">Talla:
                <span class="normal-case font-normal">{{$vacante->salario->salario}}</span>
            </p>

            <p class="font-bold text-md uppercase text-gray-800 my-3">Precio:
                <span class="normal-case font-normal">{{$vacante->precio}}</span>
            </p>
        </div>

    </div>

    <div class="md:grid md:grid-cols-6 gap-5 ">
        <div class="md:col-span-3">
            <img src="{{ asset('storage/vacantes' . '/' . $vacante->imagen ) }}" alt="{{ 'Imagen vacante' . $vacante->titulo }}">
        </div>

        <div class="md:col-span-3">
            <h2 class="text-2xl font-bold mb-5">Descripcion del puesto</h2>
            <p>{{$vacante->descripcion}}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
            <p class="">
                '¿Deseas comprar este producto?' <a class="font-bold text-indigo-600" href="{{ route('register') }}">Registrate y ten la oportunidad de comprar este producto</a>
            </p>
        </div>        
    @endguest

    @cannot('create', App\Models\Vacante::class)
      <livewire:postular-vacante :vacante="$vacante" />  
    @endcannot
    


</div>
