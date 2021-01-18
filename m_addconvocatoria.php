<?php 
    $active5="active"; 
    include "head.php"; 
    include "header.php";
    include "aside.php"; 

?>

    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1><i class="fa fa-fw fa-plane"></i> Becas de Movilidad Internacional</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Nueva vacante</li>
            </ol>
        </section>

        <section class="content"><!-- Main content -->
            <div class="row"><!-- Small boxes (Stat box) -->
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
                            <h3 class="box-title"><button class="btn btn-xs btn-success"><i class="fa fa-plus"></i></button> Nueva convocatoria</h3>
                        </div><!-- /.box-header -->

                        <form role="form" action="action/m_addconvocatoria.php" method="post" enctype="multipart/form-data"><!-- form start -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Nombre de la beca</label>
                                    <input type="text" name="nombre_beca" class="form-control" placeholder="" required="true"></input>
                                </div>
                                <div class="form-group">
                                    <label>Perfil para aplicar</label>
                                    <select name="id_perfil_beca" class="form-control">
                                      <option value="1">Estudiantes</option>
                                      <option value="2">Docentes/Investigación</option>
                                      <option value="3">Estudiantes y Docentes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Fecha de cierre de la convocatoria</label>
                                    <input type="date" name="fecha_cierre_beca" class="form-control" placeholder="" required="true"></input>
                                </div>

                                <div class="form-group">
                                    <label>Link para más información</label>
                                    <input type="text" name="link_beca" class="form-control" placeholder="" required="true"></input>
                                </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Registrar beca</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->

<?php include "footer.php"; ?>