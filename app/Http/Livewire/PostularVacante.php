<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Doctrine\Inflector\Rules\English\Rules;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    //Mount nos ayuda a que cuando cargue el componente, este mismo mount se encarga de detectar en que vacante nos encontramos.
    public function mount(Vacante $vacante)
    {
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        $datos = $this->validate();

        //Almacenar el CV
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        //Crear el candidato a la vacante
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        //Crear la notificacion y enviar el email
        $this->vacante->reclutador->notify(new NuevoCandidato( $this->vacante->id,  $this->vacante->titulo,  auth()->user()->id ));

        //Mostrar el usuario un mensaje de ok
        session()->flash('mensaje', 'Se envio correctamente la peticion para la compra del producto.');

        return redirect()->back();
    }



    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
