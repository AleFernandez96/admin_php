<?php 
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 
?>

    <div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-graduation-cap"></i> Seguimiento a egresados - casos de exito</h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">registros</li>
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
                    $matricula = mysqli_query($con, "   SELECT * 
                                                        FROM regresados");
                ?>
                <h3 class="box-title">
                    <i class="fa fa-file-text"></i> Registros 
                        <span class="pull-right badge bg-blue"> <?php echo mysqli_num_rows($matricula); ?></span>
                </h3>
            </div>

            <div class="box-body">

                    <table id="example1" class="table table-bordered table-striped table-hover">  
                        <thead>
                            <th>Fecha</th>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Carrera</th>
                            <th></th>
                        </thead>
                        <tbody>

                            <?php
                                $vacantes = mysqli_query($con,  "
                                                                SELECT * 
                                                                FROM regresados
                                                                ");
                                
                                while($row = mysqli_fetch_array($vacantes))
                                    {
                            ?>
                                        <tr>
                                            <?php  ?>
                                            <td><?php echo $row['fecha']; ?></td>
                                            <td><?php echo $row['matricula']; ?></td>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['carrera_egresado']; ?></td>
                                            <td>
                                                <a title="Editar" class='btn btn-primary' href="se-registro-egresados-completo.php?id=<?php echo $row['id'] ?>">
                                                    <span class="fa fa-hand-o-right"> Ver todo</span>
                                                </a>
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

<!-- SELECT *
FROM carreras C 
INNER JOIN regresados PP
ON C.id = PP.id_carrera_egresado
ORDER BY PP.id DESC -->