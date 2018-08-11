<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Illuminate\Support\Facades\Redirect as BaseController;
use Laracasts\Flash\Flash;
use Auth;

class FrontController extends Controller
{

  public function index()
  {
      $productos = Productos::all();
      return view('welcome', compact('productos'));
  }

  // Detalles del Producto
    public function productodetalle($url)
    {
        $productos = Productos::where('url','=', $url)->firstOrFail();
        return view('productodetalle', compact('productos'));
    }

}
