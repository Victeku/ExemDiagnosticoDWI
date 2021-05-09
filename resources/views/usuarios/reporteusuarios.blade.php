@extends('layoutmain')
@section('contenido')
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>Clave</th>
            <th>nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Tipo de Usuario</th>
            <th>Operaciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $user)
        <tr>
            <td>{{$user->id_usu}}</td>
            <td>{{$user->nombre}}</td>
            <td>{{$user->app}}</td>
            <td>{{$user->apm}}</td>
            <td>{{$user->correo}}</td>
            <td>{{$user->tipo_usuario}}</td>
            <td> <button class="btn btn-dark" type="button">Text</button> </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop