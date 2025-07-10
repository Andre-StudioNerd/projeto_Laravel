<x-layout title="Adicionar Músicas">
    <div class="container my-4">
        <h1 class="mb-4">Adicionar Música</h1>

        <form action="/musicas/salvar" method="post">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome da música" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-layout>
