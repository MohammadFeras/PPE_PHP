<!-- Header -->
<header>

    <div class="container">

        <div class="intro-text">

            <div class="intro-lead-in">Réseau des GRETA de BRETAGNE</div>

            <div class="intro-heading">Compétences en cours de formation</div>
            <?php
            if (!isset($_GET['action']) || $_GET['action'] == "defaut" ){
                echo '<a href = "./?action=connexion" class = "page-scroll btn btn-xl">Se connecter</a>';
            }
                ?>
        </div>

    </div>

</header>


