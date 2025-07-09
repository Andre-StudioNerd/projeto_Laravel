<x-layout title="Listar Músicas">
    <div class="container my-4">
        <h1 class="mb-4">Lista de Músicas</h1>

        <ul class="list-group">
            @foreach($musicas as $musica)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $musica }}
                    <button class="btn btn-sm btn-outline-primary">Ouvir</button>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
