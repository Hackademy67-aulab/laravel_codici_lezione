<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <h1 class="text-center">I nostri collaboratori</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($workers as $worker)
                <x-card
                    :array="$worker"
                />
                {{-- <div class="col-12 col-md-4 mt-5 d-flex justify-content-center">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{$worker['img']}}" class="card-img-top" alt="{{$worker['name']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$worker['name']}}</h5>
                            <p>{{$worker['surname']}}</p>
                            <p>{{$worker['age']}}</p>
                            <a href="{{route('workerDetail', ['id'=>$worker['id']])}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div> --}}
            @endforeach
        </div>
    </div>
</x-layout>