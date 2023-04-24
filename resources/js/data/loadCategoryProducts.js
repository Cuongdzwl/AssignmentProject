$(document).ready(function () {
    let id = $(this).attr("id");
    $.ajax({
        method: "GET",
        url: "http://127.0.0.1:8000/api/categories/" + id,
        dataType: "json",
        success: function (data) {
            var html = "";
            $.each(data.data, function (index, item) {
                if (index == 12) return false;
                var ele =
                    '<div class="col-md-3">' +
                    "<a href=>" +
                    '<div class="latest-item" id=' +
                    item.id +
                    ">" +
                    '<img class="latest-image" src="' +
                    item.image +
                    '"alt="Product Image" width="200px">' +
                    '<h6 class="product-title">' +
                    item.name +
                    "</h6>" +
                    '<p class="product-price">' +
                    item.price +
                    "</p>" +
                    "</div>" +
                    "</a>" +
                    "</div>";
                html += ele;
            });
            $("#product_all").html(html);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        },
    });
});
