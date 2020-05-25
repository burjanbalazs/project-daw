$(document).ready(function() {
    var ok = false;
    $('body').on('input', "#user", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "" && $("#repass").val() != "" && $("#email").val() != "") {
            ok = true;
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "" || $("#repass").val() === "" || $("#email").val() === "") {
            ok = false;
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });
    $('body').on('input', "#pass", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "" && $("#repass").val() != "" && $("#email").val() != "") {
            ok = true;
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "" || $("#repass").val() === "" || $("#email").val() === "") {
            ok = false;
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });
    $('body').on('input', "#repass", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "" && $("#repass").val() != "" && $("#email").val() != "") {
            ok = true;
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "" || $("#repass").val() === "" || $("#email").val() === "") {
            ok = false;
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });
    $('body').on('input', "#email", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "" && $("#repass").val() != "" && $("#email").val() != "") {
            ok = true;
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "" || $("#repass").val() === "" || $("#email").val() === "") {
            ok = false;
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });



    if ($("#status").val() == 1) {
        $("#reg").css({
            "margin-top": "-20px"
        });
    }

});