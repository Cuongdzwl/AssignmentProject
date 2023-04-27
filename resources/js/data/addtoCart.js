$(document).ready(function () {
    // Add click event listener to add to cart button
    $(".add-to-cart").click(function (e) {
        e.preventDefault(); // Prevent default form submit action
        var thiss = this;
        var id = $(this).data("id"); // Get the ID of the product from the data-id attribute
        var quantity = $("#item-quantity").val();

        // Send Ajax request to add item to cart
        $.ajax({
            url: "http://127.0.0.1:8000/api/cart",
            type: "PUT",
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
                Authorization:
                    "Bearer " + $('meta[name="token"]').attr("content"), // Include access token
            },
            data: {
                add_to_cart: true,
                product_ID: id,
                quantity: quantity,
            },
            success: function (response) {
                // Change the button
                $(thiss).toggleClass("bg-black");
                $(thiss).toggleClass("bg-green-400");
                $(thiss).prop("disabled", true);
                $(thiss).text("Success!");
                setTimeout(function () {
                    $(thiss).toggleClass("bg-black");
                    $(thiss).toggleClass("bg-green-400 disabled");
                    $(thiss).text("Add to Cart");
                    $(thiss).prop("disabled", false);
                }, 2000);
            },
            error: function (xhr, status, error) {
                console.log(xhr, status, error);
            },
        });
    });
});
