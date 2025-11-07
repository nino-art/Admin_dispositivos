<?php

namespace App\Http\Controllers;

use App\Models\Dispositivos;
use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //trae todos los dispositivos creados
        $dispositivos=Dispositivos::all();
        
        return view('dispositivos.index',compact('dispositivos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dispositivos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string|max:255',
            'modelo_de_dispositivo'=>'required|string|max:255',
            'numero_de_serie'=>'required|integer',
            'fabricante'=>'required|string|max:255',
            'marca'=>'required|string|max:255'

        ]);
        Dispositivos::create($request->all());
        return redirect()->route('dispositivos.index')->with('success','Dispositivo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispositivos $dispositivos)
    {
        return view('dispositivos.show',compact('dispositivo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispositivos $dispositivos)
    {
        return view ('dispositivos.edit',compact('dispositivo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispositivos $dispositivos)
    {
        $request->validate([

            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string|max:255',
            'modelo_de_dispositivo'=>'required|string|max:255',
            'numero_de_serie'=>'required|integer',
            'fabricante'=>'required|string|max:255',
            'marca'=>'required|string|max:255'

        ]);
        $dispositivos->update($request->all());
        return redirect()->route('dispositivos.index')->with('success','dispositivo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispositivos $dispositivos)
    {
        $dispositivos->delete();
        return redirect()->route('dispositivos.index')->with('success','dispositivo eliminado correctamente');
    }
}
