<x-layout>

  <x-slot name="title">Welcome Page</x-slot>

  @if (session('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
  @endif

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <h1 class="text-center">Ciao sono il primo progetto Laravel</h1>
        </div>
      </div>
    </div>
</x-layout>
    



