<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-content-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">I miei articoli</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>Non hai ancora creato nessun articolo</h3>
                    <a href="{{ route('article.create') }}" class="btn btn-primary">Crea il primo articolo</a>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>