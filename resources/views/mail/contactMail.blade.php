<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{$data['name']}} verrai ricontattato al piú presto su questo indirizzo:</h1>
    <p>{{$data['email']}}</p>
    <h5>Il testo della tua mail é il segunete:</h5>
    <p>{{$data['text']}}</p>
</body>
</html>