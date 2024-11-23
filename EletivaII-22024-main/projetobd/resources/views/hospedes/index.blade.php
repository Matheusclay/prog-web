<x-app-layout>
    <h5>Lista de Hóspedes</h5>

    <a href="{{ route('hospedes.create') }}" class="btn btn-success">Novo Hóspede</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hospedes as $hospede)
            <tr>
                <td>{{ $hospede->nome }}</td>
                <td>{{ $hospede->email }}</td>
                <td>{{ $hospede->telefone }}</td>
                <td>
                    <a href="{{ route('hospedes.edit', $hospede->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('hospedes.destroy', $hospede->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
