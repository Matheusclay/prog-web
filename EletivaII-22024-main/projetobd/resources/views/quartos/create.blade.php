<x-app-layout>

    <h5>Cadastrar novo Quarto</h5>

    <form action="/quarto" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="numero" class="form-label">Informe o número quarto:</label>
                <input type="text" name="numero" class="form-control"/>

            </div>

            <div class="col">
                <label for="andar" class="form-label">Informe o andar:</label>
                <input type="text" name="andar" class="form-control"/>
            </div>

            <div class="col">
                <label for="descricao" class="form-label">Digite uma descrição:</label>
                <input type="text" name="descricao" class="form-control"/>
            </div>

            
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>