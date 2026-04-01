<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-content-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center ">
                    <h1 class="text-center">Articolo {{$article->titolo}}</h1>

                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            
                <div class="col-12 col-md-4 ">
                    <div class="card " style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->titolo }}</h5>
                            <p class="card-subtitle">{{ $article->descrizione }}</p>
                            <p class="card-text">{{ $article->prezzo }} €</p>
                        </div>
                    </div>

                </div>
            
        </div>
    </div>
</x-layout>
