<?php

namespace App\Livewire\Usuarios;

use App\Models\Usuarios;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosIndex extends Component
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
        $usuarios = Usuarios::where('nome', 'like', "%{$this->search}%")
        ->orWhere('nome', 'like', "%{$this->search}%")
        ->paginate($this->perPage);
        return view('livewire.usuarios.usuarios-index', compact('usuarios'));
    }

     public function delete($id)
    {
        $usuario = Usuarios::findOrFail($id);
        Usuarios::findOrFail($usuario->id)->delete();
        session()->flash('error', 'Usuario deletado com sucesso.');
    }
}
