$(document).ready(function () {
    $("#agence-select").change(function () {
        let agenceNameJS = $(this).val();
        $.ajax({
            url: 'metier/fonctions.php',
            data: {agenceNamePHP: agenceNameJS},
            type: "POST",
            //async: true,
            success: function (texte) {
                $("#formation-select").empty();
                $("#formation-select").append("<option value ='default' selected='selected'>Choisissez votre Formation</option>");
                $("#formation-select").append(texte);
                $("#promo-select").empty();
                $("#promo-select").append("<option value ='default' selected='selected'>Choisissez votre Promotion</option>");
                $("#stagiaire-select").empty();
                $("#stagiaire-select").append("<option value ='default' selected='selected'>Choisissez votre Stagiaire</option>");
                $("#button").empty();
            }
        });
    });

    $("#formation-select").change(function () {
        let formationNameJS = $(this).val();
        $.ajax({
            url: 'metier/fonctions.php',
            data: {formationNamePHP: formationNameJS},
            type: "POST",
            //async: true,
            success: function (texte) {
                $("#promo-select").empty();
                $("#promo-select").append("<option value ='default' selected='selected'>Choisissez votre Promotion</option>");
                $("#promo-select").append(texte);
                $("#stagiaire-select").empty();
                $("#stagiaire-select").append("<option value ='default' selected='selected'>Choisissez votre Stagiaire</option>");
                $("#button").empty();
            }
        });
    });

    $("#promo-select").change(function () {
        let promoNameJS = $(this).val();
        $.ajax({
            url: 'metier/fonctions.php',
            data: {promoNamePHP: promoNameJS},
            type: "POST",
            //async: true,
            success: function (texte) {
                $("#stagiaire-select").empty();
                $("#stagiaire-select").append("<option value ='default' selected='selected'>Choisissez votre Stagiaire</option>");
                $("#stagiaire-select").append(texte);
                $("#button").empty();
            }
        });
    });

    $("#stagiaire-select").change(function () {
        let nomStagiaireJS = $(this).val();
        $.ajax({
            url: 'metier/fonctions.php',
            data: {nomStagiairePHP: nomStagiaireJS},
            type: "POST",
            //async: true,
            success: function (text) {
                $("#button").empty();
                if (text != "default") {
                    $("#button").append("<button href=./?action=tableau>Voir le tableau de " + text);
                    $("#button").append("<button href=./?action=delete>Supprimer " + text);
                }
            }
        });
    });



});
