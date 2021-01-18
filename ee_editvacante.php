<?php 
$active2="active";
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 


$id=$_GET["id"];
$vac = mysqli_query($con, "SELECT * FROM practicas_profesionales WHERE id_pp=\"$id\"");

while ($rows=mysqli_fetch_array($vac)) {
    $id_pp=$rows['id_pp'];
    $nombre=$rows['nombre'];
    $periodo=$rows['periodo'];
    $modalidad=$rows['modalidad'];
    $numero_vacantes=$rows['numero_vacantes'];
    $actividades=$rows['actividades'];
    $direccion=$rows['direccion'];
    $id_carrera=$rows['id_carrera'];
    $estatus=$rows['estatus'];
}

?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1><i class="fa fa-fw fa-industry"></i> Estancias y Estadías</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        // get messages
                        if (isset($_GET['success'])) {
                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong> Registro actualizado correctamente.</p>";
                        }elseif(isset($_GET['error'])) {
                             echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> <strong>¡Error! </strong>No se pudo actualizar el registro.</p>";
                        }
                    ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title"> <?php echo $nombre;?> </h3>
                        </div>
                        <form action="action/ee_editvacante.php" method="post" role="form"><!-- form start -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input name="nombre" class="form-control" value="<?php echo $nombre;?>" required="true"></input>
                                </div>

                                <div class="form-group">
                                    <label>Periodo</label>
                                    <input type="text" name="periodo" class="form-control" value="<?php echo $periodo;?>"></input>
                                </div>

                                <div class="form-group">
                                    <label>Modalidad</label>
                                    <input type="text" name="modalidad" class="form-control" value="<?php echo $modalidad;?>"></input>
                                </div>

                                <div class="form-group">
                                        <?php 
                                            $perfil = mysqli_query($con, "  SELECT
                                                                                        a.id_carrera,
                                                                                        b.*
                                                                            FROM
                                                                                        practicas_profesionales a, 
                                                                                        carreras b
                                                                            WHERE       a.id_carrera = b.id_carr
                                                                            AND         a.id_pp=\"$id\"
                                                                            GROUP BY    b.nombre_carrera
                                                                            ORDER BY    a.id_pp 
                                                                            DESC
                                                                            "); 
                                        ?>
                                        <?php while($row = mysqli_fetch_array($perfil))
                                                {
                                        ?>  
                                            <label>Perfil: <?php echo $row['nombre_carrera']; ?></label>
                                        <?php   }   ?>

                                        <?php 
                                            $perfiles = mysqli_query($con, "SELECT
                                                                                        a.id_carrera,
                                                                                        b.*
                                                                            FROM
                                                                                        practicas_profesionales a, 
                                                                                        carreras b
                                                                            GROUP BY    b.nombre_carrera
                                                                            ORDER BY    a.id_pp 
                                                                            DESC
                                                                            
                                                                            "); 
                                        ?>
                                    <select name="id_carrera" class="form-control" required="true">
                                        <option value="<?php echo $id_carrera;?>" selected>Cambiar carrera</option>
                                        <?php
                                            while($row = mysqli_fetch_array($perfiles))
                                            {
                                        ?>  
                                            <option value="<?php echo $row['id_carr'] ?>">
                                                <?php echo $row['nombre_carrera']; ?>
                                            </option>     
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Vacantes disponibles</label>
                                    <input type="number" name="numero_vacantes" class="form-control" value="<?php echo $numero_vacantes;?>" required="true"></input>
                                </div> 

                                <div class="form-group">
                                    <label>Actividades</label>
                                    <textarea type="text" name="actividades" class="form-control" rows="10" required="true"><?php echo $actividades;?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Dirección</label>
                                    <textarea type="text" name="direccion" class="form-control" rows="5" required="true"><?php echo $direccion;?></textarea>
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
                                                    <input type='radio' name='estatus' value='0'>
                                                    Dejar de publicar
                                                </div>
                                            ";
                                        }

                                      ?>
                                </div>  
 
                            </div>
                            <div class="box-footer">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <button type="submit" class="btn btn-success">Actualizar vacante</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php include "footer.php"; ?>