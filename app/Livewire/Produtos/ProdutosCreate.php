<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;

class ProdutosCreate extends Component
{

    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;

     public function store()
    {

        Produtos::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this -> preco,
            'quantidade' => $this -> quantidade,
            'quantidade_minima' => $this -> quantidade_minima
        ]);
        session()->flash('message', 'Produto Cadastrado');
        return $this->redirect(route('produto.index'));
    }

    public function render()
    {
        return view('livewire.produtos.produtos-create');
    }
}
