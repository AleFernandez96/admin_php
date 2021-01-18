    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="images/profiles/<?php echo $profile_pic; ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $fullname; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu"><!-- sidebar.less -->

                <?php 
                    if ($email == "afernandez@upmh.edu.mx"){
                        echo "
                             <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa-industry'></i> 
                                    <span>Publicaciones</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='bt_addvacante.php'><i class='fa fa-plus'></i> <span>Agregar investigaciones</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='p_publicaciones.php'><i class='glyphicon glyphicon-book'></i> <span>Ver investigaciones</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa-industry'></i> 
                                    <span>Bolsa de trabajo</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='bt_addvacante.php'><i class='fa fa-plus'></i> <span>Agregar vacantes</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='bt_vacantes.php'><i class='glyphicon glyphicon-book'></i> <span>Ver vacantes</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-graduation-cap'></i> 
                                    <span>Seguimiento egresados</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='se-registro-egresados.php'><i class='fa fa-file'></i> <span>Ver registros</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='se-subir-revista.php'><i class='fa fa-plus'></i> <span>Subir revista</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa-industry'></i> 
                                    <span>Estancias Estadías</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='ee_addvacante.php'><i class='fa fa-plus'></i> <span>Agregar vacantes</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='ee_vacantes.php'><i class='glyphicon glyphicon-book'></i> <span>Ver vacantes</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa fa-plane'></i> 
                                    <span>Movilidad</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='m_addconvocatoria.php'><i class='fa fa-plus'></i> <span>Agregar convocatoria</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='m_convocatorias.php'><i class='glyphicon glyphicon-book'></i> <span>Ver convocatorias</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa fa-wrench'></i> 
                                    <span>Adquisiciones</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href=''><i class='fa fa-plus'></i> <span>Agregar información</span></a>
                                        </li>
                                        <li class=''>
                                            <a href=''><i class='glyphicon glyphicon-book'></i> <span>Ver información</span></a>
                                        </li>
                                    </ul>
                            </li>

                        ";
                    } elseif ($email ==  "srangel@upmh.edu.mx") {
                        echo "
                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa-industry'></i> 
                                    <span>Bolsa de trabajo</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='bt_addvacante.php'><i class='fa fa-plus'></i> <span>Agregar vacantes</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='bt_vacantes.php'><i class='glyphicon glyphicon-book'></i> <span>Ver vacantes</span></a>
                                        </li>
                                    </ul>
                            </li>
                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-graduation-cap'></i> 
                                    <span>Seguimiento egresados</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='se-registro-egresados.php'><i class='fa fa-file'></i> <span>Ver registros</span></a>
                                        </li>
                                    </ul>
                            </li>
                        ";
                    }  elseif ($email == "mcalderon@upmh.edu.mx") {
                        echo "
                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa-industry'></i> 
                                    <span>Estancias Estadías</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='ee_addvacante.php'><i class='fa fa-plus'></i> <span>Agregar vacantes</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='ee_vacantes.php'><i class='glyphicon glyphicon-book'></i> <span>Ver vacantes</span></a>
                                        </li>
                                    </ul>
                            </li>
                        ";
                    }   elseif ($email == "pqueen@upmh.edu.mx") {
                        echo "
                            <li class='treeview menu-open'>
                                <a href='#'><i class='fa fa-fw fa fa-plane'></i> 
                                    <span>Movilidad</span>
                                    <span class='pull-right-container'>
                                        <i class='fa fa-angle-left pull-right'></i>
                                    </span>
                                </a>
                                    <ul class='treeview-menu' style='display: none;'>
                                        <li class=''>
                                            <a href='m_addconvocatoria.php'><i class='fa fa-plus'></i> <span>Agregar convocatoria</span></a>
                                        </li>
                                        <li class=''>
                                            <a href='m_convocatorias.php'><i class='glyphicon glyphicon-book'></i> <span>Ver convocatorias</span></a>
                                        </li>
                                    </ul>
                            </li>
                        ";
                    }
                 ?>
                    

            </ul>
        </section>
    </aside>
