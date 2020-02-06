@extends('layouts.daw')
@section('content')
<style>
    a {
        text-decoration: none;
    }
    a:visited {
        color: black;
    }
</style>
<div>
    <h3>
        TODOS LOS ALUMNOS DEL CENTRO
    </h3>
</div>
<table border="1px">
    <tr>
        <th>CODIGO CURSO</th>
        <th>CODIGO ALUMNO</th>
        <th>NOMBRE ALUMNO</th>
        <th>APELLIDO ALUMNO</th>
        <th>FECHA DE NACIMIENTO</th>
        <th>IMAGEN</th>
        <th>ACCIONES</th>
    </tr>
    @foreach ($alumnos as $alumno)
        <tr>
            <td>{{$alumno->cod_curso}}</td>
            <td>{{$alumno->cod_alumno}}</td>
            <td>{{$alumno->nom_alumno}}</td>
            <td>{{$alumno->apell_alumno}}</td>
            <td>{{$alumno->fech_nac_alumno}}</td>
            <td><img src="images/{{$alumno -> foto_alumno}}" height="65"/></td>
            <td>
                <button type="submit"><a href="{{route('alumno.edit',['id'=>$alumno->cod_alumno])}}">CAMBIAR</a></button>
                <form action="{{route('alumno.destroy',['id'=>$alumno->cod_alumno])}}" method="post">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                <button type="submit" onclick="return confirm('Seguro que desea eliminar a {{$alumno->nom_alumno}}.'">ELIMINAR</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<br>
{{$alumnos->links()}}
<br>
@endsection
