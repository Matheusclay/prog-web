<x-app-layout>

    <h5>Editar os valores do Quarto</h5>

    <form action="/quarto/{{ $quarto->id }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="row">
            <div class="col">
                <label for="numero" class="form-label">Informe o número do quarto:</label>
                <input type="text" name="numero" class="form-control" value="{{ $quarto->numero }}"/>
            </div>

            <div class="col">
                <label for="andar" class="form-label">Informe o andar:</label>
                <input type="text" name="andar" class="form-control" value="{{ $quarto->andar }}"/>
            </div>

            <div class="col">
                <label for="descricao" class="form-label">Digite uma descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{ $quarto->descricao }}"/>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>
