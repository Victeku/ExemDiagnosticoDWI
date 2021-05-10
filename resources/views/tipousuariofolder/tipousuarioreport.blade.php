@extends('layoutmain')
@section('contenido')
<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>Clave</th>
            <th>Tipo</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tipouser as $tipo)
        <tr>
            <td>{{$tipo->id_tipousu}}</td>
            <td>{{$tipo->nombre}}</td>
            <td>
                <a href="{{route('borratipouser',['id_tipousu'=>$tipo->id_tipousu])}}"><input class="btn btn-info" type="button" value="Modificar"></a>
                <a href="{{route('borratipouser',['id_tipousu'=>$tipo->id_tipousu])}}"><input class="btn btn-danger" type="button" value="Eliminar"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop