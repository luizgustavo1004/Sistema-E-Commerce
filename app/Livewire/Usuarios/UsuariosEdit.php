<?php

namespace App\Livewire\Usuarios;

use App\Models\Usuarios;
use Livewire\Component;

class UsuariosEdit extends Component
{

    public $usuarioId;
    public $nome;
    public $email;
    public $password;

     public function mount($id)
    {
        $usuario = Usuarios::find($id);
        
        if($usuario == null){
            session()->flash('error', 'Id do Usuario nao encontrado');
            // return $this->redirect(route('Ambiente.index'));

        }  else{
        $this->usuarioId = $usuario->id;
        $this->nome = $usuario->nome;
        $this->email = $usuario->email;
        $this->password = $usuario->password;
        }
    }

    public function save()
    {
        $usuario = Usuarios::find($this->usuarioId);


        $usuario->nome = $this->nome;
        $usuario->email = $this->email;
        $usuario->password = $this->password;
        $usuario->save();

        // return $this->redirect(route('Ambiente.index'));
        session()->flash('message', 'Usuario atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }

    
}
