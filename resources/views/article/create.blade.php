<x-layout>

    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-content-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center ">
                    <h1 class="text-center">Inserisci un nuovo articolo</h1>

                </div>
            </div>
        </div>
    </header>

    <x-display-error/>
    <x-display-message/>

    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class="rounded-4 shadow bg-secondary-subtle p-3" action="{{ route('article.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="titolo" class="form-label">Titolo articolo</label>
                        <input name="titolo" type="text" value="{{ old('titolo') }}" class="form-control"
                            id="titolo">
                    </div>
                    <div class="mb-3">
                        <label for="descrizione" class="form-label">descrizione dell'articolo</label>
                        <textarea name="descrizione" id="descrizione" class="form-control" cols="30" rows="10">{{ old('descrizione') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="prezzo" class="form-label">Prezzo dell'articolo </label>
                        <input name="prezzo" type="number" step="0.01" min="0" placeholder="0.00" value="{{ old('prezzo') }}" class="form-control"
                            id="prezzo">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control d-flex me-3" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>

            </div>
        </div>
    </div>

</x-layout>
