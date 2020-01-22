<!-- Ajout Formation Section -->
<section id="addFormat">
    <div class="container">
        <div class="row">
            <!--<div class="col-lg-12 text-center">
                 <h3 class="section-heading">Création d'une formation</h3><br><br>
                 <select name="libelle" id="libelle-select">
                     <option value ="default" selected="selected">Choisissez votre Libellé</option>
                     <option value="newLibelle">Nouveau Libelle</option>
                 </select><br><br>
                 <label class="nombreH">Nombre d'heures :</label>
                 <input type="text" name="nombreHeure" id="nombreHeure" />
                 <br><br>
                 <select name="reference" id="reference-select">
                     <option value ="default" selected="selected">Choisissez votre Référence</option>
                     <option value="newLibelle">Nouvelle Référence</option>
                 </select><br><br> -->
            <label>Selectionnez votre Agence : </label>

            <div id='agences'>
                <select name="agence" id="agence-select" onchange="post_ajax('agence-select', '#text')">
                    <option value ="default" selected="selected">Choisissez votre Agence</option>
                    <?php
                    for ($i = 0; $i < count($listeAgences); $i++) {
                        foreach ($listeAgences[$i] as $value) {
                            echo "<option value='" . $value . "' >" . $value . "</option>";
                        }
                    }
                    ?>
                </select>
                <label id="text"></label>
            </div>

            <?php if (isset($nameF)) { ?>
                <label>Selectionnez votre Formation : </label>

                <div id='formations'>
                    <select name="formation" id="formation-select">
                        <option value ="default" selected="selected">Choisissez votre Formation</option>
                    </select>
                    <label id="text"></label>
                </div>
            <?php } ?>
            <label>Selectionnez votre Promotion : </label>

            <div>
                <select name="promos" id="promos-select">
                    <option value ="default" selected="selected">Choisissez votre Promo</option                                       >
                </select>
            </div>

            <label>Selectionnez votre Formation : </label>

            <div>
                <select name="stagiaires" id="stagiaires-select">
                    <option value ="default" selected="selected">Choisissez votre Stagiaire</option>
                </select>
            </div>

            <label>Selectionnez votre Formateur : </label>

            <div>
                <select name="formateurs" id="formateurs-select">
                    <option value ="default" selected="selected">Choisissez votre Formateur</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Envoyer" class="page-scroll btn btn-xl" name="buttonConnexion"/>
            </div>

        </div>
    </div>
</section>