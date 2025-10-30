<?php

use App\Livewire\Movimentacoes\MovimentacaoCreate;
use App\Livewire\Produtos\ProdutosCreate;
use App\Livewire\Produtos\ProdutosDelete;
use App\Livewire\Produtos\ProdutosEdit;
use App\Livewire\Produtos\ProdutosIndex;
use App\Livewire\Usuarios\UsuariosCreate;
use App\Livewire\Usuarios\UsuariosDelete;
use App\Livewire\Usuarios\UsuariosEdit;
use App\Livewire\Usuarios\UsuariosIndex;
use Illuminate\Support\Facades\Route;

// Usuario

Route::get('/Usuario/Create', UsuariosCreate::class)->name('usuario.create');

Route::get('/Usuario/{id}/Edit', UsuariosEdit::class)->name('usuario.edit');

Route::get('/Usuario/{id}/Delete', UsuariosDelete::class)->name('usuario.delete');

Route::get('/Usuario/Index', UsuariosIndex::class)->name('usuario.index');
// Produtos

Route::get('/Produto/Create', ProdutosCreate::class)->name('produto.create');

Route::get('/Produto/{id}/Edit', ProdutosEdit::class)->name('produto.edit');

Route::get('/Produto/{id}/Delete', ProdutosDelete::class)->name('prodto.delete');

Route::get('/Produto/Index', ProdutosIndex::class)->name('produto.index');

// Movimentações

Route::get('/Movimentacao/Create', MovimentacaoCreate::class)->name('movimentacao.create');