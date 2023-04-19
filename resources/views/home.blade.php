<link rel="stylesheet" href="css/home.css">
@extends('layouts.main')
@section('title', 'Homepage')
@section('content')
  {{-- <section class="featured-products">
    <div class="container">
      <h2>Featured Products</h2>
      <div class="image-slider">
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
              alt="" />
          </div>
          <h6 class="image-title">This is demo title</h6>
        </div>

      </div>
  </section> --}}
  <section class="featured-products">
    <div class="container">
      <h2>Featured Products</h2>
      <div class="image-slider">
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
          <h6 class="image-title">Product Title 1</h6>
          <p class="image-price">$22.00</p>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"
              alt="" />
          </div>
          <h6 class="image-title">Product Title 2</h6>
          <p class="image-price">$18.99</p>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=749&q=80"
              alt="" />
          </div>
          <h6 class="image-title">Product Title 3</h6>
          <p class="image-price">$35.50</p>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
              alt="" />
          </div>
          <h6 class="image-title">Product Title 4</h6>
          <p class="image-price">$29.99</p>
        </div>
        <div class="image-item">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
              alt="" />
          </div>
          <h6 class="image-title">Product Title 5</h6>
          <div class="image-item">
            <div class="image">
              <img src="https://example.com/product-image-5.jpg" alt="Product Image 5">
            </div>
            <h6 class="image-title">Product Title 5</h6>
            <p class="image-price">$30.00</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  {{-- <section class="latest-product">
    <div class="container">
      <h2>Latest Products</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="latest-item">
            <div class="latest-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 1</h6>
            <p class="product-price">$25.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 2</h6>
            <p class="product-price">$20.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 3</h6>
            <p class="product-price">$15.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 4</h6>
            <p class="product-price">$22.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <a href="">

            <div class="product-item">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="100%">
              </div>
              <h6 class="product-title">Product Title 5</h6>
              <p class="product-price">$30.00</p>
            </div>
          </a>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 6</h6>
            <p class="product-price">$18.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 7</h6>
            <p class="product-price">$25.00</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <div class="product-image">
              <img
                src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                alt="Product Image 1" width="100%">
            </div>
            <h6 class="product-title">Product Title 8</h6>
            <p class="product-price">$20.00</p>
          </div>
        </div>


      </div>
    </div>
  </section> --}}

  <section class="latest-product">
    <div class="container">
      <h2>Latest Products</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="latest-item">
            {{-- <a href="{{ route('product') }}"> --}}
              <div class="latest-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 1</h6>
              <p class="product-price">$20.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-2">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 2</h6>
              <p class="product-price">$25.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-3">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 3</h6>
              <p class="product-price">$18.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-4">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 4</h6>
              <p class="product-price">$22.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-5">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 5</h6>
              <p class="product-price">$30.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-6">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 6</h6>
              <p class="product-price">$27.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-6">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 6</h6>
              <p class="product-price">$27.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-7">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 7</h6>
              <p class="product-price">$33.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-8">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 8</h6>
              <p class="product-price">$45.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="product-item">
            <a href="https://example.com/product-9">
              <div class="product-image">
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image 1" width="200px">
              </div>
              <h6 class="product-title">Product Title 9</h6>
              <p class="product-price">$20.00</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="js/home.js"></script>
@endsection
