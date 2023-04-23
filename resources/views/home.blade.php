<link rel="stylesheet" href="css/home.css">
@extends('layouts.main')
@section('title', 'Leefly Shop')
@section('content')
  <section class="featured-products">
    <div class="container-fluid">
      <h3 class="text-center font-sans">Featured Products</h3>
      <div class="image-slider">
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"
              alt="" />
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80"
              alt="" />
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
              alt="" />
          </div>
        </div>
        <div class="image-item">
          <div class="image">
            <img src="https://example.com/product-image-5.jpg" alt="Product Image 5">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section>
    @vite('/resources/js/data/loadProducts.js')
    <div class="container">
      <h3 class="text-center">Latest Products</h3>
      <div class="row" id="product_all">
      </div>
    </div>
  </section>

    <script src="js/home.js"></script>
@endsection
