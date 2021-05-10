<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Jquery-->
  <script src="{{asset('jquery/jquery-3.6.0.min.js')}}"></script>
  <!--Bootstrap 4-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <!--fontawesome-->
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
  <!--Estilos-->
  <link rel="stylesheet" href="{{asset('form/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('form/css/styles2.css')}}">
  <title>Examen Diagnostico</title>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
</head>

<body>
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <nav class="nav flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipo
              Usuario</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <button type="button" class="dropdown-item btn btn-light" data-toggle="modal"
                data-target="#exampleModalLong2">Alta</button>
              <a class="dropdown-item" href="{{route('reportetipousuario')}}">Reporte</a>
            </div>
          </li>
          <br>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-light" href="#" id="navbarDropdownMenuLink2" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <button type="button" class="dropdown-item btn btn-light" data-toggle="modal"
                data-target="#exampleModalLong">Alta</button>
              <a class="dropdown-item btn btn-light" href="{{route('reporteusuarios')}}">Reporte</a>
            </div>
          </li>

        </nav>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
    <div id="contenido">
                        @yield('contenido')
                    </div>
    </div>
  </div>

  <!-- Modal Usuario -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Alta Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="l-form">
            <form action="{{route('guardarusuario')}}" method="POST"  class="form">
            {{csrf_field()}}
              <div class="form__div">
                <input type="text" name="nombre" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="fad fa-user"></i> Nombre</label>
              </div>
              <br>
              <div class="form__div">
                <input type="text" name="app" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="fad fa-user"></i> Apellido Paterno</label>
              </div>
              <br>
              <div class="form__div">
                <input type="text" name="apm" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="fad fa-user"></i> Apellido Materno</label>
              </div>
              <br>
              <div class="form__div">
                <input type="email" name="correo" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="fad fa-envelope-square"></i> Correo</label>
              </div>
              <br>
              <div class="form__div">
                <input type="password" name="password" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="fad fa-key"></i> Contraseña</label>
              </div>
              <br>
              <div class="form-group">
                <label for="my-select">Tipo de usuario</label>
                <select id="my-select" class="form-control" name="typeuser">
                @foreach($tipouser as $tipo)
                  <option value="{{$tipo->id_tipousu}}">{{$tipo->nombre}}</option>
                @endforeach
                </select>
              </div>
              <br>
              <input type="submit" class="form__button" value="Guardar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tipo Usuario Usuario -->
  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Alta Tipo Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="l-form">
            <form action="{{route('guardartipousuario')}}" method="POST"  class="form">
            {{csrf_field()}}
           
              <div class="form__div">
                <input type="text" name="nombre" class="form__input" placeholder=" ">
                <label for="" class="form__label"><i class="far fa-user-tag"></i> Tipo</label>
              </div>
              <br>
              <input type="submit" class="form__button" value="Guardar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


  
@include('sweetalert::alert')

</html>