<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate(10);
        return view('producto/index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'nombre'=>'required|string|min:3|max:100',
            'descripcion'=>'required|string',
            'imagen'=>'required|mimes:jpeg,png,jpg',
            'precio'=>'required|numeric'
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido',
            'imagen.required'=>'La imagen es requerida',
            'mimes:jpeg,png,jpg' => 'El archivo debe tener formato: jpeg,png,jpg'
        ];

        $this->validate($request,$campos,$mensaje);

        $datos = request()->except('_token');
        if($request->hasFile('imagen')){
            $datos['imagen']=$request->file('imagen')->store('uploads','public');
        } else {
            $datos['imagen']="";
        }

        Producto::insert($datos);

        return redirect('producto')->with('mensaje','Producto Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato['producto']=Producto::findOrFail($id);
        return view('producto/show',$dato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto/form',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $campos = [
            'nombre'=>'required|string|min:3|max:100',
            'descripcion'=>'required|string',
            'imagen'=>'mimes:jpeg,png,jpg',
            'precio'=>'required|numeric'
        ];

        $mensaje = [
            'required'=>'El :attribute es requerido',
            'mimes:jpeg,png,jpg' => 'El archivo debe tener formato: jpeg,png,jpg'
        ];

        $this->validate($request,$campos,$mensaje);

        if($request->hasFile('imagen')){
            Storage::delete('public/'.$producto->imagen);
            $request->imagen=$request->file('imagen')->store('uploads','public');
        } else {
            $request->imagen=$producto->imagen;
        }

        Producto::where('id',$producto->id)->update([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'precio'=>$request->precio
        ]);
        return redirect('/producto/'.$producto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        
        Storage::delete('public/'.$producto->imagen);
        Producto::destroy($producto->id);
        return redirect('producto')->with('mensaje','Producto Eliminado');
    }
}
