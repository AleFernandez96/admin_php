<?php 
    $active5="active"; 
    include "head.php"; 
    include "header.php";
    include "aside.php"; 

?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1><i class="fa fa-fw fa-industry"></i> Estancias y Estadías</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Nueva vacante</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        // get messages
                        if (isset($_GET['success'])) {
                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong>Registro insertado correctamente</p>";
                        }elseif(isset($_GET['error'])) {
                             echo "<p class='alert alert-warning'> <i class=' fa fa-exclamation-circle'></i> No se pudo registrar, hubo un error.</p>";
                        }
                    ?>
                    <div class="box box-primary"><!-- general form elements -->
                        <div class="box-header with-border">
                            <h3 class="box-title"><button class="btn btn-xs btn-success"><i class="fa fa-plus"></i></button> Nueva vacante</h3>
                        </div>

                        <form role="form" action="action/ee_addvacante.php" method="post" enctype="multipart/form-data"><!-- form start -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input type="text" name="nombre" class="form-control" required="true"></input>
                                </div>

                                <div class="form-group">
                                    <label>Periodo</label>
                                    <select name="periodo" class="form-control" required="true">
                                        <option value="">Selecciona periodo</option>
                                        <option value="Estancia">Estancia</option>
                                        <option value="Estadía">Estadía</option>
                                        <option value="Estancia y Estadía">Estancia y Estadía</option>
                                    </select>
                                    <!-- <input type="text" name="periodo" class="form-control" placeholder=""></input> -->
                                </div>

                                <div class="form-group">
                                    <label>Modalidad</label>
                                    <select name="modalidad" class="form-control" required="true">
                                        <option value="">Selecciona la modalidad</option>
                                        <option value="Presencial">Presencial</option>
                                        <option value="Semipresencial">Semipresencial</option>
                                        <option value="A distancia">A distancia</option>
                                    </select>
                                    <!-- <input type="text" name="periodo" class="form-control" placeholder=""></input> -->
                                </div>

                                <div class="form-group">
                                    <label>Perfil para aplicar</label>
                                        <?php 
                                            $perfiles = mysqli_query($con, "SELECT id_carr, nombre_carrera FROM carreras"); 
                                        ?>
                                    <select name="id_carrera" class="form-control" required="true">
                                        <option value="">Selecciona carrera</option>
                                        <?php
                                            while($row = mysqli_fetch_array($perfiles))
                                            {
                                        ?>  
                                            <option value="<?php echo $row['id_carr'] ?>"><?php echo $row['nombre_carrera']; ?></option>     
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Número de vacantes <small>(Vacantes disponibles)</small></label>
                                    <input type="number" name="numero_vacantes" class="form-control" required="true"></input>
                                </div>


                                <div class="form-group">
                                    <label>Actividades a desarrollar</label>
                                    <textarea type="text" name="actividades" class="form-control" rows="10" required="true"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Dirección de empresa</label>
                                    <textarea type="text" name="direccion" class="form-control" rows="5" required="true"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Agregar vacante</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php include "footer.php"; ?>