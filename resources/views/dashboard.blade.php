@section('title', 'Leefly Shop')
{{-- <link rel="stylesheet" href="css/home.css"> --}}
@vite('/resources/css/home.css')
<x-app-layout>
  <section class="featured-products">
    <div class="container">
      <h2 class="flex justify-center text-3xl">Featured Products</h2>
      <div id="image-slider">
        <div class="image-item">
          <div class="image">
            <a href="">
              <img
                src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
                alt="" />
            </a>
          </div>

        </div>
        <div class="image-item">
          <div class="image">
            <a href="">
              <img
                src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"
                alt="" />
            </a>
          </div>

        </div>
        <div class="image-item">
          <div class="image">
            <a href="">
              <img
                src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80"
                alt="" />
            </a>
          </div>

        </div>
        <div class="image-item">
          <div class="image">
            <a href="#">
              <img
                src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
                alt="" />
            </a>
          </div>

        </div>
        <div class="image-item">
          <div class="image">
            <a href="#">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="" />
            </a>
          </div>

          <div class="image-item">
            <div class="image">
              <a href="#">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 5">
              </a>
            </div>
          </div>
          <div class="image-item">
            <div class="image">
              <a href="#">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 5">
              </a>
            </div>
          </div>
          <div class="image-item">
            <div class="image">
              <a href="#">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 5">
              </a>
            </div>
          </div>
          <div class="image-item">
            <div class="image">
              <a href="#">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 5">
              </a>
            </div>
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <a href="#">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 5">
            </a>
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <a href="#">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 5">
            </a>
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <a href="#">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 5">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="latest-product">
    <div class="container">
      <h2 class="flex justify-center text-3xl">Latest Products</h2>

      <!-- HTML code for product list container and filter form -->
      <form id="filter-form">
        <label for="category-filter">Category:</label>
        <select id="category-filter" name="category">
          <option value="">All</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
        </select>

        <label for="price-filter">Price:</label>
        <select id="price-filter" name="price">
          <option value="">All</option>
          <option value="under-50">Under $50</option>
          <option value="50-100">$50-$100</option>
          <option value="over-100">Over $100</option>
        </select>
      </form>

      <div class="row" id="product_all">
          
      </div>
    </div>
  </section>

  {{-- @vite('/resources/js/data/loadProducts.js') --}}
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
