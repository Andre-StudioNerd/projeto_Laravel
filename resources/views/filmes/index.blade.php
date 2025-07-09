<x-layout title="Listar Filmes">
    <div class="container my-4">
        <h1 class="mb-4">Lista de Filmes</h1>

        <ul class="list-group">
            @foreach($filmes as $filme)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $filme }}
                    <button class="btn btn-sm btn-outline-secondary">Detalhes</button>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
