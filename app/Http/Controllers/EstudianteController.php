<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Estudiante::all();
        //return $course;
        return view('estudiantes.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all(); con esto devuelvo toda la información en pantalla
        $student = new Estudiante();
        $student->nombre = $request->input('nombre');
        $student->direccion = $request->input('direccion');
        $student->telefono = $request->input('telefono');
        $student->datos_adicionales = $request->input('datos_adicionales');

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $student->imagen = $request->file('imagen')->store('public/estudiantes');
        }
        $student->save();
        return 'Se creo el estudiante de manera exitosa';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Estudiante::find($id);
        return view('estudiantes.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Estudiante::find($id);
        return view('estudiantes.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Estudiante::find($id);
        $student->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $student->imagen = $request->file('imagen')->store('public/estudiantes');
            $student->save();
            return 'Se actualizo el perfil del estudiante de manera exitosa';
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
