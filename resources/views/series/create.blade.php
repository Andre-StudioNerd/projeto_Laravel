<x-layout title="Adicionar Séries">
    <div class="container my-4">
        <h1 class="mb-4">Adicionar Série</h1>

        <form action="" method="post">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da série" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-layout>
