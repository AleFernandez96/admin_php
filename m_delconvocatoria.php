<?php
session_start();
include "../config/config.php";


	$id=$_GET["id"];
	$vacante = mysqli_query($con, "SELECT * FROM movilidad_internacional WHERE id=$id");
	while ($rows=mysqli_fetch_array($vacante)) {
		$id=$rows['id'];
	}

	$del=mysqli_query($con, "DELETE FROM movilidad_internacional WHERE id=$id");
	if ($del) {
		// echo "Eliminado exitosamente!";
		header("location: ../m_convocatorias.php?delsuccess");
	} else {
		// echo "Hubo un error al eliminar ";
		header("location: ../m_convocatorias.php?delerror");
	}

?>