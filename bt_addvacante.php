<?php 
    include "head.php"; 
    include "header.php";
    include "aside.php"; 

?>
    <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
        <section class="content-header"><!-- Content Header (Page header) -->
            <h1><i class="fa fa-fw fa-industry"></i> Bolsa de Trabajo</h1>
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
                            <h3 class="box-title"><button class="btn btn-xs btn-success"><i class="fa fa-plus"></i></button> Nueva vacante</h3>
                        </div><!-- /.box-header -->

                        <form role="form" action="action/bt_addvacante.php" method="post" enctype="multipart/form-data"><!-- form start -->
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="text" name="fecha" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input type="text" name="empresa" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Contacto</label>
                                    <textarea type="text" name="contacto" class="form-control" rows="8" placeholder=""></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Vacante</label>
                                    <textarea type="text" name="vacante" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Estudios (Carrera)</label>
                                    <textarea type="text" name="estudios" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Experiencia</label>
                                    <textarea type="text" name="experiencia" class="form-control" rows="9" placeholder=""></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Actividades a desarrollar</label>
                                    <textarea type="text" name="actividades_desarrolar" class="form-control" rows="9" placeholder=""></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Sexo</label>
                                    <input type="text" name="sexo" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Edad</label>
                                    <input type="text" name="edad" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Sueldo propuesto</label>
                                    <input type="text" name="sueldo_propuesto" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Contratación</label>
                                    <input type="text" name="contratacion" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Horario</label>
                                    <input type="text" name="horario" class="form-control" placeholder=""></input>
                                </div>

                                <div class="form-group">
                                    <label>Lugar</label>
                                    <textarea type="text" name="lugar" class="form-control" rows="5"></textarea>
                                </div>


                                <div class="form-group">
                                    <label>Prestaciones</label>
                                    <textarea type="text" name="prestaciones" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Más información</label>
                                    <textarea type="text" name="observaciones" class="form-control" rows="9" placeholder=""></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    <label>Agregar liga a pdf para más información</label>
                                    <input type="text" name="ligadoc" class="form-control">
                                </div> -->

                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        var maxField = 2; 
                                        var addButton = $('.add_button'); 
                                        var wrapper = $('.field_wrapper'); 
                                        var fieldHTML = '<div class="form-group"><input class="form-control" type="text" name="ligadoc2"> <br><a href="javascript:void(0);" class=" btn btn-danger remove_button">Quitar nueva liga</a></div>';
                                        var x = 1; 
                                        $(addButton).click(function(){ 
                                            if(x < maxField){ 
                                                x++; 
                                                $(wrapper).append(fieldHTML);
                                            }
                                        });
                                        $(wrapper).on('click', '.remove_button', function(e){ 
                                            e.preventDefault();
                                            $(this).parent('div').remove(); 
                                            x--; 
                                        });
                                    });
                                </script>

                                <div class="field_wrapper">
                                    <div class="form-group">
                                        <label>Agregar liga a pdf para más información</label>
                                        <input type="text" name="ligadoc1" class="form-control">
                                        <br><a href="javascript:void(0);" class="btn btn-default add_button">Agregar otra liga</a><br>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Agregar vacante</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>
            </div><!-- /.row -->
        </section>
    </div><!-- /.content -->

<?php include "footer.php"; ?>


<!-- <?php 
    if(!empty($linkinformacion)){
        echo '<a download="información" target="blank" href="'.$linkinformacion.'" title=""><label>Ver información en pdf</label> <i class="fa fa-file"></i></a>'; 
    }
 ?>
 -->
