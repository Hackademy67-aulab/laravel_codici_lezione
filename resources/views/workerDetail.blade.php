<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <h1 class="text-center">Dettaglio di {{$worker['name']}}</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{$worker['img']}}" class="card-img-top" alt="{{$worker['name']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$worker['name']}}</h5>
                        <p>{{$worker['surname']}}</p>
                        <p>{{$worker['age']}}</p>
                        <a href="{{route('workersPage')}}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>