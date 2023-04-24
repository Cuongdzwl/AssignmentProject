$(document).ready(function () {
    // Add click event listener to add to cart button
    $(".add-to-cart").click(function (e) {
        e.preventDefault(); // Prevent default form submit action

        var id = $(this).data("id"); // Get the ID of the product from the data-id attribute

        // Send Ajax request to add item to cart
        $.ajax({
            url: 'http://127.0.0.1:8000/api/cart',
            type: "POST",
            dataType: "json",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
            },
            success: function (response) {
                // Handle success response
                console.log(response);
            },
            error: function (xhr) {
                // Handle error response
                console.log(xhr.responseText);
            },
        });
    });
});
