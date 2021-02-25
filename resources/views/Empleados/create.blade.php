seccion para crear empleados.
<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
{{csrf-field() }} //Agregando un token
<label for="Nombre"> {{'Nombre'}} </label>
<input type="text" name="Nombre" id="Nombre" values="">

<input type="submit" value="Agregar">
</form>