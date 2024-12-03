<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Categoría</title>
    <link rel="stylesheet" href="{{ asset('css/editCategoria.css') }}">
</head>
<body>
    <section>
        <h2>Actualizar categoría</h2>
    </section>
    <form action="{{route('editarCategoria', $category->id)}}" method="post">
        @csrf
        <input type="hidden" name="" value="{{$category->id}}">
        <input type="text" name="name" value="{{$category->name}}">
        <textarea name="description" id="" cols="30" rows="10">{{$category->description}}</textarea>
        <input type="submit" value="Actualizar categoría">
    </form>
</body>
</html>
