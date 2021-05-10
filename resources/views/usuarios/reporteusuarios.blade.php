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
            <td>
                <a href="{{route('modificaruser',['id_usu'=>$user->id_usu])}}"><input class="btn btn-info" type="button" value="Modificar"></a>
                <a href="{{route('borrauser',['id_usu'=>$user->id_usu])}}"><input class="btn btn-danger" type="button" value="Eliminar"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop