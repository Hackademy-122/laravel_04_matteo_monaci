<x-layout>

    <h1 class="text-center mt-5 d-1">Inserisci un nuovo articolo!</h1>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">

            {{-- questo snippet può stare ovunque all'interno della vista dove si dovrà visualizzare l'errore (meglio usare the @error directive come sotto, visto che si può usare ovunque anche nell'attributo class) --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

                <form method="POST" action="{{route('newArticleStore')}}" enctype="multipart/form-data">
                
                    @csrf

                    <div class="mb-3">
                    <label class="form-label">Nome annuncio</label>
                    <input name="name" type="text" class="form-control input-error @error('name') is-invalid @enderror" @error('name') placeholder="{{$message}}" @enderror>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control input-error @error('price') is-invalid @enderror" @error('price') placeholder="{{$message}}" @enderror>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input name="brand" type="text" class="form-control  input-error @error('brand') is-invalid @enderror" value="{{old('brand')}}" @error('brand') placeholder="{{$message}}" @enderror>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagine</label>
                        <input name="img" type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout> 