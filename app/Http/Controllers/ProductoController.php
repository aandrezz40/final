<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\services\ProductoService;
use App\services\CategoriaService;
use App\services\ProveedorService;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function home(Request $request, ProductoService $productoService, CategoriaService $categoriaService, ProveedorService $proveedorService){
        
        $products = $productoService->getProducto();
        $categorys = $categoriaService->getCategorys();
        $providers = $proveedorService->getProveedor();
        return view('home', ['products'=>$products, 'categorys'=>$categorys, 'providers'=>$providers]);
    }
    public function createProducto(Request $request){
        $validate = $request->validate(
            [
                'product' => 'required|max:255|unique:productos',
                'price' => 'required',
                'stock' => 'required',
                'id_categoria' => 'required|numeric',
                'id_proveedor' => 'required|numeric'
            ]
            );
            Producto::create($validate);
            return redirect()->route('home');
        
    }
    public function updateProducto(Request $request, $id){
        $validate = $request->validate(
            [
                'product' => 'required|max:255',
                'price' => 'required',
                'stock' => 'required',
                'id_categoria' => 'required|numeric',
                'id_proveedor' => 'required|numeric'
            ]
        );

        Producto::where('id',$id)->update($validate);
        return redirect()->route('home');
    }
    public function updateProductoView($id, CategoriaService $categoriaService, ProveedorService $proveedorService){
        $products = Producto::find($id);
        $categorys = $categoriaService->getCategorys();
        $providers = $proveedorService->getProveedor();
        return view('editProducto', ['products'=> $products,'categorys'=>$categorys, 'providers'=>$providers]);

        
    }
    public function destroyProducto($id){
        Producto::destroy($id);
        return redirect()->route('home');
    }
}
