<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ControllerContact extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //validación
        $validacion = $request->validate([
            'nombre' => 'required|max:75|string',
            'telefono' => 'required|max:75|string',
            'email' => 'required|max:75|string',
            'tema' => 'required|max:255|string',
            'mensaje' => 'required|max:255|string'
        ]);


        $contacto = new Contacto();

        $contacto->nombre = $request->input('nombre');
        $contacto->telefono = $request->input('telefono');
        $contacto->email = $request->input('email');
        $contacto->tema = $request->input('tema');
        $contacto->mensaje = $request->input('mensaje');


        $contacto->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
