<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedor</title>
    <link rel="stylesheet" href="{{ asset('css/proveedor.css') }}">
</head>

<body>
    <header>
        <a href="{{route('home')}}" class="header-link">
            <h2>Crear Producto</h2>
        </a>
    </header>

    <main>
        <form action="{{route('agregarProveedor')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nombre del proveedor" required>
            <input type="text" name="direction" placeholder="Dirección del proveedor" required>
            <input type="text" name="phone" placeholder="Teléfono del proveedor" required>
            <input type="email" name="email" placeholder="Correo del proveedor" required>
            <input type="text" name="contact" placeholder="Contacto del proveedor" required>
            <textarea name="description" id="" cols="65" rows="10" value="Ingrese la descripcion del proveedor"></textarea>
            <input type="submit" value="Registrar proveedor">
        </form>

        <section class="provider-list">
            <h2>Lista de Proveedores</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Contacto</th>
                        <th>Descripción</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($providers as $provider)
                    <tr>
                        <td>{{$provider->id}}</td>
                        <td>{{$provider->name}}</td>
                        <td>{{$provider->direction}}</td>
                        <td>{{$provider->phone}}</td>
                        <td>{{$provider->email}}</td>
                        <td>{{$provider->contact}}</td>
                        <td>{{$provider->description}}</td>
                        <td>
                            <a href="{{route('editarProveedorView', $provider->id)}}" class="btn-edit">Editar</a>
                        </td>
                        <td>
                            <a href="{{route('eliminarProveedor', $provider->id)}}" class="btn-delete">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
