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
                <li class="active">revistas</li>
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
                        <h3 class="box-title">
                            <i class="glyphicon glyphicon-open"></i> Subir revista 
                        </h3>
                    </div>

                    <div class="box-body">
                        <form name="carga" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <label>Nombre del archivo</label>
                                <input type="text" name="nombre_revista" class="form-control" required="true">
                            </div>
                            <div class="form-group">
                                <label for="subirrevista"><h3><i class="glyphicon glyphicon-open"></i> Cargar archivo</h3></label>
                                <input class="form-control" type="file" name="uploadedfile[]" multiple="multiple" accept="application/pdf" id="subirrevista">
                            </div>
                            <input class="btn btn btn-primary" type="submit" value="Subir archivo(s)">
                        </form> 
                    </div>

                    <div class="box-body">
                        <?php 

                            

                            if(isset($_FILES["uploadedfile"]))
                            {
                                $nombre_revista=$_POST["nombre_revista"];

                                $target_path = "se-revista/revista/$nombre_revista";
                                    if($_FILES["uploadedfile"]["name"][0])
                                    {
                                        for($i=0;$i<count($_FILES["uploadedfile"]["name"]);$i++)
                                        {
                                            $origen=$_FILES["uploadedfile"]["tmp_name"][$i];
                                            $destino=$target_path.$_FILES["uploadedfile"]["name"][$i];


                                            if(@move_uploaded_file($origen, $destino))
                                            {
                                                $sql = "INSERT INTO se_revista (nombre_revista, created_at)  VALUES (\"$nombre_revista\",NOW())";
                                                $query = mysqli_query($con, $sql);


                                                if ($query) {
                                                            echo "<p class='alert alert-success'> <i class=' fa fa-check'></i> <strong>¡Bien hecho! </strong>Revista cargada exitosamente!</p>";
                                                } else {
                                                            echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> Error</p>";
                                                }


                                            }   
                                            else {
                                                    echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> Hubo un error al cargar la revista.</p>";
                                                }
                                        }               
                                    }

                                    else
                                    {
                                        echo "<p class='alert alert-danger'> <i class=' fa fa-exclamation-circle'></i> Selecciona un archivo y vuelve a intentralo</p>";
                                    }
                            }
                        ?>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header">
                        
                    </div>
                    <div class="box-body">
                        <iframe src="http://www.upmetropolitana.edu.mx/apps/admin-webpage/se-revista" style="width: 100%; height: 400px; border: none;"></iframe>
                    </div>
                </div>
            </div>
          </div>
        </section>
    </div>

    

<?php include "footer.php"; ?>