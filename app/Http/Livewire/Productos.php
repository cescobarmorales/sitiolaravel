<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $productos, $descripcion, $cantidad, $estado, $qr;
    public $modal=false;
    public $search;



    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos(){
        $this->descripcion = '';
        $this->fec_vencimiento = '';
        $this->cantidad = '';
        $this->estado = '';
        $this->qr = '';
        $this->id_producto = '';

    }

    public function editar($id)
    {
        $producto = Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->fec_vencimiento = $producto->fec_vencimiento;
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;
        $this->qr = $producto->qr;
        $this->abrirModal();
    }

    public function borrar($id){
        Producto::find($id)->delete();
        session()->flash('message', '¡Registro eliminado exitosamente!');


        $this->emit('error');
        $this->emit('render');

    }

    public function guardar(){
        Producto::updateOrCreate(['id'=>$this->id_producto],
            [
                'descripcion' => $this->descripcion,
                'cantidad' => $this->cantidad,
                'fec_vencimiento' => $this->fec_vencimiento,
                'qr' => $this->qr

            ]);
        session()->flash('message',
            $this->id_producto ? '¡Actualización exitosa!' : '¡Registro agregado exitosamente!');

        $this->cerrarModal();
        $this->limpiarCampos();

    }

}
