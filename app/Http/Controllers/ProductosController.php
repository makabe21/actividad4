<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function create()
    {
     return view('Productos/registro');
    }

    public function guardar(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->save();
        return redirect('Productos/list');
    }

    
    
        public function list()
    {
        $product = Productos::all(); 

        return view ('Productos/list', compact('product'));
    }

    public function edit($id)
    {
        $product = Productos::findOrFail($id);
        return view('Productos/edit', compact('product'));
    }

    public function update(request $request, Productos $product)
    {
    $product->nombre = $request->nombre;
    $product->precio = $request->precio;
    $product->descripcion = $request->descripcion;
    $product->cantidad = $request->cantidad;

     $product->save();
     return redirect('Productos/list');
    }

    public function delete($id)
    {
        $product = Productos::find($id);
        $product->delete();
        return redirect('Productos/list');

    }

    }

