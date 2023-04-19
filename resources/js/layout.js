$(document).ready(function () {
    $(window).scroll(function () {
        // Check if we've scrolled more than 50 pixels
        if ($(this).scrollTop() > 0) {
            // Add the "dark-header" class to the header
            $("#header").addClass("dark-header");
        } else {
            // Remove the "dark-header" class from the header
            $("header").removeClass("dark-header");
        }
    });
});

