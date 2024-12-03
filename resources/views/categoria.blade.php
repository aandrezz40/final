<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear categoria</title>
    <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">

</head>
<body>
    <a href="{{route('home')}}" class="titulo">
        <section>
            <h2>Crear producto</h2>
        </section>
    </a>
    <form action="{{route('crearCategoria')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Ingresa el nombre de la categoria">
        <textarea name="description" id="" cols="30" rows="10" value="Ingresar la descripcion de la categoria"></textarea>
        <input type="submit" value="Registrar categoria">
    </form>
    <h2>
        Lista de categorias
    </h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>
                    <a href="{{route('editarCategoria', $category->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <a href="{{route('eliminarCategoria', $category->id)}}" class="btn btn-warning">Eliminar</a>
                </td>
            @endforeach
        </tbody>
    </table>
</body>
</html>