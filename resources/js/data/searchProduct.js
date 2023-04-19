$(document).ready(function() {
    $("#search_box").onchange(function() {
        $.ajax({
            type: "GET",
            url: "url",
            data: "data",
            dataType: "json",
            success: function (response) {
            }
        });
    })
})