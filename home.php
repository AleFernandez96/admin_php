<?php 
    $active1="active";
    include "head.php"; 
    include "header.php"; 
    include "aside.php"; 

?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Inicio</h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active">Inicio</li>
            </ol>
        </section>
        <section class="content">
            <div class="container">
                <center>
                    <h3><i class="fa fa-user"></i> Bienvenid@ <?php echo $fullname ?> </h3>
                    <img src="http://intranet.upmh.edu.mx/upmetropolitana/assets/img/logo2.jpg" class="img-responsive img-circle" alt="" width="200px;">
                </center>
            </div>
        </section>
    </div>
 
    
<?php include "footer.php"; ?>



