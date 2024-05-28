@extends('layouts.app')

@section('titulo', 'Listado de Estudiantes')

@section('contenido')

<br>
<h3 class="text-center">Listado de Estudiantes Creados</h3>
<br>
<div class="row">
    @foreach ($student as $estudiantico)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px"src="{{ Storage::url($estudiantico->imagen) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">{{$estudiantico->nombre}}</h4>
                  <p class="card-text">Dir: <b>{{$estudiantico->direccion}}</b></p>
                  <p class="card-text">Tel:{{$estudiantico->telefono}}</p>
                  <p class="card-text">{{$estudiantico->datos_adicionales}}</p>
                  <a href="/estudiantes/{{$estudiantico->id}}" class="btn btn-success">Ver Detalles</a>
                </div>
              </div>
        </div>
    @endforeach


</div>

@endsection
