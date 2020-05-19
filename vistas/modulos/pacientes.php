
<div class="content-wrapper">
   <section class="content-header">

    <h1>
    Pacientes
    <small>Control de Pacientes</small>
    </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>

        <li><a href="#">Pacientes</a></li>
      </ol>
 </section>



<section class="content">

 <!-- Default box -->
<div class="box">
<div class="box-header with-border">

<!--Agregar un Botón para agregar pacientes  -->      
<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPacientes">
Agregar Paciente</button>
        <div class="box-body">
          <table id="example" class="table table-bordered table-striped dt-responsive">
              <thead>
                <tr>
                  <th>Nombre(s)</th>
                  <th>Apellidos</th>
                  <th>Sexo</th>
                  <th>Patologias</th>
                  <th>Peso</th>
                  <th>Altura</th>
                  <th>Edad</th>
                  <th>Talla</th>
                  <th>Biceps</th>
                  <th>Humero</th>
                  <th>Cintura</th>
                  <th>Biotipo</th>
                  <th>Celular</th>
                  <th>Telefono</th>
              </thead>

            <tbody>

              <?php

                 $item = null; 
                 $valor = null; 
                $pacientes = ControladorPaciente::ctrMostrarPacientes($item, $valor);

                 foreach ($pacientes as $key => $value) {
          echo'
        <tr>
         
      <td>'.$value["nuevoNombrePaciente"].'</td>
  <td>'.$value["nuevoApellidoPaciente"].'</td>
  <td>'.$value["pacienteSexo"].'</td>
  <td>'.$value["patologias"].'</td>
  <td>'.$value["nuevopesopaciente"].' Kg. </td>
  <td>'.$value["nuevalturaPaciente"].' Cm.</td>
  <td>'.$value["NuevaEdadPaciente"].' Años </td>
  <td>'.$value["nuevaTallaPaciente"].'</td>
  <td>'.$value["nuevopacientebiceps"].' Cm.</td>
  <td>'.$value["nuevoPacienteHumero"].' Cm.</td>
  <td>'.$value["nuevopacientecintura"].' Cm.</td>
  <td>'.$value["NuevoBiotipo"].'</td>
  <td>'.$value["nuevopacientecelular"].'</td>
  <td>'.$value["nuevopacientetel"].'</td>' ; 

             
                }

                ?>

            </tbody>

          </table>

           </div>
            </section>         
          </div>


          
   



<div id="modalAgregarPacientes" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background:#3c8dbc; color:white">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Agregar Pacientes</h4>
            </div>

          <div class="modal-body">
          <div class="box-body">    
          <div class="form-group">
           

            <div class="panel">INFORMACIÓN DEL PACIENTE</div>
           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombrePaciente" placeholder="Ingresar Nombre" required>
          </div>
          </div>

           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoApellidoPaciente" placeholder="Ingresar Apellidos" required>
          </div>
          </div>


              <!--NOMBRE PACIENTE  -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="date" class="form-control input-lg" name="nacimientoPaciente" placeholder="Ingresar Fecha de Nacimiento" required>
            </div>
            </div>

               <!--GENERO -->
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                <select class="form-control input-lg"name="pacienteSexo">
                <option value="">Selección de valor</option>
                <option value="Especial">Hombre</option>
                <option value="Vendedor">Mujer</option>
                </select>
            </div>
            </div>


               <!--PATOLOGIAS -->
            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
              <input type="text" class="form-control input-lg" name="patologias" placeholder="patologias" required>
            </div>
            </div>

            <!--DATOS NUTRICIONALES  -->
            <div class="form-group">
            <div class="panel">DATOS MEDICOS</div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
              <input type="text" class="form-control input-lg" name="nuevopesopaciente" placeholder="Peso(Kg.)" required>
              <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
              <input type="text" class="form-control input-lg" name="nuevalturaPaciente" placeholder="Altura(Cm)" required>
              <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
              <input type="text" class="form-control input-lg" name="NuevaEdadPaciente" placeholder="Edad" required>
              <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaTallaPaciente" placeholder="Talla" required>
            </div>
            </div>

            <!--DATOS ANTROPOMORFICOS  -->
            <div class="form-group">
            <div class="panel">DATOS ANTROPOMORFICOS</div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
              <input type="text" class="form-control input-lg" name="nuevopacientebiceps" placeholder="nuevopacientebiceps" required>
              <span class="input-group-addon"><i class="fa fa-text-height"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoPacienteHumero" placeholder="Diametro del Humero" required>
            </div>
            </div>

            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
              <input type="text" class="form-control input-lg" name="nuevopacientecintura" placeholder="Cintura" required>
                <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                <select class="form-control input-lg"name="NuevoBiotipo">
                <option value="">Biotipo</option>
                <option value="Especial">Ectoformo</option>
                <option value="Vendedor">Mesomorfos</option>
                <option value="Vendedor">Endomorfos</option>
                </select>
             
            </div>
            </div>

 <div class="box-body">    
          <div class="form-group">
           

            <div class="panel">DATOS DE CONTACTO</div>
           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevopacientecelular" placeholder="Numero de Celular" required>
          </div>
          </div>

           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevopacientetel" placeholder="Numero de Casa" required>
          </div>
          </div>





 <div class="modal-footer">        
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>     
        


         
  </div>
   <?php
        $crearPaciente = new ControladorPaciente();
        $crearPaciente -> ctrCrearPaciente();
      ?>

      

         
</form>


    </div>

 </div>
  </div>



         


             
          
     

