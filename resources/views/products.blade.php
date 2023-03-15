<x-layout>

  <x-slot name="title">Pagina prodotti</x-slot>

  <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <h1>Tutti i prodotti</h1>
        </div>
      </div>
    </div>
    
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <x-card
                    {{-- img="{{$product['img']}}"
                    name="{{$product['name']}}"
                    price="{{$product['price']}}"
                    description="{{$product['description']}}"
                    id="{{$product['id']}}" --}}
                    :array="$product"
                />
            @endforeach
        </div>
    </div>
</x-layout>



