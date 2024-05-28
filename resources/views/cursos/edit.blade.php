@extends('layouts.app')

@section('titulo', 'Edición de cursos')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Curso</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/cursos/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombrecurso">Modifique el Nombre del Curso</label>
        <input name="nombre" id="nombrecurso" value="{{$course->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cupocurso">Modifique la Cantidad de Cupos del Curso</label>
        <input name="cupo" id="cupocurso" value="{{$course->cupos}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="sedecurso">Modifique la Sede del Curso</label>
        <input name="sede" id="sedecurso" value="{{$course->sede}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcion">Modifique la Descripción del Curso</label>
        <input name="descripcion" id="descripcion" value="{{$course->descripcion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
