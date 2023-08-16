<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
<h1>
        Lista Personas
        </h1>
    @foreach($personas as $p)
        <p><b> NOMBRE: </b> {{$p['nombre']}}</p>
        <p><b> EDAD: </b> {{$p['edad']}}</p>
        @if ($p['edad'] >=18 )
        <p><b> Es mayor de edad</b></p>
        @else
        <p><b> Es menor de edad</b></p>
        @endif
        <p><b> --------------------------------</b></p>
    @endforeach 
</body>
</html>