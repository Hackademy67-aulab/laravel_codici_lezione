<x-layout>
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <h1 class="text-center">Dettaglio prodotto {{$product['name']}}</h1>
        </div>
      </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['name']}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$product['name']}}</h5>

                    <p>{{$product['price']}}</p>

                    <p>{{$product['description']}}</p>

                    <a href="{{route('productsPage')}}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
</x-layout>


