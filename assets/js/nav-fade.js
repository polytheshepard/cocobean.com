$(document).ready(function() {

    if($(window).width() < 1000) {
        $("#fade-list").hide();

        $("#burger").click(function() {
            $("#fade-list").fadeIn("slow");
        });
    }
});