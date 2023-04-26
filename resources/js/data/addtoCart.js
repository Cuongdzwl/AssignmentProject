$(document).ready(function () {
    // Add click event listener to add to cart button
    $(".add-to-cart").click(function (e) {
        e.preventDefault(); // Prevent default form submit action

        var id = $(this).data("id"); // Get the ID of the product from the data-id attribute
        var quantity = $("#item-quantity").val();

        // Send Ajax request to add item to cart
        $.ajax({
            url: "http://127.0.0.1:8000/api/cart",
            type: "PUT",
            dataType: "application/json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
                "Authorization":"Bearer " + $('meta[name="token"]').attr("content"), // Include access token
            },
            data: {
                "product_ID": id,
                "quantity": quantity
            },
            success: function (response) {
                // Handle success response
                var html ='<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >' +
                        response.message +
                        "</div>";
                $("#add-to-cart-message").html(html);
                setTimeout(function(){
                    $("#add-to-cart-message").html("");
                },3000)
            },
            error: function (xhr) {
                // Handle error response
                console.log(xhr.responseText);
            },
        });
    });
});
