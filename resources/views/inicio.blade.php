@extends('layouts.daw')
@section('content')
<div>
    <h3>
        Bienvenido a DAW
    </h3>
</div>
<table border="1px">
    <tr>
        <th>CODIGO CURSO</th>
        <th>NOMBRE CURSO</th>
        <th>AÑO CURSO</th>
    </tr>
    @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->cod_curso}}</td>
            <td><a href="/daw{{$curso -> cod_curso}}">{{ $curso->nom_curso}}</a></td>
            <td>{{ $curso -> anyo_curso}}</td>
        </tr>
    @endforeach
</table>
<br>
<button><a href="/todos">VER TODOS LOS ALUMNOS</a></button>
@endsection
