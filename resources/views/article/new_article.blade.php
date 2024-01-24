<x-layout>

    <h1 class="text-center mt-5 d-1">Inserisci un nuovo articolo!</h1>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('newArticleStore')}}">
                    @csrf

                    <div class="mb-3">
                    <label class="form-label">Nome annuncio</label>
                    <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input name="brand" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout> 