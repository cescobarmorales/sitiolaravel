<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Toogle extends Component
{
    
    public Model $model;
    public string $field;
    public bool $activo;

    public function mount()
    {
        $this->activo = (bool) $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toogle');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }

}
