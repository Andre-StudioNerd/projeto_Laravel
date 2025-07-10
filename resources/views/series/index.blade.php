<x-layout title="Listar Séries">
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Lista de Séries</h1>
            <a href="/series/criar" class="btn btn-primary">Adicionar Série</a>
        </div>



        <ul class="list-group">
            @foreach($series as $serie)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $serie->nome }}
                    <a href="#" class="btn btn-sm btn-outline-secondary">Editar</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
