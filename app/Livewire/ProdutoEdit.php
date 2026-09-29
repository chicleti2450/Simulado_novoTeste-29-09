<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $material;
    public $cor;
    public $textura;
    public $peso;
    public $unidadeMedida;
    public $aplicacoes;
    public $prazoValidade;

    public function mount($id){
        $produto = Produto::find($id);
    }
    public function render()
    {
        return view('livewire.produto-edit');
    }
}
