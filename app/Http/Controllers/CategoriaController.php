<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Proveedor;

class CategoriaController extends Controller
{
    public function index(){
        $categorys = Categoria::all();
        return view('categoria',compact('categorys'));
    }

    public function createCategory(Request $request){
        $validate = $request->validate(
            [
                'name' => 'required|unique:categorias|max:255',
                'description' => 'required'
            ]
        );
        Categoria::create($validate);
        return redirect()->route('categoria')->with('status','Categoria agregado correctamente');


    }

    public function updateCategory(Request $request, $id){
        $category = $request->validate(
            [
                'name' => 'required|max:255',
                'description' => 'required'
            ]
        );
        Categoria::where('id',$id)->update($category);
        return redirect()->route('categoria')->with('status','Categoría modificado correctamente');
    }

    public function updateCategoryView(Request $request, $id){
        $category = Categoria::find($id);
        return view('editCategoria', compact('category'));
    }
    public function deleteCategory($id){
        Categoria::destroy($id);
        return redirect()->route('categoria')->with('status','Categoría eliminada correctamente');
    }
}
