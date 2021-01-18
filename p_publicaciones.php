<?php 

    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 
?>
    <div class="content-wrapper">
       <section class="content-header">
            <h1><i class="fa fa-fw fa-industry"></i> Investigaciones</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"> Investigaciones</li>
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
                        $nvacantes = mysqli_query($con, "   SELECT 
                                                                *
                                                            FROM 
                                                                investigaciones
                                                            WHERE 
                                                                estatus = 1 
                                                            ORDER BY 
                                                                fecha_publicacion 
                                                            DESC");
                    ?>
                    <h3 class="box-title">
                        <i class="glyphicon glyphicon-book"></i> Investigaciones 
                            <span class="pull-right badge bg-blue"> <?php echo mysqli_num_rows($nvacantes); ?></span>
                    </h3>
                </div>

                <div class="box-body">

                        <table id="example1" class="table table-bordered table-striped table-hover">  
                            <thead>
                                <th>Fecha de publicación</th>
                                <th>Titulo de la investigación</th>
                                <th>Autores</th>
                                <th>Link de página oficial</th>
                            </thead>
                            <tbody>
                                <?php
                                    $vacantes = mysqli_query($con, "SELECT 
                                                                        *
                                                                    FROM 
                                                                        investigaciones
                                                                    WHERE 
                                                                        estatus = 1 
                                                                    ORDER BY 
                                                                        fecha_publicacion 
                                                                    DESC");

                                    while($row = mysqli_fetch_array($vacantes))
                                        {
                                ?>
                                            <tr>
                                                <td><?php echo $row['fecha_publicacion'];?></td>
                                                <td><?php echo $row['titulo_investigacion'];?></td>
                                                <td><?php echo $row['autores_investigacion'];?></td>
                                                <td>
                                                    <!--    -->   
                                                    <a class="btn btn-purple" href="<?php echo $row['link_investigacion'];?>" target="_blank">Visitar página</a>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                ?>
                            </tbody>
                       </table> 
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

    <?php include "footer.php"; ?>

