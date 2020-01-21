<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">              

                <a class="navbar-brand page-scroll" href="#page-top">GRETA BRETAGNE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <?php                    
                    if (isset($_GET['action']) && $_GET['action'] == "admin") {
                        echo'<li>
                        <a class="page-scroll" href="#tableau">Tableau de compétence</a>
                    </li>';
                    }
                    ?>
                    
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <?php
                    if (isset($_GET['action']) && $_GET['action'] != "defaut")
                        echo '<li>
                        <a class="page-scroll" href="./?action=defaut">Accueil</a>
                    </li>';
                    ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
