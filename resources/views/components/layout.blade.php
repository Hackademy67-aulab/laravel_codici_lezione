<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    {{-- <title>{{isset($title) ? $title : 'LaravelProjecth67'}}</title> --}}
    {{-- Operatore ternario "? :"
    if(isset($title)){
      <title>{{$title}}</title>
    }else{
      <title>LaravelProjecth67</title>
    } --}}

    {{-- Coalescing Operator --}}
    <title>{{ $title ?? 'LaravelProjecth67'}}</title>

  </head>
  <body>

    <x-navbar/>

    {{-- La pesudo-variabile $slot indica al componente layout dove dovr inserire dinamicamente il codice delle diverse pagine --}}
    {{-- spazio all'interno della nostra cornice SCAFFOLDING --}}
    {{$slot}}


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/script.js"></script>

  </body>
</html>