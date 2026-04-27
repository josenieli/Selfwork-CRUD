<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-white text-center">Profilo di {{ Auth::user()->name }}</h2>
            @forelse (Auth::user()->articles as $article)
                <div class="col-12 col-md-4 mb-3">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <h3>Non hai caricato nessun articolo</h3>
            @endforelse
        </div>
    </div>
</x-layout>