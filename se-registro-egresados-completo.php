<?php 
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 

$id=$_GET["id"];
$vac = mysqli_query($con, "SELECT * FROM regresados WHERE id=\"$id\"");
while ($rows=mysqli_fetch_array($vac)) {
    $id=$rows['id'];
    $matricula=$rows['matricula'];
    $nombre=$rows['nombre'];
    $telefono=$rows['telefono'];
    $carrera_egresado=$rows['carrera_egresado'];
    $actividadprofesional=$rows['actividadprofesional'];
    $experienciaestudiante=$rows['experienciaestudiante'];
    $comentarios=$rows['comentarios'];
    $imagen=$rows['imagen'];
}

?>
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1><i class="fa fa-fw fa-industry"></i> Seguimiento a egresados - casos de exito</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">registros</li>
            </ol>
        </section>
        <section class="content"><!-- Main content -->
            <div class="row"><!-- Small boxes (Stat box) -->
                <div class="col-md-12">
                    <div class="box box-primary"><!-- general form elements -->
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-file-text"></i> Registros 
                            </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">

                                <form action="action/bt_editvacante.php" method="post" role="form"><!-- form start -->

                                    <div class="box-body row">
                                        <div class="form-group col-lg-12">
                                            <label>Matricula:</label>
                                            <input name="fecha" class="form-control" value="<?php echo $matricula;?>" readonly="readonly">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Nombre completo:</label>
                                            <input name="empresa" class="form-control" value="<?php echo $nombre;?>" readonly="readonly">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Carrera:</label>
                                            <input class="form-control" rows="3" value="<?php echo $carrera_egresado;?>" readonly="readonly">


                                        <!-- Cambiar esto -->

<!-- 
                                        <?php 
                                            if($id_carrera_egresado == 1){
                                                echo '<input class="form-control" value="Ingeniería en Aeronáutica" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 2) {
                                                echo '<input class="form-control" value="Licenciatura en Comercio Internacional y Aduanas" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 3) {
                                                echo '<input class="form-control" value="Ingeniería en Logística y Transporte" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 4) {
                                                echo '<input class="form-control" value="Ingeniería en Energía" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 5) {
                                                echo '<input class="form-control" value="Ingeniería en Tecnologías de la Información" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 6) {
                                                echo '<input class="form-control" value="Licenciatura en Administración y Gestión Empresarial" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 7) {
                                                echo '<input class="form-control" value="Ingeniería en Animación y Efectos Visuales" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado== 8) {
                                                echo '<input class="form-control" value="Licenciatura en Arquitectura Bioclimática" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 9) {
                                                echo '<input class="form-control" value="Maestría en Comercio y Logística Internacional" readonly="readonly">';
                                            }
                                            elseif ($id_carrera_egresado == 11) {
                                                echo '<input class="form-control" value="Maestría en Ingeniería Aeroespacial" readonly="readonly">';
                                            }
                                        ?> -->
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Correo electrónico:</label>
                                            <input class="form-control" rows="3" value="<?php echo $telefono;?>" readonly="readonly">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Actividad profesional actual:</label>
                                            <input class="form-control" value="<?php echo $actividadprofesional;?>" readonly="readonly">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>¿Cual consideras ha sido tu mejor experiencia en la UPMH?:</label>
                                            <textarea class="form-control" rows="10" readonly="readonly"><?php echo $experienciaestudiante;?></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Compartenos tus comentarios personales:</label>
                                            <textarea class="form-control" rows="10" readonly="readonly"><?php echo $comentarios;?></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Imagen compartida:</label>
                                            <!-- <img class="img-responsive" src="http://intranet.upmh.edu.mx/segresados/<?php echo $imagen;?>" alt=""> -->
                                                <br>
                                                <a href="http://sistemas.upmh.edu.mx/se-formulario/<?php echo $imagen;?>" download="<?php echo $matricula;?>">
                                                    <!-- <i class="fa fa-eye"></i> -->
                                                    <img class="img-responsive" src="http://sistemas.upmh.edu.mx/se-formulario/<?php echo $imagen;?>" alt="">
                                                </a>
                                        </div>

                                    </div><!-- /.box-body -->
                                </form>

                        </div>
                    </div><!-- /.box -->
                </div>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->

<?php include "footer.php"; ?>

