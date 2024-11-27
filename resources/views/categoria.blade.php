<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('home')}}">
        <section>
            <h2>Crear producto</h2>
        </section>
    </a>
    <form action="{{route('createCategory')}}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Ingresa el nombre de la categoria">
        <input type="text" name="description" placeholder="Ingresa una descripcion de la categoriar">
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
                <td>{{$provider->id}}</td>
                <td>{{$provider->name}}</td>
                <td>{{$provider->description}}</td>
                <td>
                    <a href="{{route('editarCategoria', $category->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <a href="{{route('eliminarCategoria', $category->id)}}" class="btn btn-warning">Eliminar</a>
                </td>
        </tbody>
    </table>
</body>
</html>