<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductosCreateRequest;
use App\Http\Requests\ProductosUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class ProductosController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Productos::all();
        return view('admin.productos.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosCreateRequest $request)
    {
        \App\Proyectos::create([
            'nombre' => $request['nombre'],
            'stock' => $request['stock'],            
            'precio' => $request['precio'],
            'url' => str_slug($request['nombre'], '-'),  // Acá le pasamos la funcion str_slug() al nombre y generamos la URL amigable y la guardamos en la Base de Datos
            'img' => $request['img'],
        ]);

        return redirect('admin/productos')->with('message','Creado Satisfactoriamente !');
    }
    

}
