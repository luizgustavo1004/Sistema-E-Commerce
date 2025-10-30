<?php

namespace App\Livewire\Movimentacoes;

use App\Models\Movimentacoes;
use App\Models\Produtos;
use Livewire\Component;

class MovimentacaoCreate extends Component
{

    public $produto;
    public $tipo;
    public $quantidade;
    public $data_movimentacao;

     public function store()
    {

        if($this->produto == null){
            session()->flash('error', 'nao foi possivel encontrar o produto');
        }
//se for E $tipo =  
        Movimentacoes::create([
            'produto_id' => $this->produto,
            'tipo' => $this->tipo,
            'quantidade' => $this -> quantidade,
            'data_movimentacao' => $this -> data_movimentacao = now()
        ]);

        //$produto->quantidade = $produto->quantidade + $this->quantidade
        //depois que fizer a operação, atualizar o produto
        
        $produto = Produtos::find($this->produto);

        if($produto == null){
            return 0; 
        }

        if($this->tipo == 'E'){
           $produto->quantidade = $produto->quantidade + $this->quantidade;
        } 
        if($this->tipo == 'S'){
           $produto->quantidade = $produto->quantidade - $this->quantidade;
        }
        $produto->save();

        session()->flash('message', 'Movimentacao Cadastrado com sucesso');
        // return $this->redirect(route('movimentacoes.index'));
    }

    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.movimentacoes.movimentacao-create', compact('produtos'));
    }
}
