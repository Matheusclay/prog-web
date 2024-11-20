<x-app-layout>
    <h5 class="mt-3">Gerenciar Reservas</h5>

    <a class="btn btn-success" href="/reserva/create">
        Criar nova Reserva
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Quarto</th>
                <th>Hóspede</th>
                <th>Entrada</th>
                <th>Saída</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->quarto->numero }}</td>
                <td>{{ $reserva->nome_hospede }}</td>
                <td>{{ $reserva->data_entrada }}</td>
                <td>{{ $reserva->data_saida }}</td>
                <td>
                    <a href="/reserva/{{ $reserva->id }}/edit" class="btn btn-warning">Alterar</a>
                    <form action="/reserva/{{ $reserva->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja excluir esta reserva?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
