$(document).ready(function () {
    $.ajax({
        method: "GET",
        url: "http://127.0.0.1:8000/api/products",
        dataType: "json",
        success: function (data) {
            $.each(data.data, function (index, item) {
                var html =
                    '<div class="col-md-3">' +
                    "<a href=>" +
                    '<div class="latest-item" id=' +
                    item.id +
                    ">" +
                    '<img class="latest-image" src="' +
                    item.image +
                    '"alt="Product Image 1" width="200px">' +
                    '<h6 class="product-title">' +
                    item.name +
                    "</h6>" +
                    '<p class="product-price">' +
                    item.price +
                    "</p>" +
                    "</div>" +
                    "</a>" +
                    "</div>";
                $("#product_all").append(html);
            });
        },
    });
});
