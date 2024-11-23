<x-app-layout>
    <h5>{{ isset($reserva) ? 'Editar Reserva' : 'Nova Reserva' }}</h5>

    <form action="{{ isset($reserva) ? route('reservas.update', $reserva->id) : route('reservas.store') }}" method="POST">
        @csrf
        @if(isset($reserva))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="hospede_id" class="form-label">Hóspede</label>
            <select name="hospede_id" class="form-control">
                @foreach($hospedes as $hospede)
                <option value="{{ $hospede->id }}" {{ isset($reserva) && $reserva->hospede_id == $hospede->id ? 'selected' : '' }}>
                    {{ $hospede->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="data_inicio" class="form-label">Data de Início</label>
            <input type="date" name="data_inicio" class="form-control" value="{{ $reserva->data_inicio ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="data_fim" class="form-label">Data de Fim</label>
            <input type="date" name="data_fim" class="form-control" value="{{ $reserva->data_fim ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</x-app-layout>
