Mostrar lista de empleados
<br>
@if(Session::has('mensaje'))
<div style="font-weight: bold;">{{ Session::get('mensaje') }}</div>
@endif
<a href="{{ url('empleado/create') }}">Registrar Nuevo Empleado</a>
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
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="150" height="150" alt="">
            </td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellidos }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>Editar | 

            <a href="{{ url('/empleado/'. $empleado->id. '/edit') }}">
                Editar
            </a>
                
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}

            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"/>

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>