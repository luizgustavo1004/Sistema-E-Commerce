<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-warning text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Criar Usuario
        </h3>

        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="store">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" wire:model="nome" class="form-control" required placeholder="Nome.: luiz">
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control" required placeholder="Email.: Luizpilan20@gmail.com">
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control" placeholder="password.: #luiz10042008">
                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-save2 me-2"></i>Criar Usuario
            </button>

      
            
        </form>
    </div>
</div>