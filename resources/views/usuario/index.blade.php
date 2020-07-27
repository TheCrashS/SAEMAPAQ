<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/usuario/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/usuario/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/usuario/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('css/usuario/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/usuario/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/usuario/matrix-media.css') }}" />
<link href="{{ asset('css/usuario/font/font-awesome.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('css/usuario/fullcalendar.css') }}" />


<!--Header-part-->
<div id="header">
  <!--<h1><a href="usuarios.html">Admin</a></h1>-->
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenido</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> Mi perfil</a></li>

        <li class="divider"></li>

        <li><a href="#"  onclick="enviar_formulario();"><i class="icon-key"></i> Cerrar sesion</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="#" onclick="enviar_formulario();"><i class="icon icon-share-alt">
    </i> <span class="text">Cerrar sesion</span></a></li>
  </ul>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<script>
function enviar_formulario(){
   document.getElementById('logout-form').submit();
}
</script>

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Usuarios</a><!--titulo-->
  <ul>

    <li class="active"><a href="tables.html"><i class="icon icon-th"></i> <span>Usuarios</span></a></li>

  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Admin</a> <a href="#" class="current">Usuarios</a> </div>
    <h1>Usuarios</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">

          <div class="widget-title"> <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" ><i class="icon-plus"></i> Agregar Usuario </button><!--<i class="icon-pencil"></i>-->
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Opciones</th>
                  <th>Email</th>
                  <th>Nombre</th>

                  <th>Puesto</th>
                  <th>Telefono</th>
                  <th>Estado</th>
                  <th>Rol</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td><button class="btn btn-danger btn-mini" onclick="eliminar()"><i class="icon-remove" ></i> Eliminar</button>
                    <button class="btn btn-warning btn-mini" data-toggle="modal" data-target="#exampleModal1"><i class="icon-pencil"></i>Editar</button>
                    <script type="text/javascript">
                      function eliminar() {
                        var res = confirm("Estas seguro de eliminar?");
                      }
                    </script>
                  </td>
                  <td>
                    admin@saemapaq.ss</td>
                  <td>nameAdmin</td>

                  <td>Administrador</td>
                  <td>74521452</td>
                  <td>Habilitado</td>
                  <td>Administrador</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el email">

          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Puesto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Puesto">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefono">

          </div>

          <div class="form-group">
            <label class="control-label">Seleccionar Rol</label>
            <div class="controls">
              <label>
                <input type="radio" name="radios" />
                Administrador</label>
              <label>
                <input type="radio" name="radios" />
                Cajero</label>
              <label>
                <input type="radio" name="radios" />
                Contador</label>
              <label>
                <input type="radio" name="radios" />
                Lecturador</label>
              <label>
                <input type="radio" name="radios" />
                Asesor de Registros</label>
            </div>
          </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa el email">

          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Puesto</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Puesto">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefono">

          </div>

          <div class="form-group">
            <label class="control-label">Seleccionar Rol</label>
            <div class="controls">
              <label>
                <input type="radio" name="radios" />
                Administrador</label>
              <label>
                <input type="radio" name="radios" />
                Cajero</label>
              <label>
                <input type="radio" name="radios" />
                Contador</label>
              <label>
                <input type="radio" name="radios" />
                Lecturador</label>
              <label>
                <input type="radio" name="radios" />
                Asesor de Registros</label>
            </div>
          </div>



        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!--end-Footer-part-->
<script src="{{ asset('js/usuario/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/usuario/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('js/usuario/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/usuario/js/jquery.uniform.js') }}"></script>
<script src="{{ asset('js/usuario/js/select2.min.js') }}"></script>
<script src="{{ asset('js/usuario/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/usuario/js/matrix.js') }}"></script>
<script src="{{ asset('js/usuario/js/matrix.tables.js') }}"></script>



</body>
</html>
