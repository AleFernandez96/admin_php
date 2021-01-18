<?php 

    include "head.php"; 
    include "header.php"; 
    include "aside.php";
?>

    <div class="content-wrapper">
    <section class="content-header">
        <h1><i class="fa fa-fw fa-plane"></i> Becas de Movilidad Internacional</h1>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">convocatorias</li>
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="glyphicon glyphicon-book"></i> Convocatorias</h3>
            </div>
            <div class="box-body">
                    
                    <table id="example1" class="table table-bordered table-striped table-hover" style="width: 100% !important;">  
                        <thead>
                            <th>Nombre de la convocatoria</th>
                            <th>Perfil para aplicar</th>
                            <th>Link para más información</th>
                            <th>Fecha de cierre de convocatoria</th>
                            <th>Estatus</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                $becas = mysqli_query($con, "SELECT * FROM movilidad_internacional ORDER BY id DESC");

                                while($row = mysqli_fetch_array($becas))
                                    {
                            ?>
                                        <tr>
                                            <td><?php echo $row['nombre_beca'];?></td>
                                            	<?php 
                                                    if ($row['id_perfil_beca']==1) {
                                                         echo "<td>Estudiantes</td>";
                                                    }
                                                    else if ($row['id_perfil_beca']==2) {
                                                        echo "<td>Docentes/Investigación</td>";
                                                    }
                                                    else if ($row['id_perfil_beca']==3) {
                                                        echo "<td>Estudiantes y Docentes</td>";
                                                    }
                                            	?> 
                                            
                                            <td>
                                            <a href="<?php echo $row['link_beca'];?>" target="blank"><?php echo $row['link_beca'];?></a>
                                            </td>
                                            <td><strong><?php echo $row['fecha_cierre_beca'];?></strong></td>
                                            	<?php 
                                                    if ($row['estatus']==1) {
                                                         echo "<td>Publicado/Vigente</td>";
                                                    }
                                                    else {
                                                        echo "<td>No Publicado/Caducada</td>";
                                                    }
                                            	?>
                                            <td>
                                                <a title="Editar" class='btn  btn-warning' href="m_editconvocatoria.php?id=<?php echo $row['id'] ?>">
                                                    <span class="glyphicon glyphicon-pencil"> Editar</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a title="Eliminar" class='btn  btn-danger' href="action/m_delconvocatoria.php?id=<?php echo $row['id'] ?>">
                                                    <span class="glyphicon glyphicon-remove"> Eliminar</span>
                                                </a>
                                            </td>
                                        </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                   </table> 

                   <a href="m_addconvocatoria.php" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar convocatoria</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    </div>

<?php include "footer.php"; ?>

    <script>

        function validarFecha(){
            $.ajax({
                url: 'action/validarFecha.php',
                success:function(respuesta){
                    console.log(respuesta);
                },
                error:function(){
                    console.log('No se ha podido hacer la petición');
                }
            });
        }validarFecha();

    </script>