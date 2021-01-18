<?php

include "../config/config.php";

if(!empty($_POST)){

	$id=$_POST["id"];
	$becas = mysqli_query($con, "SELECT * FROM movilidad_internacional WHERE id=$id");
	while ($rows=mysqli_fetch_array($becas)) {
		$id=$rows['id'];
		$fecha_cierre_beca=$rows['fecha_cierre_beca'];
	}
	
	$nombre_beca = $_POST["nombre_beca"];
	$id_perfil_beca = $_POST["id_perfil_beca"];
	$fecha_cierre_beca = $_POST["fecha_cierre_beca"];
    $link_beca = $_POST["link_beca"];
    $estatus = $_POST["estatus"]; 

	$sql = "UPDATE movilidad_internacional SET 
												nombre_beca=\"$nombre_beca\", 
												id_perfil_beca=\"$id_perfil_beca\", 
												fecha_cierre_beca=\"$fecha_cierre_beca\", 
												link_beca=\"$link_beca\",
												estatus=\"$estatus\"

											WHERE id=$id";

	$update=mysqli_query($con, $sql);
	if ($update) {
		header("location: ../m_editconvocatoria.php?id=".$id."&success");
	} else {
		header("location: ../m_editconvocatoria.php?id=".$id."&error");
	}
}


?>