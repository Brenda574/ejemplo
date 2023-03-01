<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar" method="post">
        @csrf
        En que idioma deseas que te salude? <br>
        <input type="text" name="idioma">
        <input type="submit" value="">
    </form>
    <ul>
        <li><a href="{{route('r1')}}">ESPAÑOL</a></li>
        <li><a href="salutare">ITALIANO</a></li>
        <li><a href="saluer">FRANCES</a></li>
    </ul>
</body>
</html>