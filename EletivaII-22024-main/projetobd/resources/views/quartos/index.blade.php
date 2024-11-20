<x-app-layout>

    <h5 class="mt-3">Gerenciar Quartos</h5>

    <a class="btn btn-success" href="/quarto/create">
        Inserir novo Quarto
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Número do quarto</th>
                <th>Andar</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quartos as $q)
            <tr>
                <td>{{ $q->numero }}</td>
                <td>{{ $q->andar }}</td>
                <td>{{ $q->descricao }}</td>
                
                <td>
                    <a href="/quarto/{{ $q->id }}/edit" class="btn btn-warning">Alterar</a>

                    <form action="/quarto/{{ $q->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este quarto?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
