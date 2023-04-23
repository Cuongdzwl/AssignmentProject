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
                $("#product_all").append(html);
            });

            // Add to cart button event listener
            // $(".add-to-cart").click(function () {
            //     var productId = $(this).data("product-id");
            //     $.ajax({
            //         method: "POST",
            //         url: "/cart/add",
            //         data: { productId: productId },
            //         dataType: "json",
            //         success: function (response) {
            //             // Handle success response
            //             alert("Product added to cart!");
            //         },
            //         error: function (xhr, textStatus, errorThrown) {
            //             // Handle error response
            //             alert("Error adding product to cart.");
            //         },
            //     });
            // });
        },
    });
});
