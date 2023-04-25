$(document).ready(function () {
    showLatestProducts();
    loadCategoriesIndex();

    $("#category_filter").change(function () {
        if ($("#category_filter").val() == 0) {
            showLatestProducts();
        } else {
            showFilteredProducts($(this).val());
            console.log($(this).val());
        }
    });
});

function showFilteredProducts(id) {
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
                    "<a href=/products/" +
                    item.product_ID +
                    ">" +
                    '<div class="latest-item" id=' +
                    item.product_ID +
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
}

function loadCategoriesIndex() {
    $.ajax({
        method: "GET",
        url: "http://127.0.0.1:8000/api/categoriess",
        dataType: "json",
        success: function (data) {
            var html = "";
            $.each(data.data, function (index, item) {
                html +=
                    '<option value="' +
                    item.id +
                    '">' +
                    item.name +
                    "</option>";
            });
            $("#category_filter").append(html);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        },
    });
}

function showLatestProducts() {
    $.ajax({
        method: "GET",
        url: "http://127.0.0.1:8000/api/products",
        dataType: "json",
        success: function (data) {
            var html = "";
            html = generateElements(data);
            $("#product_all").html(html);
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        },
    });
}

function generateElements(data) {
    var html = "";
    $.each(data.data, function (index, item) {
        if (index == 12) return false;
        var ele =
            '<div class="col-md-3">' +
            "<a href=/products/" +
            item.id +
            ">" +
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
    return html;
}
