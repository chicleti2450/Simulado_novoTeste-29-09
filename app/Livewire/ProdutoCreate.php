<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $material;
    public $cor;
    public $textura;
    public $peso;
    public $unidadeMedida;
    public $aplicacoes;
    public $prazoValidade;

    public function store(){
        $this-> validate([
        'material' => 'required',
        'cor' => 'required',
        'textura' => 'required',
        'peso' => 'required',
        'unidadeMedida' => 'required',
        'aplicacoes' => 'required',
        'prazoValidade' => 'required',
    ]);

    
        $produto = Produto::create([
        'material' => $this ->material,
        'cor' => $this ->cor,
        'textura' => $this ->textura,
        'peso' => $this ->peso,
        'unidadeMedida' => $this ->unidadeMedida,
        'aplicacoes' => $this ->aplicacoes,
        'prazoValidade' => $this ->prazoValidade
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso!');
        return redirect()->route('produto.index');

    }


    public function render()
    {
        return view('livewire.produto-create');
    }
}
