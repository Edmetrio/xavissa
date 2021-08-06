<?php

namespace App\Http\Livewire;

use App\Models\Models\Categoria;
use App\Models\Models\Produto;
use Livewire\Component;

class Venda extends Component
{
    public $categoria;
    public $produto;

    public $selectedCategoria = NULL;

    public function mount()
    {
        $this->categoria = Categoria::all();
        $this->produto = collect();
    }

    public function render()
    {
        return view('livewire.venda');
    }

    public function updatedSelectedCategoria($categoria)
    {
        if(!is_null($categoria))
        {
            $this->produto = Produto::where('categoria_id', $categoria)->get();
        }
    }
}
