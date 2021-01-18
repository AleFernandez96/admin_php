<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="home.php" class="logo"><!-- Logo -->
                <span class="logo-mini"><b>A</b>W</span>
                <span class="logo-lg"><b>Admin</b>Webpage</span> 
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <img src="images/profiles/<?php echo $profile_pic; ?>" class="user-image" alt="User Image">
                              <span class="hidden-xs"><?php echo $fullname; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header"><!-- User image -->
                                    <img src="images/profiles/<?php echo $profile_pic; ?>" class="img-circle" alt="User Image">
                                    <p>
                                      <span class="hidden-xs"><?php echo $fullname; ?></span>
                                    </p>
                                </li>
                                <li class="user-footer"><!-- Menu Footer-->
                                    <div class="pull-left">
                                        
                                    </div>
                                    <div class="pull-right">
                                        <a href="action/logout.php" class="btn btn-default btn-flat">Salir</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>