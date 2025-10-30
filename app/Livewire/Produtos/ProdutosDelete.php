<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;

class ProdutosDelete extends Component
{

    public $produtoId;
    public $nome;


  public function mount($id){
        $produto = Produtos::find($id);
        if($produto == null){
            session()->flash('error', 'Produto nao encontrado');
        } else {
            $produto = Produtos::find($id);
            $this->produtoId = $produto->id;
            $this->nome = $produto->nome;
            
        }
    }

    public function delete(){

    $produto = Produtos::find($this->produtoId);
    $produto->delete();

    session()->flash('message', 'Produto Deletado com sucesso');
    return $this->redirect(route('produto.index'));
    // return redirect()->route();
    
}


    public function render()
    {
        return view('livewire.produtos.produtos-delete');
    }
}
