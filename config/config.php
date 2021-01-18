<?php
	define('DB_HOST', 'upmetropolitana.edu.mx');
	define('DB_USER', 'root');
	define('DB_PASS', 'web2011');
	define('DB_NAME', 'upmetropolitana');

	$con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$con->set_charset("utf8");
    if(!$con){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        @die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?> 
