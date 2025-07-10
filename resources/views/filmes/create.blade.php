<x-layout title="Adicionar Músicas">
    <div class="container my-4">
        <h1 class="mb-4">Adicionar Filmes</h1>

        <form action="/filmes/salvar" method="post">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do filme" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-layout>
