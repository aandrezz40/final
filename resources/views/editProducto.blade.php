<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/editProducto.css') }}">
</head>
<body>
<div>
    <section>
        <h2>Actualizar producto</h2>
    </section>

    <!-- Formulario -->
    <form action="{{route('editarProducto', $products->id)}}" method="POST">
        @csrf
        <input type="hidden" value="{{$products->id}}">
        <input type="text" name="product" placeholder="Producto" value="{{$products->product}}" required>
        <input type="number" name="price" placeholder="Precio" value="{{$products->price}}" required>
        <input type="number" name="stock" placeholder="Stock" value="{{$products->stock}}" required>
        
        <select name="id_categoria" required>
            @foreach ($categorys as $category)
                <option value="{{$category->id}}" {{ $category->id == $products->category_id ? 'selected' : '' }}>
                    {{$category->name}}
                </option>
            @endforeach
        </select>
        
        <select name="id_proveedor" required>
            @foreach ($providers as $provider)
                <option value="{{$provider->id}}" {{ $provider->id == $products->provider_id ? 'selected' : '' }}>
                    {{$provider->name}}
                </option>
            @endforeach
        </select>
        
        <input type="submit" value="Actualizar producto">
    </form>
</div>
</body>
</html>
