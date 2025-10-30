<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-warning text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Editar Produto
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
                <input type="text" wire:model="nome" class="form-control" required placeholder="Nome.: Alvejante">
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Descricao</label>
                <input type="descricao" wire:model="descricao" class="form-control" required placeholder="Email.: Produto De Boa Qualidade">
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Preco</label>
                <input type="preco" wire:model="preco" class="form-control" placeholder="preco.: 85.99">
                @error('preco') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <input type="quantidade" wire:model="quantidade" class="form-control" placeholder="quantidade.: 30">
                @error('quantidade') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade Minima</label>
                <input type="quantidade_minima" wire:model="quantidade_minima" class="form-control" placeholder="preco.: 5">
                @error('quantidade_minima') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-save2 me-2"></i>Editar Produto
            </button>
            @endif
      
            
        </form>
    </div>
</div>