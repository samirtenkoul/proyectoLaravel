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
</style>
<script>

{{$alumno = \App\Alumno::find($id)}}
</script>
<div>
    <h3>
        Editar Alumno {{$alumno->nom_alumno}} {{$alumno->apell_alumno}}
    </h3>
    <form action="{{route('alumno.update',['id'=>$alumno->cod_alumno])}}" method="get", files="true">
        {{  csrf_field() }}

        <label for="nom_alumno">Nombre del Alumno:</label>
        <input value="{{$alumno->nom_alumno}}" type="text" name="nom_alumno" id="nom_alumno" required autofocus/><br>

        <label for="apell_alumno">Apellidos del Alumno:</label>
        <input value="{{$alumno->apell_alumno}}" type="text" name="apell_alumno" id="apell_alumno" required autofocus/><br>

        <label for="passwd_alumno">Contraseña del Alumno:</label>
        <input value="{{$alumno->passwd_alumno}}" type="text" name="passwd_alumno" id="passwd_alumno" required autofocus/><br>

        <label for="cod_curso">Codigo del curso:</label>
        <input value="{{$alumno->cod_curso}}" type="text" name="cod_curso" id="cod_curso" required autofocus/><br>

        <label for="fech_nac_alumno">Fecha de nacimiento :</label>
        <input value="{{$alumno->fech_nac_alumno}}" type="date" name="fech_nac_alumno" id="fech_nac_alumno" required autofocus/><br>

        <label for="foto_alumno">URL de la foto del Alumno:</label>
        <input value="{{$alumno->foto_alumno}}" type="file" name="foto_alumno" id="foto_alumno" style="color: transparent" required autofocus/><br>

        <button type="submit">Cambiar</button><br>

    </form>
    <br>
</div>
@endsection

