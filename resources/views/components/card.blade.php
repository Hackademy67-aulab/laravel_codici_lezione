{{-- <div class="col-12 col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['name']}}">
        <div class="card-body">
        <h5 class="card-title">{{$product['name']}}</h5> --}}

        {{-- <p>{{$product['price']}}</p>
        <p>{{$product['description']}}</p>
        <a href="{{route('productDetail', ['id'=> $product['id']])}}" class="btn btn-primary">Dettaglio</a>


        <p>{{$worker['surname']}}</p>
        <p>{{$worker['age']}}</p>
        <a href="{{route('workerDetail', ['id'=>$worker['id']])}}" class="btn btn-primary">Dettaglio</a> --}}

        
        {{-- @if(Route::currentRouteName()=='')
        @else
        @endif --}}
        
        {{-- Prima soluzione --}}
        {{-- <img src="{{$img}}" class="card-img-top" alt="{{$name}}">
        <div class="card-body">
            <h5 class="card-title">{{$name}}</h5>
            
            <p>{{$price}}</p>
            
            <p>{{$description}}</p>
            
            <a href="{{route('productDetail', ['id'=> $id])}}" class="btn btn-primary">Dettaglio</a> --}}
            
        {{-- </div>
    </div>
</div> --}}


{{-- RISOLUZIONE ESERCIZIO PRIMI STEP --}}
<div class="col-12 col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="{{$array['img']}}" class="card-img-top" alt="{{$array['name']}}">
        <div class="card-body">
        <h5 class="card-title">{{$array['name']}}</h5>

        @if(Route::currentRouteName()=='productsPage')
            <p>{{$array['price']}}</p>
            <p>{{$array['description']}}</p>
            <a href="{{route('productDetail', ['id'=>$array['id']])}}" class="btn btn-primary">Dettaglio</a>
        @else
            <p>{{$array['surname']}}</p>
            <p>{{$array['age']}}</p>
            <a href="{{route('workerDetail', ['id'=>$array['id']])}}" class="btn btn-primary">Dettaglio</a>
        @endif

        </div>
    </div>
</div>

