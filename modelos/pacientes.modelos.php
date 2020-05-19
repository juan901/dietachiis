<?php

require_once "conexion.php";
class ModeloPaciente{

	static public function mdlMostrarPaciente($tabla, $item, $valor) {
    if($item != null){
    $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
    $stmt -> execute();
    return $stmt -> fetch();
    } else {
    $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
    $stmt -> execute();
    return $stmt -> fetchAll();
    }

		$stmt -> close();
		$stmt = null;
	}


  /*-=====================================
  =           MODAL AGREGAR USUARIO         =
  ======================================*/

  static public function mdlIngresarPaciente($tabla,$datospaciente){

    $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(idpaciente,nuevoNombrePaciente,
    nuevoApellidoPaciente,nacimientoPaciente,pacienteSexo,patologias,nuevopesopaciente,
    nuevalturaPaciente,NuevaEdadPaciente,nuevaTallaPaciente,nuevopacientebiceps,nuevoPacienteHumero,nuevopacientecintura,NuevoBiotipo,nuevopacientecelular,nuevopacientetel) VALUES (:idpaciente,:nuevoApellidoPaciente,:nuevoApellidoPaciente,:nacimientoPaciente,:pacienteSexo,:patologias,:nuevopesopaciente,nuevalturaPaciente,:NuevaEdadPaciente,:nuevaTallaPaciente,:nuevopacientebiceps,:nuevoPacienteHumero,:nuevopacientecintura,:NuevoBiotipo,:nuevopacientecelular,:nuevopacientetel)");


    $stmt -> bindParam(":idpaciente",$datospaciente["idpaciente"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevoNombrePaciente",$datospaciente["nuevoNombrePaciente"],PDO::PARAM_STR);
    $stmt -> bindParam(":nuevoApellidoPaciente",$datospaciente["nuevoApellidoPaciente"],PDO::PARAM_STR);
    $stmt -> bindParam(":nacimientoPaciente:",$datospaciente["nacimientoPaciente"],PDO::PARAM_STR);
    $stmt -> bindParam(":pacienteSexo",$datospaciente["pacienteSexo"],PDO::PARAM_STR);
    $stmt -> bindParam(":patologias",$datospaciente["patologias"],PDO::PARAM_STR);
    $stmt -> bindParam(":nuevopesopaciente",$datospaciente["nuevopesopaciente"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevalturaPaciente",$datospaciente["nuevalturaPaciente"],PDO::PARAM_INT);
    $stmt -> bindParam(":NuevaEdadPaciente",$datospaciente["NuevaEdadPaciente"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevaTallaPaciente",$datospaciente["nuevaTallaPaciente"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevopacientebiceps",$datospaciente["nuevopacientebiceps"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevoPacienteHumero",$datospaciente["nuevoPacienteHumero"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevopacientecintura",$datospaciente["nuevopacientecintura"],PDO::PARAM_INT);
    $stmt -> bindParam(":NuevoBiotipo",$datospaciente["NuevoBiotipo"],PDO::PARAM_STR);
    $stmt -> bindParam(":nuevopacientecelular",$datospaciente["nuevopacientecelular"],PDO::PARAM_INT);
    $stmt -> bindParam(":nuevopacientetel",$datospaciente["nuevopacientetel"],PDO::PARAM_INT);


  
    if($stmt -> execute()){
        return  "ok"; 
    } else {
        return  "error";
    }
var_dump($stmt);
$stmt -> close();
    $stmt = null; 

  }
  


}
