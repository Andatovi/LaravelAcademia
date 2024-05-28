@extends('layouts.app')

@section('titulo', 'Edición de Estudiantes')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Estudiante</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/estudiantes/{{$student->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreestudiante">Modifique el Nombre del Estudiante</label>
        <input name="nombre" id="nombreestudiante" value="{{$student->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="direccionestudiante">Modifique la dirección del Estudiante</label>
        <input name="direccion" id="direccionestudiante" value="{{$student->direccion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="telefonoestudiante">Modifique el Numero Telefonico del Estudiante</label>
        <input name="telefono" id="telefonoestudiante" value="{{$student->telefono}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="datosestudiante">Modifique los Datos Importantes Sobre el Estudiante</label>
        <input name="datos_adicionales" id="datosestudiante" value="{{$student->datos_adicionales}}" type="text" class="form-control">
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
