<?php

	include "../config/config.php";

if(!empty($_POST)){

	$id=$_POST["id"];
	$vacante = mysqli_query($con, "SELECT * FROM practicas_profesionales WHERE id_pp=$id");
	while ($rows=mysqli_fetch_array($vacante)) {
		$id=$rows['id_pp'];
	}
	
	$nombre = $_POST["nombre"];
	$periodo = $_POST["periodo"];
	$modalidad = $_POST["modalidad"];
    $numero_vacantes = $_POST["numero_vacantes"];
    $id_carrera = $_POST["id_carrera"];
    $actividades = $_POST["actividades"];
    $direccion = $_POST["direccion"];
    $estatus = $_POST["estatus"];

	$sql = "UPDATE 	practicas_profesionales
			SET 
					nombre=\"$nombre\", 
					periodo=\"$periodo\", 
					modalidad=\"$modalidad\", 
					numero_vacantes=\"$numero_vacantes\", 
					id_carrera=\"$id_carrera\", 
					actividades=\"$actividades\",
					direccion=\"$direccion\",  
					estatus=\"$estatus\"

			WHERE 	id_pp=$id";

	$update=mysqli_query($con, $sql);
	if ($update) {
		header("location: ../ee_editvacante.php?id=".$id."&success");
	} else {
		header("location: ../ee_editvacante.php?id=".$id."&error");
	}
}


?>