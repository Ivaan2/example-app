Formulario de creacion de Empleado

<form action="{{ url('/empleado/') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>

    <label for="Apellidos">Apellidos</label>
    <input type="text" name="Apellidos" id="Apellidos">
    <br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo">
    <br>

    <label for="Foto">Foto</label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" name="Enviar">
</form> 