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
    <form action="{{route('agregarProveedorr')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Ingresa el nombre del proveedor">
        <input type="text" name="direction" placeholder="Ingresa la direccion del proveedor">
        <input type="text" name="phone" placeholder="Ingresa el telefono del proveedor">
        <input type="email" name="email" placeholder="Ingresa el correo del proveedor">
        <input type="text" name="contact" placeholder="Ingresa el contacto del proveedor">
        <input type="text" name="description" placeholder="Ingresa una descripcion del proveedor">
        <input type="submit" value="Actualizar proveedor">
    </form>

</body>
</html>