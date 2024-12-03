<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/editProveedor.css') }}">

</head>
<body>
    <section>
        <h2>Actualizar proveedor</h2>
    </section>
    <form action="{{route('editarProveedor', $provider->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$provider->id}}">
        <input type="text" name="name" value="{{$provider->name}}">
        <input type="text" name="direction" value="{{$provider->direction}}">
        <input type="text" name="phone" value="{{$provider->phone}}">
        <input type="email" name="email" value="{{$provider->email}}">
        <input type="text" name="contact" value="{{$provider->contact}}">
        <textarea name="description" id="" cols="30" rows="10" value="">{{$provider->description}}</textarea>
        <input type="submit" value="Actualizar proveedor">
    </form>

</body>
</html>