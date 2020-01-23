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
            }
        });
    });
    
     
    
});
