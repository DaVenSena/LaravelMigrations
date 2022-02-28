<head>
    <label for="Nombre"> Nombre</label>
    <input type="text" name="Nombre"  value="{{ $empleado->Nombre}}" id="Nombre">
    <br>

    <label for="ApellidoPaterno"> Apellido Paterno</label>
    <input type="text" name="Apellido"   value="{{ $empleado->Apellido}}"  id="Apellido">
    <br>

    <label for="ApellidoMaterno"> Sexo</label>
    <input type="text" name="Sexo"   value="{{ $empleado->Sexo}}"  id="Sexo">
    <br>

    <label for="Correo"> Correo</label>
    <input type="text" name="Correo" value="{{ $empleado->Correo}}"   id="Correo">
    <br>

    <label for="Foto"> Foto</label>
    <input type="file" name="Foto" value="{{ $empleado->Foto}}"  id="Foto">
    <br>


    <input type="submit" Value="Guardar Datos">
    <br>
</head>
