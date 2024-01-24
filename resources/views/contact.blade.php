<x-layout>

    <h1 class="text-center mt-5 d-1">Contattaci!</h1>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('contactSubmit')}}">

                    @csrf

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">La tua Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Come ti chiami?</label>
                      <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="text" class="form-control" placeholder="Scrivi il tuo messaggio" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Messaggio</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia!</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>