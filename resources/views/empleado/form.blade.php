@if(count($errors)>0)

    <div class="alert alert-danger">
    <ul>

    @foreach( $errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
        
    </ul>
    </div>
@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
</br>
</div>

<div class="form-group">
<label for="Apellidos">Apellidos</label>
<input type="text" class="form-control" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" id="Apellidos">
<br>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
<br>
</div>

<div class="form-group">
<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="150" height="150" alt="">
@endif
<input type="file" class="form-control" name="Foto" id="Foto">
<br>
</div>

<div class="form-group">
<a href="{{ url('empleado/') }}" class="btn btn-primary">Volver a la Página de Inicio</a>
<button type="submit" class="btn btn-success" name="Enviar">Enviar</button>
</div>