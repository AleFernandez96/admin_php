<?php 

    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 
?>

    <div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-fw fa-industry"></i> Bolsa de Trabajo</h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">vacantes</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <?php
            // get messages
            if (isset($_GET['delsuccess'])) {
                echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong>Eliminado exitosamente!</p>";
            }elseif(isset($_GET['delerror'])) {
                echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> Hubo un error al eliminar el archivo, puede que contenga archivos dentro.</p>";
            }elseif (isset($_GET['delinvalid'])) {
                echo "<p class='alert alert-warning'> <i class=' fa fa-exclamation-circle'></i> Permiso Denegado!.</p>";
            }
        ?>
          <div class="box box-primary">
            <div class="box-header">
                <?php 
                    $nvacantes = mysqli_query($con, "   SELECT * 
                                                        FROM apps_bt_bolsa_trabajo 
                                                        WHERE estatus = 1 
                                                        OR estatus = 2");
                ?>
                <h3 class="box-title">
                    <i class="glyphicon glyphicon-book"></i> Vacantes 
                        <span class="pull-right badge bg-blue"> <?php echo mysqli_num_rows($nvacantes); ?></span>
                </h3>
            </div>

            <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped table-hover">  
                        <thead>
                            <th>Fecha</th>
                            <th>Empresa</th>
                            <th>Vacante</th>
                            <th>Estudios</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                $vacantes = mysqli_query($con, "SELECT * 
                                                                FROM apps_bt_bolsa_trabajo 
                                                                WHERE estatus = 1 
                                                                OR estatus = 2 
                                                                ORDER BY id 
                                                                DESC");

                                while($row = mysqli_fetch_array($vacantes))
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['fecha'];?></td>
                                            <td><?php echo $row['empresa'];?></td>
                                            <td><?php echo $row['vacante'];?></td>
                                            <td><?php echo $row['estudios'];?></td>
                                                <?php 
                                                    if ($row['estatus']==1) {
                                                         echo "<td>Publicado</td>";
                                                    }
                                                    else {
                                                        echo "<td>No Publicado</td>";
                                                    }
                                                ?> 
                                            <td>
                                                <a title="Editar" class='btn  btn-warning' href="bt_editvacante.php?id=<?php echo $row['id'] ?>">
                                                    <span class="glyphicon glyphicon-pencil"> Editar</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a title="Eliminar" class='btn  btn-danger' href="action/bt_delvacante.php?id=<?php echo $row['id'] ?>">
                                                    <span class="glyphicon glyphicon-remove"> Eliminar</span>
                                                </a>
                                            </td>
                                        </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                   </table> 

                    <a href="bt_addvacante.php" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar vacante</a>
                    <!-- <a href="action/bt_reporte.php" class="btn btn-success" title=""> <i class="fa fa-file-excel-o"></i> Descargar reporte</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>

<?php include "footer.php"; ?>