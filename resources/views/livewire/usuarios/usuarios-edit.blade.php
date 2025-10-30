<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-warning text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Editar Cliente
        </h3>

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
            </div>
        @else
@if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="save">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" wire:model="nome" class="form-control" required>
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control" required>
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nova Senha (opcional)</label>
                <input type="password" wire:model="password" class="form-control">
                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-save2 me-2"></i>Salvar Alterações
            </button>
            @endif
            
        </form>
    </div>
</div>