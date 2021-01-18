<?php
	session_start();

	include "../config/config.php";


if(!empty($_POST)){

    $nombre = $_POST["nombre"];
    $periodo = $_POST["periodo"];
    $modalidad = $_POST["modalidad"];
    $numero_vacantes = $_POST["numero_vacantes"];
    $id_carrera = $_POST["id_carrera"];
    $actividades = $_POST["actividades"];
    $direccion = $_POST["direccion"];
    $estatus="1";

		    $sql = "INSERT INTO practicas_profesionales (	nombre,
		    												periodo,
		    												modalidad,
		    												numero_vacantes,
		    												id_carrera,
		    												actividades,
		    												direccion,
		    												estatus,
		    												created_at) 
		    		VALUES (\"$nombre\",
				    		\"$periodo\",
				    		\"$modalidad\",
				    		\"$numero_vacantes\",
				    		\"$id_carrera\",
				    		\"$actividades\",
				    		\"$direccion\",
				    		\"$estatus\",
				    		NOW())";

			$query = mysqli_query($con, $sql);
			if ($query) {
				header("location: ../ee_addvacante.php?success");
			} else {
				header("location: ../ee_addvacante.php?error");
			}
}

?>