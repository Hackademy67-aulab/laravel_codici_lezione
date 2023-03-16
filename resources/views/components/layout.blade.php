<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css','resources/js/app.js'])

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

  </body>
</html>