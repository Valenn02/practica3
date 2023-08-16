<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noticia</title>
</head>
<body>
    <h1>
        Noticia
        </h1>
    @foreach($eventos as $e)
        <p><b> ID: </b> {{$e['id']}}</p>
        <p><b> TICKET: </b> {{$e['ticket']}}</p>
        <p><b> DESCRIPCION </b> {{$e['descripcion']}} </p>
        <p><b> --------------------------------</b></p>
    @endforeach    
</body>
</html>