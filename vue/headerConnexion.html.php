
<!-- Header -->
<header>
    <div id="container">
        <div class="intro-text">
            <div id="containerConnect">               
                <h1>Connexion</h1><br>
                <?php $utilisateur = "admin"; ?>
                <form method="POST" action="<?php echo "./?action=" . $utilisateur ?>"> 

                    <select name="agences" id="agence-select">
                        <option value ="default" selected="selected">Choisissez votre agence</option>
                        <option value="Vannes">Vannes</option>
                        <option value="Lorient">Lorient</option>
                        <option value="Pontivy">Pontivy</option>
                    </select>

                    <input type="text" name="mail" id="mail" /><br><br><br>
                    <input type="password" name="mdp" id="mdp"  /><br /><br />
                    <input type="submit" value="Se connecter" class="page-scroll btn btn-xl" name="buttonConnexion"/>
                    <!--<a href="./?action=mdpOublie">Mot de passe oublié </a>-->
                </form>
                
                <?php
                if (isset($_POST['buttonConnexion'])){
                    $ville = $_POST['agences'];
                    $mail = $_POST['mail'];
                    $mdp = $_POST['mdp'];              
                }
                ?>
            </div>
            <br />
        </div>
    </div>
</header>


