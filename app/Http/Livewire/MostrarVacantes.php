<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{

    protected $listeners = ['eliminarVacante'];

    public function eliminarVacante(Vacante $vacante )
    {
        $vacante->delete();

        session()->flash('mensaje',('El articulo ' . $vacante->titulo . ' ha sido eliminado'));
        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
