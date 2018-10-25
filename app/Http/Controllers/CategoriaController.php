<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        
    	return view('almacen.index');
    }
    public function show($id)
    {

    }
    public function create()
    {
    	return view('almacen.create');
    }

    public function store(Request $request)
    {
        /*$categoria=new Categoria
        $categoria->nombre=$request->input('nombre');
        $categoria->descripcion=$request->input('descripcion');
        $categoria->condicion=$request->input('condicion');
        $categoria->save();

        $categoria=Categoria();
        return view('almacen.index');*/
    }
}
