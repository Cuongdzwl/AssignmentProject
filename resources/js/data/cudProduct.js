$(document).ready(function () {
    $("#create_product").submit(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "Authorization":"Bearer " + $('meta[name="token"]').attr("content"), // Include access token
            },
        });
        // create a new FormData object
        var formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/products",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                var html = '';
                if (response.success) {
                    html =
                        '<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >' +
                        response.message +
                        "</div>";
                    $("#alert").html(html);
                    setTimeout(function () {
                        $("#alert").html("");
                    }, 5000);
                    $("#create_product")[0].reset();
                } else {
                    html =
                        '<div class ="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role = "alert" >'+response.message +'</div>';
                    $("#alert").html(html);
                    setTimeout(function () {
                        $("#alert").html("");
                    }, 8000);
                }
            },
        });
    });

    $("#update_product").submit(function (e) {
        const id = $("#update_product").data("id");
        e.preventDefault();
        
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                "Authorization":"Bearer " + $('meta[name="token"]').attr("content"), // Include access token
            },
        });
        // create a new FormData object
        var formData = new FormData(this);
        formData.append('_method', 'patch');
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/products/" + id,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                var html ='';
                if (response.success) {
                    console.log(response);
                    html =
                        '<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >' +
                        response.message +
                        "</div>";
                    $("#alert").html(html);
                    setTimeout(function () {
                        $("#alert").html("");
                    }, 3000);
                    // $("#update_product")[0].reset();
                } else {
                    html =
                        '<div class ="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role = "alert" >' +
                        response.message + 
                        "</div>";
                    $("#alert").html(html);
                    setTimeout(function () {
                        $("#alert").html("");
                    }, 8000);
                }
            },
        });
    });
});

$(document).on("click", "#delete", function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    var confirmDelete = confirm("Are you sure you want to delete this item?");
    if (confirmDelete) {
        console.log(id);
        deleteItem(id);
    }
});

function deleteItem(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
             "Authorization":"Bearer " + $('meta[name="token"]').attr("content"), // Include access token
        },
    });
    $.ajax({
        type: "DELETE",
        url: "http://127.0.0.1:8000/api/products/" + id,
        success: function (response) {
            console.log(response);
            $("#item-" + id).remove();
        },
        error: function (xhr, status, error) {
            console.log(xhr, status, error);
        },
    });
}
