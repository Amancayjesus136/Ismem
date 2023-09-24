@extends('layouts.app')
@section('content')

<div class="container">
    <form method="POST" action="{{ route('listado.update', $persona->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="form-control" value="{{ $persona->nombres}}" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ $persona->apellidos}}" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control" value="{{ $persona->edad}}" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" value="{{ $persona->correo}}" required>
        </div>

        <div class="form-group">
            <label for="numero">Número de teléfono:</label>
            <input type="number" id="numero" name="numero" class="form-control" value="{{ $persona->numero}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div> 

@endsection
