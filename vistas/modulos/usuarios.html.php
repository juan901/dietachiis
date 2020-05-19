<div class="content-wrapper">

    <section class="content-header">

      <h1>
      Usuarios
      <small>Control de Usuarios</small>
      </h1>

      <ol class="breadcrumb">
        
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>

        <li><a href="#">Usuarios</a></li>

      </ol>


    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
   
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
        
      </button>

      </div>
      <!-- /.box -->
<div class="box-body">
<table class="table table-bordered table-striped dt-responsive tablas">
<thead>
  <tr>
  <th>#</th>
  <th>Nombre</th>
  <th>Usuario</th>
  <th>Fotografia</th>
  <th>Perfil</th>
  <th>Estado</th>
  <th>Último Login</th>
  <th>Acciones</th>
</tr>
</thead> 


<tbody>
<tr>
  <td>1</td>
  <td>Juan Carlos </td>
  <td>Admin</td>
  <td><img src="vistas/img/Usuarios/Default/anonymous.png" class="img-thumbnail" width="40px"> </td>
  <td>Administrador</td>
  <td><button class="btn btn-success btn-xs">Activado</button></td>
  <td>12/09/2018</td>
   <td>
     <div class="btn-group"> 
       <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
       <button class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
     </div>
   </td>
   </tr>

<tr>
     <td>2</td>
  <td>Pedro Antonio</td>
  <td>Servicio</td>
  <td><img src="vistas/img/Usuarios/Default/anonymous.png" class="img-thumbnail" width="40px"> </td>
  <td>Paciente</td>
  <td><button class="btn btn-success btn-xs">Activado</button></td>
  <td>12/09/2018</td>
   <td>
     <div class="btn-group"> 
       <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
       <button class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
     </div>
   </td>
</tr>

<tr>
     <td>3</td>
  <td>Luis Antonio</td>
  <td>Servicio</td>
  <td><img src="vistas/img/Usuarios/Default/anonymous.png" class="img-thumbnail" width="40px"> </td>
  <td>Paciente</td>
  <td><button class="btn btn-success btn-xs">Activado</button></td>
  <td>12/09/2018</td>
   <td>
     <div class="btn-group"> 
       <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
       <button class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
     </div>
   </td>
</tr>


</tbody>

</table>  

</div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    <!--=====================================
  =           MODAL AGREGAR USUARIO         =
  ======================================-->


<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
          <!--=====================================
  =          CABEZA DEL MODAL       =
  ======================================-->
      <div class="modal-header" style="background:#3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
    <!--=====================================
  =           CUERPO DEL MODAL          =
  ======================================-->

      <div class="modal-body">

        <div class="box-body">

            <!--NOMBRE -->
            <div class="form-group">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
              </div>
            </div>

              <!--USUARIO -->
            <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
                </div>
            </div>

               <!--USUARIO -->
            <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
                </div>
            </div>

            <!--Selección de Perfil  -->
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                <select class="form-control input-lg"name="nuevoPerfil">
                <option value="">Selección de valor</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial"> Especial</option>
                <option value="Vendedor">Vendedor</option>
                </select>
                </div>
            </div>

              <!--Selección de Perfil  -->

            <div class="form-group">
              <div class="panel">SUBIR FOTO </div>
              <input type="file" id="nuevaFoto" name="nuevaFoto">
              <p class="help-block">Peso máximo de la foto 200 MB</p>
              <img src="vistas/img/Usuarios/Default/anonymous.png" class="img-thumbnail" width="100px">
              </div>
            </div>
      <!--=====================================
  =           PIE DE MODAL          =
  ======================================-->

          <div class="modal-footer">        
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>     

          </div>
          </form>

      </div>
</div>
    </div>

 </div>
