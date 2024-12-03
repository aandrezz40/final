<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head>
<body>
    <div class="container">

        <!-- Formulario de creación de proveedor y categoría -->
        <article class="links">
            <h2 class="title">Registrar Producto</h2>
            <div>
                <a href="{{route('proveedor')}}" class="link-proveedor">
                    <h2>Crear proveedor</h2>
                </a>
                <a href="{{route('categoria')}}" class="link-categoria">
                    <h2>Crear categoría</h2>
                </a>
            </div>
        </article>
        
        <!-- Formulario para registrar un producto -->
        <form action="{{route('agregarProducto')}}" method="POST" class="product-form">
            @csrf
            <div class="mb-3">
                <input type="text" name="product" placeholder="Producto" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="price" placeholder="Precio" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="stock" placeholder="Stock" class="form-control" required>
            </div>
            <select name="id_categoria" class="form-control" required>
                <option value="">Seleccionar categoria</option>

                @foreach ($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <select name="id_proveedor" class="form-control" required>
                <option value="">Seleccionar proveedor</option>

                @foreach ($providers as $provider)
                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn-submit">Guardar</button>
        </form>

        

        <!-- Tabla de productos -->
        <h2 class="titleTable">Productos Registrados</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Fecha de Creación</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->created_at->format('Y-m-d H:i:s')}}</td>
                        <td>
                            <a href="{{route('editarProducto', $product->id)}}" class="btn-edit">Editar</a>
                        </td>
                        <td>
                            <a href="{{route('eliminarProducto', $product->id)}}" class="btn-delete">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
