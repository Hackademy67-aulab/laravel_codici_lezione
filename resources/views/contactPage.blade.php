<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Contattaci</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="row col-12 col-md-6">
                <form method="POST" action="{{route('contactSubmit')}}">
                    {{-- CROSS SITE REQUEST FORGERY --}}
                    @csrf

                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Nome</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Scrivi qualcosa:</label>
                        <textarea name="text" class="form-control" id="exampleInputText" cols="30" rows="10"></textarea>
                    </div>


                    {{-- NEL FORM CI DEVE ESSERE UN UNICO TASTO DI TIPO SUBMIT --}}
                    <button type="submit" class="btn btn-primary">Invia mail</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>