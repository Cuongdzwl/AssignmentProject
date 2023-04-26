$(document).ready(function () {
    loadCart();
    var timeout = 600;
    clearTimeout(timeout);

    $(".quantity").change(function (e) {
        e.preventDefault();

        let id = $(this).data("id");
        let quantity = $(this).val();
        updateCartProduct(id, quantity);
    });

    $(".delete").click(function(e){
        e.preventDefault();

        let id = $(this).data("id");
        deleteProduct(id)
    });
});

function loadCart() {
    $.ajax({
        url: "http://127.0.0.1:8000/api/cart",
        type: "GET",
        dataType: "application/json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
            "Authorization": "Bearer " + $('meta[name="token"]').attr("content"), // Include access token
        },
        success: function (response) {},
        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
}

function updateCartProduct(product_id, quantity) {
    $.ajax({
        url: "http://127.0.0.1:8000/api/cart",
        type: "PUT",
        dataType: "application/json",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
            "Authorization": "Bearer " + $('meta[name="token"]').attr("content"), // Include access token
        },
        data: {
            product_ID: product_id,
            quantity: quantity,
        },
        success: function (response) {
            var html =
                '<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >' +
                response.message +
                "</div>";
            $("#alert").html(html);
            setTimeout(function () {
                $("#alert").html("");
            }, 3000);
        },
        error: function (xhr) {
            console.log(xhr.responseText);
        },
    });
}

function deleteProduct(id){
    $("#item-"+id).remove();
    //  $.ajax({
    //      url: "http://127.0.0.1:8000/api/cart",
    //      type: "DELETE",
    //      dataType: "application/json",
    //      headers: {
    //          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"), // Include CSRF token
    //          "Authorization": "Bearer " + $('meta[name="token"]').attr("content"), // Include access token
    //      },
    //      success: function (response) {},
    //      error: function (xhr) {
    //          console.log(xhr.responseText);
    //      },
    //  });
}