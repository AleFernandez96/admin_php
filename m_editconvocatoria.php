<?php 
$active2="active";
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 


$id=$_GET["id"];
$becas = mysqli_query($con, "SELECT * FROM movilidad_internacional WHERE id=\"$id\"");
while ($rows=mysqli_fetch_array($becas)) {
    $id=$rows['id'];
    $nombre_beca=$rows['nombre_beca'];
    $id_perfil_beca=$rows['id_perfil_beca'];
    $fecha_cierre_beca=$rows['fecha_cierre_beca'];
    $link_beca=$rows['link_beca'];
    $estatus=$rows['estatus'];
}

?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1><i class="fa fa-fw fa-plane"></i> Becas de Movilidad Internacional</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>
        <section class="content-header">
            <?php 
                $hoy = date('Y-m-d');
                if($fecha_cierre_beca >= $hoy){

                        $sql = "UPDATE movilidad_internacional SET estatus = 1 WHERE id=\"$id\"";
                            if ($con->query($sql) === TRUE) {
                                echo "<p class='text-center alert alert-info'>Beca/Convocatoria vigente al <b>".$fecha_cierre_beca."</b></p>";
                            } 
                            else {
                                echo "Error updating record: " . $con->error;
                            }
                }
                elseif ($fecha_cierre_beca <= $hoy) {
                        $sql = "UPDATE movilidad_internacional SET estatus = 2 WHERE id=\"$id\"";
                            if ($con->query($sql) === TRUE) {
                                echo "<p class='text-center alert alert-danger'>Beca/Convocatoria caducada desde <b>".$fecha_cierre_beca."</p>";
                            } 
                            else {
                                echo "Error updating record: " . $con->error;
                            }
                } 
            ?>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (isset($_GET['success'])) {
                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong> Registro actualizado correctamente.</p>";
                        }elseif(isset($_GET['error'])) {
                             echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> <strong>¡Error! </strong>No se pudo actualizar el registro.</p>";
                        }
                    ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title"> <?php echo $nombre_beca;?></h3>
                        </div>
                        <form action="action/m_editconvocatoria.php" method="post" role="form"><!-- form start -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Nombre de la beca</label>
                                    <input type="text" name="nombre_beca" class="form-control" value="<?php echo $nombre_beca;?>" required="true"></input>
                                </div>
                                <div class="form-group">
                                    <label>Perfil para aplicar</label>
                                        <select name="id_perfil_beca" class="form-control">
                                            <?php 
                                                if ($id_perfil_beca==1) {
                                                    echo "
                                                            <option value='1' selected='true'>Estudiantes</option>
                                                            <option value='2'>Docentes/Investigación</option>
                                                            <option value='3'>Docentes y estudiantes</option>
                                                        ";
                                                }
                                                elseif ($id_perfil_beca==2) {
                                                    echo "
                                                            <option value='1'>Estudiantes</option>
                                                            <option value='2' selected='true'>Docentes/Investigación</option>
                                                            <option value='3'>Docentes y estudiantes</option>
                                                        ";
                                                }
                                                elseif ($id_perfil_beca==3) {
                                                    echo "
                                                            <option value='1'>Estudiantes</option>
                                                            <option value='2'>Docentes/Investigación</option>
                                                            <option value='3' selected='true'>Docentes y estudiantes</option>
                                                        ";
                                                }
                                             ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de cierre de la convocatoria</label>
                                    <input type="date" name="fecha_cierre_beca" class="form-control" value="<?php echo $fecha_cierre_beca;?>" required="true"></input>
                                </div>

                                <div class="form-group">
                                    <label>Link para más información</label>
                                    <input type="text" name="link_beca" class="form-control" value="<?php echo $link_beca;?>" required="true"></input>
                                </div>

<!--                                 <div class="form-group">
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
                                </div> -->  
 
                            </div>
                            <div class="box-footer">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <button type="submit" class="btn btn-success">Actualizar convocatoria</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php include "footer.php"; ?>