@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Listado de Personas</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="#" class="btn btn-primary">Agregar</a>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombres }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->correo }}</td>
                    <td>{{ $persona->numero }}</td>
                    <td>
                        <!-- EDITAR -->
                        <a href="{{ route('listado.edit', $persona->id )}}" class="btn btn-primary">Editar</a>

                        <!-- Eliminar -->
                        <form method="POST" action="{{ route('listado.destroy', $persona->id )}}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este registro?')">eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection