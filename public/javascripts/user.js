$(document).ready(function() {
    $("#username").blur(
            function() {
                $.ajax(
                        {
                            url: "../../includes/checkUsername.php",
                            data: {"username": $(this).val()},
                            type: "post"
                        }


                ).done(function(msg) {
                    var newParrafo = document.createElement("p");
                    newParrafo.appendChild(document.createTextNode(msg));
//                        $("#divUsername").append('<p>'+msg+'</p>');
                    $("#divUsername").append(newParrafo);
                });

            }
    );


    var availableTags = ["alcalde","alcaldia"];
    $("#search").children().autocomplete({
        source: availableTags
    });


    $("#search").keyup(
            function() {
                //alert("se digita letra " + $(this).children().val());
                var inputLetters = $(this).children();
                    availableTags = ["alcaldiaaaa", "alcalde"];

                $.ajax(
                        {
                            url: "../../includes/tagsAutocomplete.php",
                            data: {"firstLetters": inputLetters.val()},
                            type: "post"
                        }).done(
                        function(jsonTags) {
                            $("#labelNombre").text(jsonTags);
                            //availableTags = jsonTags;
                        });
            }
    );



});