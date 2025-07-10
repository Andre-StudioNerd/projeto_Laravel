<x-layout title="Listar Músicas">
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Lista de Músicas</h1>
            <a href="/musicas/criar" class="btn btn-primary">Adicionar música</a>
        </div>

        <ul class="list-group">
            @foreach($musicas as $musica)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $musica->nome }}
                    <button class="btn btn-sm btn-outline-primary">Ouvir</button>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
