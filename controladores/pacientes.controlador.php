
<?php

class ControladorPaciente{


static public function ctrCrearPaciente(){
	if(isset($_POST["idpaciente"])){
			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["idpaciente"])){

$tabla = "pacientes";
$datos = array (
								"id"=>$_POST["idpaciente"],
								"nombre"=>$_POST["nuevoNombrePaciente"],
			   					"apellido"=>$_POST["nuevoApellidoPaciente"],
			   					"fnacimiento"=>$_POST["nacimientoPaciente"],
			   					"sexo"=>$_POST["pacienteSexo"],
			   					"patologias"=>$_POST["patologias"],			   					
			     				"peso"=>$_POST["nuevopesopaciente"],
			     				"altura"=>$_POST["nuevalturaPaciente"],
			     				"edad"=>$_POST["NuevaEdadPaciente"],
			     				"talla"=>$_POST["nuevaTallaPaciente"],
			     				"biceps"=>$_POST["nuevopacientebiceps"],
								"humero"=>$_POST["nuevoPacienteHumero"],
								"cintura"=>$_POST["nuevopacientecintura"],
								"Biotipo"=>$_POST["NuevoBiotipo"],
								"numerocelular"=>$_POST["nuevopacientecelular"],
								"numerodecasa"=>$_POST["nuevopacientetel"]);

	
}
$respuesta = ModeloPaciente::mdlIngresarPaciente($tabla,$datos);
}


}

static public function ctrMostrarPacientes($item, $valor){
		$tabla = "pacientes";
		$respuesta = ModeloPaciente::mdlMostrarPaciente($tabla, $item, $valor);
		return $respuesta;
	}



	}

?>
