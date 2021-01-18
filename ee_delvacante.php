<?php
session_start();
include "../config/config.php";


	$id=$_GET["id"];
	$vacante = mysqli_query($con, "SELECT * FROM practicas_profesionales WHERE id_pp=$id");
	while ($rows=mysqli_fetch_array($vacante)) {
		$id=$rows['id_pp'];
	}

	$del=mysqli_query($con, "DELETE FROM practicas_profesionales WHERE id_pp=$id");
	if ($del) {
		// echo "Eliminado exitosamente!";
		header("location: ../ee_vacantes.php?delsuccess");
	} else {
		// echo "Hubo un error al eliminar ";
		header("location: ../ee_vacantes.php?delerror");
	}


// header("location: ../myfiles.php");

?>