<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index(){
        $providers = Proveedor::all();
        return view('proveedor',compact('providers'));
    }
    public function createProveedor(Request $request){
        $validate = $request->validate(
            [
                'name' => 'required|unique:proveedors|max:255',
                'direction'=> 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'description' => 'required'

            ]
        );
        
        Proveedor::create($validate);
        // $providers = Proveedor::all();

        return redirect()->route('proveedor')->with('status','Proveedor agregado correctamente');

    }

    public function updateProveedor(Request $request, $id){
        $validate = $request->validate(
            [
                'name' => 'required|max:255',
                'direction'=> 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'description' => 'required'

            ]
        );
        Proveedor::where('id',$id)->update($validate);
        return redirect()->route('proveedor')->with('success', 'Proveedor actualizado correctamente');

    }

    public function updateProveedorView($id){
        $provider = Proveedor::find($id);
        return view('editProveedor', compact('provider'));
    }
    public function deleteProveedor($id){
        Proveedor::destroy($id);
        return redirect()->route('proveedor')->with('success', 'Proveedor eliminado correctamente');
    }
}
