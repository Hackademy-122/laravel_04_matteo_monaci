<x-layout>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h1 class="text-center mt-5 d-1">Benvenuto</h1>

    <div class="container mt-5">
        <div class="row">
                @foreach ($articles as $article)
                    <div class="col-4 d-flex justify-content-center mb-5">
                        <div class="card" style="width: 18rem;">
                            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->name}}</h5>
                                <p class="card-text">{{$article->brand}}</p>
                                <p class="card-text">{{$article->price}}</p>
                                <a href="#" class="btn btn-primary">Aquista subito!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


</x-layout>