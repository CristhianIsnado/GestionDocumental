@extends('layouts.admin')
@section('content')

    <h1 id="cabeza">Lista de Usuarios</h1>
    <table class="table table-bordered">
        <tr class="info">
            <th>ID</th>
            <th>Cedula de Identidad</th>
            <th>Nombres</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Genero</th>
            <th>Estado civil</th>
            <th>Direccion</th>
            <th>Fecha de nacimiento</th>
            <th>Grado de instruccion</th>
            <th>Correo electronico</th>
            <th>ID Residencia</th>
        </tr>

        @foreach($usuarios as $usuario)
            <tr class="warning">
                <td>{{$usuario->id}}</td>
                <th>{{$usuario->ceduladeidentidad}}</th>
                <td>{{$usuario->nombres}}</td>
                <td>{{$usuario->apellidopaterno}}</td>
                <td>{{$usuario->apellidomaterno}}</td>
                <td>{{$usuario->genero}}</td>
                <td>{{$usuario->estadocivil}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>{{$usuario->fechadenacimiento}}</td>
                <td>{{$usuario->gradodeinstruccion}}</td>
                <td>{{$usuario->correoelectronico}}</td>
                <td>{{$usuario->idresidencia}}</td>

            </tr>
        @endforeach
    </table>
    {{$usuarios->links()}}
@endsection
