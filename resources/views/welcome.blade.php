<x-layout title="Listar">
    <div
     class="container my-4 bg-secondary text-white p-3">
     <h1>Minha Lista</h1>
    </div>

    <div class="container my-4">
        <div class="border-bottom border-top border-secondary d-flex justify-content-between align-items-center mb-3">
            <h3>Lista de Séries</h3>
            <a  href="/series/" class="btn btn-primary">Abrir</a>
        </div>
        <div class="border-bottom border-top border-secondary d-flex justify-content-between align-items-center mb-3">
            <h3>Lista de Músicas</h3>
            <a href="/musicas" class="btn btn-primary">Abrir</a>
        </div>
        <div class="border-bottom border-top border-secondary d-flex justify-content-between align-items-center mb-3">
            <h3>Lista de Filmes</h3>
            <a href="/filmes" class="btn btn-primary">Abrir</a>
        </div>
        <div class="border-bottom border-top border-secondary d-flex justify-content-between align-items-center mb-3">
            <h3>Google</h3>
            <a href="/google" class="btn btn-danger">Visitar</a>
        </div>
        <ul class="list-group">

        </ul>
    </div>
</x-layout>
