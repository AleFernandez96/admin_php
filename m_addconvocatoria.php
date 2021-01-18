<?php
	session_start();

	include "../config/config.php";


if(!empty($_POST)){

    $nombre_beca = $_POST["nombre_beca"];
    $id_perfil_beca = $_POST["id_perfil_beca"];
    $fecha_cierre_beca = $_POST["fecha_cierre_beca"];
    $link_beca = $_POST["link_beca"];
    $estatus="1";

    $sql = "INSERT INTO movilidad_internacional (nombre_beca,id_perfil_beca,fecha_cierre_beca,link_beca,estatus,created_at) VALUES (\"$nombre_beca\",\"$id_perfil_beca\",\"$fecha_cierre_beca\",\"$link_beca\",\"$estatus\",now())";

	$query = mysqli_query($con, $sql);
	if ($query) {
		header("location: ../m_addconvocatoria.php?success");
	} else {
		header("location: ../m_addconvocatoria.php?error");
	}
}

// ?>

