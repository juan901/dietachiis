<?php 

include_once "controladores/plantilla.controlador.php";
include_once "controladores/agregaralimentos.controlador.php";
include_once "controladores/agregarcomidas.controlador.php";
include_once "controladores/citas.controlador.php";
include_once "controladores/consultar.controlador.php";
include_once "controladores/creardietas.controlador.php";
include_once "controladores/dietas.controlador.php";
include_once "controladores/pacientes.controlador.php";
include_once "controladores/usuarios.controlador.php";

include_once "modelos/agregaralimentos.modelos.php";
include_once "modelos/agregarcomidas.modelos.php";
include_once "modelos/citas.modelos.php";
include_once "modelos/consultar.modelos.php";
include_once "modelos/creardietas.modelos.php";
include_once "modelos/dietas.modelos.php";	
include_once "modelos/pacientes.modelos.php";
include_once "modelos/usuario.modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();