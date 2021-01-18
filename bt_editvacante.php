<?php 
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 

$id=$_GET["id"];
$vac = mysqli_query($con, "SELECT * FROM apps_bt_bolsa_trabajo WHERE id=\"$id\"");
while ($rows=mysqli_fetch_array($vac)) {
    $id=$rows['id'];
    $fecha=$rows['fecha'];
    $empresa=$rows['empresa'];
    $contacto=$rows['contacto'];
    $vacante=$rows['vacante'];
    $estudios=$rows['estudios'];
    $experiencia=$rows['experiencia'];
    $sexo=$rows['sexo'];
    $edad=$rows['edad'];
    $actividades_desarrolar=$rows['actividades_desarrolar'];
    $sueldo_propuesto=$rows['sueldo_propuesto'];
    $contratacion=$rows['contratacion'];
    $lugar=$rows['lugar'];
    $horario=$rows['horario'];
    $prestaciones=$rows['prestaciones'];
    $observaciones=$rows['observaciones'];
    $ligadoc1=$rows['ligadoc1'];
    $ligadoc2=$rows['ligadoc2'];
    $estatus=$rows['estatus'];
}

?>
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1><i class="fa fa-fw fa-industry"></i> Bolsa de Trabajo</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>
        <section class="content"><!-- Main content -->
            <div class="row"><!-- Small boxes (Stat box) -->
                <div class="col-md-12">
                    <?php
                        // get messages
                        if (isset($_GET['success'])) {
                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong> Registro actualizado correctamente.</p>";
                        }elseif(isset($_GET['error'])) {
                             echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> <strong>¡Error! </strong>No se pudo actualizar el registro.</p>";
                        }
                    ?>
                    <div class="box box-primary"><!-- general form elements -->
                        <div class="box-header with-border">
                          <h3 class="box-title"> <?php echo $empresa;?></h3>
                        </div><!-- /.box-header -->
                        <form action="action/bt_editvacante.php" method="post" role="form"><!-- form start -->
                            <div class="box-body">
                                <!-- <div class="form-group">
                                    <a download="información" target="blank" href="https://drive.google.com/open?id=1k4fe3aYAGA9a8NOib-t_M4dZ9um2mfbn" title=""><label>Ver información en pdf</label> <i class="fa fa-file"></i></a>
                                </div> -->
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input name="fecha" class="form-control" value="<?php echo $fecha;?>"></input>
                                </div>
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input name="empresa" class="form-control" value="<?php echo $empresa;?>"></input>
                                </div>
                                <div class="form-group">
                                    <label>Contacto</label>
                                    <textarea name="contacto" class="form-control" rows="10"><?php echo $contacto;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Vacante</label>
                                    <textarea name="vacante" class="form-control" rows="3"><?php echo $vacante;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Estudios (Carrera)</label>
                                    <textarea name="estudios" class="form-control" rows="5"><?php echo $estudios;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Experiencia</label>
                                    <textarea name="experiencia" class="form-control" rows="9"><?php echo $experiencia;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Actividades a desarrollar</label>
                                    <textarea type="text" name="actividades_desarrolar" class="form-control" rows="9"><?php echo $actividades_desarrolar;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <input type="text" name="sexo" class="form-control" value="<?php echo $sexo;?>"></input>
                                </div>

                                <div class="form-group">
                                    <label>Edad</label>
                                    <input type="text" name="edad" class="form-control" value="<?php echo $edad;?>"></input>
                                </div>
                                <div class="form-group">
                                    <label>Sueldo propuesto</label>
                                    <input type="text" name="sueldo_propuesto" class="form-control" value="<?php echo $sueldo_propuesto;?>"></input>
                                </div>

                                <div class="form-group">
                                    <label>Contratación</label>
                                    <input type="text" name="contratacion" class="form-control" value="<?php echo $contratacion;?>"></input>
                                </div>

                                <div class="form-group">
                                    <label>Horario</label>
                                    <input type="text" name="horario" class="form-control" value="<?php echo $horario;?>"></input>
                                </div>

                                <div class="form-group">
                                    <label>Lugar</label>
                                    <textarea type="text" name="lugar" class="form-control" rows="5"><?php echo $lugar;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Prestaciones</label>
                                    <textarea type="text" name="prestaciones" class="form-control" rows="5"><?php echo $prestaciones;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Más información</label>
                                    <textarea type="text" name="observaciones" class="form-control" rows="9"><?php echo $observaciones;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Liga a pdf para más información</label>
                                    <input name="ligadoc1" type="text" value="<?php echo $ligadoc1;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input name="ligadoc2" type="text" value="<?php echo $ligadoc2;?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Estatus:</label>
                                    <?php 
                                        if ($estatus==1) {
                                            echo "Publicado en la página";
                                        }
                                        else {
                                            echo "La vacante no se encuentra publicada en la página";
                                        }
                                     ?>
                                    <?php 

                                        if ($estatus==1) {
                                            echo "
                                                <div class='radio'>                                      
                                                    <input type='radio' name='estatus' value='1' checked='true'>
                                                    Publicar en la página 
                                                </div>

                                                <div class='radio'>
                                                    <input type='radio' name='estatus' value='2'>
                                                    Dejar de publicar
                                                </div>
                                            ";
                                        }
                                        else {
                                            echo "
                                                <div class='radio'>                                      
                                                    <input type='radio' name='estatus' value='1'>
                                                    Publicar en la página 
                                                </div>

                                                <div class='radio'>
                                                    <input type='radio' name='estatus' value='2'>
                                                    Dejar de publicar
                                                </div>
                                            ";
                                        }

                                      ?>
                                </div>  
 
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <button type="submit" class="btn btn-success">Actualizar vacante</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->

<?php include "footer.php"; ?>

