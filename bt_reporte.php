<?php 

	header('Content-Type: application/vdn.ms-excel');
	header('Content-Disposition: attachment; filename=reporte.xls');

	require('reportes/librerias/Classes/PHPExcel.php');

	$excel = new PHPExcel();
	$excel->getProperties()->setCreator('Alejandro')->setLastModifiedBy('Alejandro')->setTitle('Reporte');
	$excel->setActiveSheetIndex(0);

	$pagina = $excel-> getActiveSheet();
	$pagina-> setTitle('Vacantes');

	$mysql = new mysqli('upmetropolitana.edu.mx','root','web2011','upmetropolitana');
	$mysql->set_charset("utf8");

	$statement = $mysql->prepare('SELECT * FROM apps_bt_bolsa_trabajo WHERE estatus = 1 OR estatus = 2 ORDER BY id DESC');
	$statement->execute();

	$result = $statement->get_result();

		while ($row = $result->fetch_array()) $vacantes[] = $row;

		$pagina->setCellValue('A1', 'Empresa');
		$pagina->setCellValue('B1', 'Vacante');
		$pagina->setCellValue('C1', 'Estudios');
		$pagina->setCellValue('D1', 'Experiencia');
		$pagina->setCellValue('E1', 'Sexo');
		$pagina->setCellValue('F1', 'Edad');
		$pagina->setCellValue('G1', 'Actividades');
		$pagina->setCellValue('H1', 'Sueldo');
		$pagina->setCellValue('I1', 'Contratación');
		$pagina->setCellValue('J1', 'Lugar');
		$pagina->setCellValue('K1', 'Horario');
		$pagina->setCellValue('L1', 'Prestaciones');
		$pagina->setCellValue('M1', 'Observaciones');
		$pagina->setCellValue('N1', 'Mes de publicación');


		$pagina->getStyle('A1:N1')->getFont()->setBold(true);

			for ($i=0; $i < count($vacantes) ; $i++) { 
				$pagina->setCellValue('A'.($i+2), $vacantes[$i]['empresa']);
				$pagina->setCellValue('B'.($i+2), $vacantes[$i]['vacante']);
				$pagina->setCellValue('C'.($i+2), $vacantes[$i]['estudios']);
				$pagina->setCellValue('D'.($i+2), $vacantes[$i]['experiencia']);
				$pagina->setCellValue('E'.($i+2), $vacantes[$i]['sexo']);
				$pagina->setCellValue('F'.($i+2), $vacantes[$i]['edad']);
				$pagina->setCellValue('G'.($i+2), $vacantes[$i]['actividades_desarrolar']);
				$pagina->setCellValue('H'.($i+2), $vacantes[$i]['sueldo_propuesto']);
				$pagina->setCellValue('I'.($i+2), $vacantes[$i]['contratacion']);
				$pagina->setCellValue('J'.($i+2), $vacantes[$i]['lugar']);
				$pagina->setCellValue('K'.($i+2), $vacantes[$i]['horario']);
				$pagina->setCellValue('L'.($i+2), $vacantes[$i]['prestaciones']);
				$pagina->setCellValue('M'.($i+2), $vacantes[$i]['observaciones']);
				$pagina->setCellValue('N'.($i+2), $vacantes[$i]['fecha']);
			}
			foreach (range('A','N') as $column) {
				$pagina->getColumnDimension($column)->setAutoSize(true);
			}

	$objWritter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
	$objWritter->save('php://output');
