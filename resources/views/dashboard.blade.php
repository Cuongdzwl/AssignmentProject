@section('title', 'Leefly Shop')
{{-- <link rel="stylesheet" href="css/home.css"> --}}
@vite('/resources/css/home.css')
<x-app-layout>
    <section class="featured-products pt-2">
        <div class="container">
            <h2 class="flex justify-center text-3xl py-3">Featured Products</h2>
            <div id="image-slider">

            </div>
        </div>
               <script>
                    $(document).ready(function() {
                        $.ajax({
                            method: "GET",
                            url: "http://127.0.0.1:8000/api/categories/1" + ,
                            dataType: "json",
                            success: function(data) {
                                var html = "";
                                $.each(data.data, function(index, item) {
                                    if (index == 6) return false;
                                    var ele = '<div class="image-item">' +
                                        '<div class="image">' +
                                        '<a href="/products/' + item.id + '">' +
                                        '<img src="' + item.image + '" alt="" />' +
                                        '</a>' +
                                        '</div>' +
                                        '</div>' +
                                        html += ele;
                                });
                                $("#image-slider").html(html);
                            },
                            error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                            },
                        });
                    })
                </script>
    </section>

    <section class="latest-product py-2">
        <div class="container">
            <h2 class="flex justify-center text-3xl py-3">Latest Products</h2>

            <!-- HTML code for product list container and filter form -->
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

    @vite('/resources/js/data/loadProducts.js')
    <script type="text/javascript">
        $(document).ready(function() {
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
