@extends('layouts.app')
@section('content')

<div class="container">
    <form method="POST" action="{{ route('personas.store')}}">
        @csrf
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control">
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control">
        </div>

        <div class="form-group">
            <label for="numero">Número de teléfono:</label>
            <input type="number" id="numero" name="numero" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div> 

@endsection
