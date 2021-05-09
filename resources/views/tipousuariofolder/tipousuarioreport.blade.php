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
            <td> <button class="btn btn-dark" type="button">Text</button> </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop