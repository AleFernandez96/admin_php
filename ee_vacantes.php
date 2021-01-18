<?php 
    $active2="active"; 
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 
?>
    <div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-fw fa-industry"></i> Estancias y Estadías</h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">vacantes</li>
        </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <?php
                        if (isset($_GET['delsuccess'])) {
                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong>Eliminado exitosamente!</p>";
                        }elseif(isset($_GET['delerror'])) {
                             echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> Hubo un error al eliminar el registro</p>";
                        }elseif (isset($_GET['delinvalid'])) {
                            echo "<p class='alert alert-warning'> <i class=' fa fa-exclamation-circle'></i> Permiso Denegado!.</p>";
                        }
        ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-book"></i> Vacantes</h3>
            </div>

            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre de la empresa</th>
                            <th>Perfil</th>
                            <th>No. vacantes</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                            <?php
                                $vacantes = mysqli_query($con, "
                                                                SELECT
                                                                    a.*,
                                                                    b.nombre_carrera
                                                                FROM
                                                                    practicas_profesionales a, carreras b
                                                                WHERE 
                                                                    a.id_carrera = b.id_carr
                                                                ORDER BY a.id_pp DESC

                                                                ");
                                
                                while($row = mysqli_fetch_array($vacantes))
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['nombre'] ?></td>
                                            <td><?php echo $row['nombre_carrera'] ?></td> 
                                            <td><?php echo $row['numero_vacantes'] ?></td>   
                                            <?php 
                                                if ($row['estatus']==1) {
                                                     echo "<td>Publicado</td>";
                                                }
                                                else {
                                                    echo "<td>No Publicado</td>";
                                                }
                                            ?>            
                                            <td>
                                                <a title="Editar" class='btn btn-warning' href="ee_editvacante.php?id=<?php echo $row['id_pp'] ?>">
                                                    <span class="glyphicon glyphicon-pencil"> Editar</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a title="Eliminar" class='btn btn-danger' href="action/ee_delvacante.php?id=<?php echo $row['id_pp'] ?>">
                                                    <span class="glyphicon glyphicon-remove"> Eliminar</span>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                        }
                                ?>
                    </tbody>
                </table>

                <a href="ee_addvacante.php" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar vacante</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>

<?php include "footer.php"; ?>