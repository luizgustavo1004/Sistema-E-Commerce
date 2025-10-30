<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-warning text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Cadastrar Movimentacao
        </h3>

        @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="store">

             <div class="mb-3">
                <div class="mb-3">
                    <label for="produto_id" class="form-label">Produto ID</label>
                    <select class="form-select" id="produto_id" wire:model.defer="produto">
                        <option hidden>Selecione o Produto que ira receber o valor de movimento</option>
                        @foreach ($produtos as $produto)
                            <option value={{ $produto->id }}> {{ $produto->id }} </option>
                        @endforeach
                    </select>
                     @error  ('produto_id')<span class="text-danger small">{{ $message }}</span>   @enderror
                </div>

                        <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>

                <select class="form-select @error('tipo') is-invalid @enderror" id="tipo" wire:model.defer="tipo">
                    <option hidden>Selecione o tipo de entrada ou saida</option>
                    <option value=E>Entrada</option>
                    <option value=S>Saida</option>
                </select>

                @error('tipo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <input type="text" wire:model="quantidade" class="form-control" placeholder="Quantidade.: 60">
                @error('quantidade') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            

         

        

            <button type="submit" class="btn btn-warning w-100">
                <i class="bi bi-save2 me-2"></i>Cadastrar Movimentacao
            </button>

      
            
        </form>
    </div>
</div>