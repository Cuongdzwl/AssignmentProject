$(document).ready(function () {
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
                    console.log(data);
                    var html = "";
                    $.each(data.data.data, function (index, item) {
                        if (index == 6) {
                            return false;
                        }
                        html +=
                            '<li class="pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900"><a href="products/' +
                            item.id +
                            '">' +
                            item.name +
                            "</a></li>";
                    });
                    $("#results").empty().append(html);
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                },
            });
        }, 500);
    });
});

