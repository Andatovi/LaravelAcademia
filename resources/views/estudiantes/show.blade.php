
@extends('layouts.app')

@section('titulo', 'Detalle Estudiantes')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($student->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$student->nombre}}</p>
    </div>
    <br>
    <a href="/estudiantes/{{$student->id}}/edit" class="btn btn-warning">Editar Estudiante</a>
    {{-- <a href="/estudiantes/{{estudiantico->id}}/edit" class="btn btn-dark">Editar Estudiante</a> --}}
</div>


@endsection
