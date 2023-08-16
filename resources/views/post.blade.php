<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noticia</title>
</head>
<body>
    <h1>
        Comentarios
        </h1>
    @foreach($posts as $p)
        <p><b> ID: </b> {{$p['id']}}</p>
        <p><b> POST_ID: </b> {{$p['post_id']}}</p>
        <p><b> COMMENT </b> {{$p['comment']}} </p>
        <p><b> --------------------------------</b></p>
    @endforeach    
</body>
</html>