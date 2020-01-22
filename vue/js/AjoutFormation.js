
let name;

function post_ajax(idSelect,idWrite) {
    name = document.getElementById(idSelect).value;
    if (name != "default") {
        $.ajax({
            url: 'fonctions.php',
            data: {
                nameF: name
            },
            type: "POST",
            async: true,
            //cache: false,
            success: function (aresult) {
                $(idWrite).html(aresult);
            },
            dataType: "html"

        });
    }
}

