@extends('layouts.daw')
@section('content')
<style>
    label {
        width: 200px;
        display: inline-block;
    }
    label , input {
        margin-bottom: 10px;
    }
    input {
        width: 200px;
    }
</style>
<div>
    <h3>
        Nuevo Alumno
    </h3>
    <form action="{{route('alumno.store')}}" method="get", files="true">
        {{  csrf_field() }}

        <label for="nom_alumno">Nombre del Alumno:</label>
        <input type="text" name="nom_alumno" id="nom_alumno" required autofocus/><br>

        <label for="apell_alumno">Apellidos del Alumno:</label>
        <input type="text" name="apell_alumno" id="apell_alumno" required autofocus/><br>

        <label for="passwd_alumno">Contraseña del Alumno:</label>
        <input type="text" name="passwd_alumno" id="passwd_alumno" required autofocus/><br>
        
        <label for="cod_curso">Codigo del curso:</label>
        <input type="text" name="cod_curso" id="cod_curso" required autofocus/><br>

        <label for="fech_nac_alumno">Fecha de nacimiento:</label>
        <input type="date" name="fech_nac_alumno" id="fech_nac_alumno" required autofocus/><br>
        
        <label for="foto_alumno">Foto del Alumno:</label>
        <input type="file" name="foto_alumno" id="foto_alumno" required autofocus style="color: transparent"/><br>

        <button type="submit">Insertar</button><br>

    </form>
    <br>
</div>
@endsection

