<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Usuario <i class="bi bi-people-fill"></i></h2>
        </div>

        <div class="col-md-6 text-end">
            <a href="{{ route('usuario.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo Usuario
            </a>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control" wire:model.live="search"
                        placeholder="Buscar usuario...">
                </div>
                <div class="col-md-3">
                    <select wire:model.live="perPage" class="form-select">
                        <option value="15">15 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>

             @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id}}</td>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->senha }}</td>
                                <td>


                                    <a href="{{ route('usuario.edit', $usuario->id) }}"
                                        class="btn btn-sm btn-primary">
                                        <i style="color: black" class="bi bi-pencil"></i>
                                    </a>

                                    <button wire:click="delete({{ $usuario->id }})" class="btn btn-sm btn-danger"
                                        wire:confirm="Tem certeza? que deseja deletar este usuario?">
                                        <i style="color: black" class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum Usuario encontrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $usuarios->links() }}
             </div>

        </div>
    </div>
</div>