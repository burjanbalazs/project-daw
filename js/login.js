$(document).ready(function() {
    $('body').on('input', "#user", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "") {
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "") {
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });
    $('body').on('input', "#pass", function(e) {
        if ($("#user").val() != "" && $("#pass").val() != "") {
            $("#submit").css({
                "background-color": "rgb(255, 163, 102)",
                "border-color": "rgb(255, 163, 102)"
            });
        }
        if ($("#user").val() === "" || $("#pass").val() === "") {
            $("#submit").css({
                "background-color": "rgb(246,246,246)",
                "border-color": "#2ecc71"
            });
        }
    });
});