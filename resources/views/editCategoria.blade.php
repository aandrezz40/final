<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>Actualizar producto</h2>
    </section>
    <form action="{{route('')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Ingresa el nombre de la categoria">
        <input type="text" name="description" placeholder="Ingresa una descripcion de la categoriar">
    </form>
</body>
</html>