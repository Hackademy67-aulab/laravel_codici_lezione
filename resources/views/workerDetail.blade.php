<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Workers detail</title>
  </head>
  <body>

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
    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>