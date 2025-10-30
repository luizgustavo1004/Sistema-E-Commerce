<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;

class ProdutosEdit extends Component
{

    public $produtoId;
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $quantidade_minima;


    public function mount($id)
    {
        $produto = Produtos::find($id);

        if ($produto == null) {
            session()->flash('error', 'Id do Produto nao encontrado');
            // return $this->redirect(route('Ambiente.index'));

        } else {
            $this->produtoId = $produto->id;
            $this->nome = $produto->nome;
            $this->descricao = $produto->descricao;
            $this->preco = $produto->preco;
            $this->quantidade = $produto->quantidade;
            $this->quantidade_minima = $produto->quantidade_minima;
        }
    }

    public function save()
    {
        $produto = Produtos::find($this->produtoId);


        $produto->nome = $this->nome;
        $produto->descricao = $this->descricao;
        $produto->preco = $this->preco;
        $produto->quantidade = $this->quantidade;
        $produto->quantidade_minima = $this->quantidade_minima;
        $produto->save();

        // return $this->redirect(route('Ambiente.index'));
        return $this->redirect(route('produto.index'));
        session()->flash('message', 'Usuario atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.produtos.produtos-edit');
    }
}
