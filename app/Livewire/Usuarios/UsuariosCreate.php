<?php

namespace App\Livewire\Usuarios;

use App\Models\Usuarios;
use Livewire\Component;

class UsuariosCreate extends Component
{

    public $nome;
    public $email;
    public $password;

 public function store()
    {

        Usuarios::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'password' => $this -> password
        ]);
        session()->flash('message', 'Usuario Cadastrado');
        return $this->redirect(route('usuario.index'));
    }
    
    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }
}
