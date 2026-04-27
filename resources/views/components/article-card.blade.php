<div class="card" style="width: 18rem;">
    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->titolo }}">
    <div class="card-body">
        <h5 class="card-title">{{ $article->titolo }}</h5>
        <p class="card-subtitle">{{ $article->descrizione }}</p>
        <p class="card-text">Creato da: {{ $article->user?->name ?? 'Nessun utente' }}</p>
        <p class="card-text">{{ $article->prezzo }} €</p>
        <a href="{{ route('article.show', $article) }}" class="btn btn-primary">Dettaglio</a>
        <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">Modifica</a>
        <form action="{{ route('article.delete', $article) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
        </form>
    </div>
</div>
