<x-app-layout>
    <h5>{{ isset($estadia) ? 'Editar Estadia' : 'Nova Estadia' }}</h5>

    <form action="{{ isset($estadia) ? route('estadias.update', $estadia->id) : route('estadias.store') }}" method="POST">
        @csrf
        @if(isset($estadia))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="quarto_id" class="form-label">Quarto</label>
            <select name="quarto_id" class="form-control">
                @foreach($quartos as $quarto)
                <option value="{{ $quarto->id }}" {{ isset($estadia) && $estadia->quarto_id == $quarto->id ? 'selected' : '' }}>
                    Quarto {{ $quarto->numero }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="reserva_id" class="form-label">Reserva</label>
            <select name="reserva_id" class="form-control">
                @foreach($reservas as $reserva)
                <option value="{{ $reserva->id }}" {{ isset($estadia) && $estadia->reserva_id == $reserva->id ? 'selected' : '' }}>
                    Reserva {{ $reserva->id }} ({{ $reserva->data_inicio }} - {{ $reserva->data_fim }})
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</x-app-layout>
