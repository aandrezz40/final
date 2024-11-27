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
        
        Proveedor::created($validate);
        $providers = Proveedor::all();

        return view('proveedor',compact('providers'));

    }

    public function updateProveedor(Request $request, $id){
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
        Proveedor::where('id',$id)->update($validate);
    }
    public function deleteProveedor($id){
        Proveedor::destroy($id);
    }
}
