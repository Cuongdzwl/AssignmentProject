var timeout = 0;

$("#search").on("keyup", function (e) {
    var keyword = $("#search").val();
    clearTimeout(timeout);

    timeout = setTimeout(function () {
        $.ajax({
            type: "GET",
            url: "http://127.0.0.1:8000/api/search/" + keyword,
            dataType: "json",
            success: function (data) {
                var html = "";
                $.each(data.data, function (index, item) {
                    if (index == 6) {
                        return false;
                    }
                    html += "<div>" + item.name + "</div>";
                });
                $("#results").empty().append(html);
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            },
        });
    }, 500);
});
