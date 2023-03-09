<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title>Workers page</title>
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
            <h1 class="text-center">I nostri collaboratori</h1>
            
            <a href="{{route('firstPage')}}">Prima pagina</a>
            <a href="{{route('productsPage')}}">Tutti i prodotti</a>
            <a href="{{route('homePage')}}">Torna a home</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($workers as $worker)
                <div class="col-12 col-md-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$worker['img']}}" class="card-img-top" alt="{{$worker['name']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$worker['name']}}</h5>
                            <p>{{$worker['surname']}}</p>
                            <p>{{$worker['age']}}</p>
                            <a href="{{route('workerDetail', ['id'=>$worker['id']])}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/script.js"></script>
  </body>
</html>