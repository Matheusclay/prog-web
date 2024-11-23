<x-app-layout>
    <h5>Lista de Reservas</h5>

    <a href="{{ route('reservas.create') }}" class="btn btn-success">Nova Reserva</a>

    <table class="table">
        <thead>
            <tr>
                <th>Hóspede</th>
                <th>Data de Início</th>
                <th>Data de Fim</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->hospede->nome }}</td>
                <td>{{ $reserva->data_inicio }}</td>
                <td>{{ $reserva->data_fim }}</td>
                <td>
                    <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
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
