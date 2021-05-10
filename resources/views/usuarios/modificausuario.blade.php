@extends('layoutmain')
@section('contenido')
<center><h2>Clave: <input id="claveshow" type="text" name="id_usu" value="{{$usuarios->id_usu}}" disabled></h2></center>
<div class="l-form2">
  <form action="{{route('guardarusucambiosario')}}" method="POST" class="form2">
    {{csrf_field()}}
    <div class="row">
    <input type="text" name="id_usu" value="{{$usuarios->id_usu}}" hidden>
   <div class="col-lg-4">
   <div class="form__div2">
      <input type="text" name="nombre" value="{{$usuarios->nombre}}" class="form__input2" placeholder=" ">
      <label for="" class="form__label2"><i class="fad fa-user"></i> Nombre</label>
    </div>
   </div>
   <div class="col-lg-4">
   <div class="form__div2">
      <input type="text" name="app" value="{{$usuarios->app}}" class="form__input2" placeholder=" ">
      <label for="" class="form__label2"><i class="fad fa-user"></i> Apellido Paterno</label>
    </div>
   </div>
 
  <div class="col-lg-4">
  <div class="form__div2">
      <input type="text" name="apm" value="{{$usuarios->apm}}" class="form__input2" placeholder=" ">
      <label for="" class="form__label2"><i class="fad fa-user"></i> Apellido Materno</label>
    </div>
  </div>
  </div>
    <br>
    <div class="form__div2">
      <input type="email" name="correo" value="{{$usuarios->correo}}" class="form__input2" placeholder=" ">
      <label for="" class="form__label2"><i class="fad fa-envelope-square"></i> Correo</label>
    </div>
    <br>
    <div class="form__div2">
      <input type="password" name="password" value="{{$usuarios->password}}" class="form__input2" placeholder=" ">
      <label for="" class="form__label2"><i class="fad fa-key"></i> Contraseña</label>
    </div>
    <br>
    <div class="form-group">
      <label for="my-select">Tipo de usuario</label>
      <select id="my-select" class="form-control" name="typeuser">
        <option value="{{$usuarios->id_tipousu}}">{{$usuarios->tipo_usuario}}</option>
        @foreach($tipouser as $tipo)
        <option value="{{$tipo->id_tipousu}}">{{$tipo->nombre}}</option>
        @endforeach
      </select>
    </div>
    <br>
    <input type="submit" class="form__button2" value="Guardar">
  </form>


</div>
@stop