<x-app-layout>
    <h5 class="mt-3">Editar Reserva</h5>

    <form action="/reserva/{{ $reserva->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Especifica que o método é PUT -->

        <div class="row">
            <div class="col">
                <label for="quarto_id" class="form-label">Selecione o Quarto:</label>
                <select name="quarto_id" class="form-control">
                    @foreach($quartos as $quarto)
                    <option value="{{ $quarto->id }}" {{ $quarto->id == $reserva->quarto_id ? 'selected' : '' }}>
                        Quarto {{ $quarto->numero }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <label for="nome_hospede" class="form-label">Nome do Hóspede:</label>
                <input type="text" name="nome_hospede" class="form-control" value="{{ $reserva->nome_hospede }}" required />
            </div>

            <div class="col">
                <label for="data_entrada" class="form-label">Data de Entrada:</label>
                <input type="date" name="data_entrada" class="form-control" value="{{ $reserva->data_entrada }}" required />
            </div>

            <div class="col">
                <label for="data_saida" class="form-label">Data de Saída:</label>
                <input type="date" name="data_saida" class="form-control" value="{{ $reserva->data_saida }}" required />
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
</x-app-layout>
