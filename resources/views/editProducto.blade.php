<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    
</head>
<body>
<div class="">
    <section>
        <h2>Actualizar producto</h2>

    </section>

    <!-- Formulario -->
    
    
    <form action="{{route('agregarProducto')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="producto" placeholder="Producto" class="" required>
        </div>
        <div class="mb-3">
            <input type="number" name="precio" placeholder="Precio" class="" required>
        </div>
        <div class="mb-3">
            <input type="number" name="stock" placeholder="Stock" class="" required>
        </div>
        <select name="" id="">
            @foreach ($categorys as $category)
                <option value="{{$category->id}}" disabled>{{$category->name}}</option>
                
            @endforeach
        </select>
        <select name="" id="">
            @foreach ($providers as $provider)
                <option value="{{$provider->id}}" disabled>{{$provider->name}}</option>
                
            @endforeach
        </select>
        <button type="submit" class="">Guardar</button>
    </form>


    <!-- Tabla -->
    
</div>
</body>
</html>