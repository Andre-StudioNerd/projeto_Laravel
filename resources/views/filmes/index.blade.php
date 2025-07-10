<x-layout title="Listar Filmes">
    <div class="container my-4">
         <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Lista de Filmes</h1>
            <a href="/filmes/criar" class="btn btn-primary">Adicionar filme</a>
        </div>

        <ul class="list-group">
            @foreach($filmes as $filme)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $filme->nome }}
                    <button class="btn btn-sm btn-outline-secondary">Detalhes</button>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
