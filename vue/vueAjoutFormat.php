<!-- Ajout Formation Section -->
<?php session_start() ?>
<section id="addFormat">
    <div class="container">
        <div class="row">

            <!-- SELECTION AGENCE -->
            <div id='agences'>
                <label>Selectionnez votre Agence : </label>                
                <select name="agence" id="agence-select">
                    <option value ="default" selected="selected">Choisissez votre Agence</option>
                    <?php
                    for ($i = 0; $i < count($listeAgences); $i++) {
                        foreach ($listeAgences[$i] as $value) {
                            echo "<option value='" . $value . "' >" . $value . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <!-- SELECTION FORMATION -->
            <div id='formations'>
                <label>Selectionnez votre Formation : </label>
                <select name="formation" id="formation-select">
                    <option value ="default" selected="selected">Choisissez votre Formation</option>                   
                </select>
            </div>

            <!-- SELECTION PROMO -->
            <div id='promos'>
                <label>Selectionnez la Promotion : </label>
                <select name="formation" id="promo-select">
                    <option value ="default" selected="selected">Choisissez la Promotion</option>                   
                </select>
            </div>

            <!-- SELECTION STAGIAIRES -->
            <div id='stagiaires'>
                <label>Selectionnez le Stagiaire : </label>
                <select name="stagiaire" id="stagiaire-select">
                    <option value ="default" selected="selected">Choisissez le Stagiaire</option>                   
                </select>
            </div>
            <div id='button'></div>
        </div>
    </div>
</section>