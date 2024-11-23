<x-app-layout>
    <h5>{{ isset($hospede) ? 'Editar Hóspede' : 'Novo Hóspede' }}</h5>

    <form action="{{ isset($hospede) ? route('hospedes.update', $hospede->id) : route('hospedes.store') }}" method="POST">
        @csrf
        @if(isset($hospede))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $hospede->nome ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $hospede->email ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="{{ $hospede->telefone ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</x-app-layout>
