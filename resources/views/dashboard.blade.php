@section('title', 'Leefly Shop')
{{-- <link rel="stylesheet" href="css/home.css"> --}}
@vite('/resources/css/home.css')
@vite('/resources/js/data/loadProducts.js')
<x-app-layout>
    <section class="featured-products pt-2">
        <div class="container">
            <h2 class="flex justify-center text-3xl py-3">Featured Products</h2>
            <div id="image-slider">
                <div class="image-item">
                    <div class="image">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
                                alt="" />
                        </a>
                    </div>
                </div>
                <div class="image-item">
                    <div class="image">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"
                                alt="" />
                        </a>
                    </div>

                </div>
                <div class="image-item">
                    <div class="image">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-product py-2">
        <div class="container">
            <h2 class="flex justify-center text-3xl py-3">Latest Products</h2>
            <form id="filter-form">
                <label for="category-filter">Category:</label>
                <select id="category_filter" name="category">
                    <option value="0">All</option>
                </select>
            </form>
            <div class="row" id="product_all">
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {

            $.ajax({
                method: "GET",
                url: "http://127.0.0.1:8000/api/categories/1",
                dataType: "json",
                success: function(data) {
                    var html = "";
                    $.each(data.data, function(index, item) {
                        if (index == 6) return false;
                        var ele =
                            '<div class="image-item">' +
                            '<div class="image">' +
                            '<a href="/products/' +
                            item.product_ID +
                            '">' +
                            '<img src="' +
                            item.image +
                            '" alt="Product image" />' +
                            "</a>" +
                            "</div>" +
                            "</div>";
                        html += ele;
                    });
                    $("#image-slider").append(html);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                },
            });

            $("#image-slider").slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                infinite: true,
                arrows: false,
            });
        });
    </script>
</x-app-layout>
