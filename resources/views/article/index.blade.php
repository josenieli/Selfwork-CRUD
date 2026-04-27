<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-content-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center ">
                    <h1 class="text-center">I miei articoli</h1>

                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->titolo }}</h5>
                            <p class="card-subtitle">{{ $article->descrizione }}</p>
                            <p class="card-text">Creato dall'utente: {{ $article->user->name ?? 'Nessun utente' }} </p>

                            <p class="card-text">{{ $article->prezzo }} €</p>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio
                                articolo</a>
                            <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-primary">Modifica
                                articolo</a>
                            <form action="{{ route('article.delete', compact('article')) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> elmina articolo </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
