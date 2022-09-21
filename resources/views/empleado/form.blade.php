<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
</br>

<label for="Apellidos">Apellidos</label>
<input type="text" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:'' }}" id="Apellidos">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
<br>

<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="150" height="150" alt="">
@endif
<input type="file" name="Foto" id="Foto">
<br>

<button type="submit" name="Enviar">Enviar</button>

<br><br>
<a href="{{ url('empleado/') }}">Volver a la Página de Inicio</a>