@extends('layouts.app')

@section('content')
<div class="container">
<br>
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje') }}
 </div>   
@endif



<a class="btn btn-success" href="{{ url('empleado/create') }}">Registrar Nuevo Empleado</a>
<br><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="150" height="150" alt="" class="img-thumbnail img-fluid">
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellidos }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td> 

            <a href="{{ url('/empleado/'. $empleado->id. '/edit') }}" class="btn btn-warning">
                Editar</a>
             |
                
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}

            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger"/>

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection