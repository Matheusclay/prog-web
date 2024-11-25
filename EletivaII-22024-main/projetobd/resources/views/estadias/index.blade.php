<x-app-layout>
    <h5>Lista de Estadias</h5>

    <a href="{{ route('estadias.create') }}" class="btn btn-success">Nova Estadia</a>

    <table class="table">
        <thead>
            <tr>
                <th>Quarto</th>
                <th>Reserva</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estadias as $estadia)
            <tr>
                <td>{{ $estadia->quarto->numero }}</td>
                <td>{{ $estadia->reserva->id }} ({{ $estadia->reserva->data_inicio }} - {{ $estadia->reserva->data_fim }})</td>
                <td>
                    <a href="{{ route('estadias.edit', $estadia->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('estadias.destroy', $estadia->id) }}" method="POST" style="display:inline;">
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
