@extends('layouts.app')

@section('titulo', 'Crear Estudiante')

@section('contenido')
<br>
<h3>Crear un Estudiante para Uso de la App</h3>
<form action='/estudiantes' method='post' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nombreestudiante" class="form-label">Nombre del Estudiante</label>
      <input type="texto" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="direccionestudiante" class="form-label">Dirección del estudiante</label>
        <input type="texto" class="form-control" id="direccion" name="direccion">
      </div>
    <div class="mb-3">
        <label for="telefonoestudiante" class="form-label">Telefono del Estudiante</label>
        <input type="number" class="form-control" id="telefono" name="telefono">
      </div>
    <div class="mb-3">
        <label for="datosestudiante" class="form-label">Datos Extra del Estudiante</label>
        <input type="texto" class="form-control" id="datos_adicionales" name="datos_adicionales">
    </div>
    <div class="form-group">
        <label for="imagen">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
       <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
