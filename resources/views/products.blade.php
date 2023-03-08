<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title>Pagina prodotti</title>
  </head>
  <body>
    
    <h1>Tutti i prodotti</h1>

    <a href="/">Vai ad home</a>
    <a href="/prima-pagina">Prima Pagina</a>
    
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['name']}}">
                        <div class="card-body">
                        <h5 class="card-title">{{$product['name']}}</h5>

                        <p>{{$product['price']}}</p>

                        <p>{{$product['description']}}</p>

                        <a href="#" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/script.js"></script>
  </body>
</html>



