$(document).ready(function() {
    $("body").on("click", "#about", function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: parseInt($("#about").offset().top + 1050)
        }, 20);
    });
    $("body").on("click", "#chapters", function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: parseInt($("#chapters").offset().top + 1950)
        }, 20);
    });
    $("body").on("click", "#author", function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: parseInt($("#author").offset().top + 2600)
        }, 20);
    });
    $("body").on("click", ".chapter1", function(e) {
        if ($(".chapter1").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter1").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide1").css({
                "display": "none"
            });
        } else {
            $(".chapter1").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide1").css({
                "display": "block"
            });
        }
    });
    $("body").on("click", ".chapter2", function(e) {
        if ($(".chapter2").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter2").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide2").css({
                "display": "none"
            });
        } else {
            $(".chapter2").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide2").css({
                "display": "block"
            });
        }
    });
    $("body").on("click", ".chapter3", function(e) {
        if ($(".chapter3").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter3").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide3").css({
                "display": "none"
            });
        } else {
            $(".chapter3").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide3").css({
                "display": "block"
            });
        }
    });
    $("body").on("click", ".chapter4", function(e) {
        if ($(".chapter4").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter4").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide4").css({
                "display": "none"
            });
        } else {
            $(".chapter4").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide4").css({
                "display": "block"
            });
        }
    });
    $("body").on("click", ".chapter5", function(e) {
        if ($(".chapter5").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter5").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide5").css({
                "display": "none"
            });
        } else {
            $(".chapter5").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide5").css({
                "display": "block"
            });
        }
    });
    $("body").on("click", ".chapter6", function(e) {
        if ($(".chapter6").css("background-color") == "rgb(255, 163, 102)") {
            $(".chapter6").css({
                "background-color": "rgb(246, 246, 246)",
                "padding-bottom": "76px"
            });
            $(".hide6").css({
                "display": "none"
            });
        } else {
            $(".chapter6").css({
                "background-color": "rgb(255, 163, 102)",
                "padding-bottom": "22px"
            });
            $(".hide6").css({
                "display": "block"
            });
        }
    });
});