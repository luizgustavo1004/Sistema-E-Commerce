<?php

namespace App\Livewire\Usuarios;

use App\Models\Usuarios;
use Livewire\Component;

class UsuariosDelete extends Component
{

    public $usuarioId;
    public $nome;

    public function mount($id){
        $usuario = Usuarios::find($id);
        if($usuario == null){
            session()->flash('error', 'Usuario nao encontrado');
        } else {
            $usuario = Usuarios::find($id);
                $this->usuarioId = $usuario->id;
                $this->nome = $usuario->nome;
            
        }
    }

    public function delete(){

    $usuario = Usuarios::find($this->usuarioId);
    $usuario->delete();

    return $this->redirect(route('usuario.index'));
    session()->flash('message', 'Usuario Deletado com sucesso');
    
}

    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }
}
