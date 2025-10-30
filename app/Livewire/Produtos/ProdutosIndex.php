<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;
use Livewire\WithPagination;

class ProdutosIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
          $produtos = Produtos::where('nome', 'like', "%{$this->search}%")
        ->orWhere('nome', 'like', "%{$this->search}%")
        ->paginate($this->perPage);
        return view('livewire.produtos.produtos-index', compact('produtos'));
    }

    public function delete($id)
    {
        $produto = Produtos::findOrFail($id);
        Produtos::findOrFail($produto->id)->delete();
        session()->flash('error', 'Usuario deletado com sucesso.');
    }
}
