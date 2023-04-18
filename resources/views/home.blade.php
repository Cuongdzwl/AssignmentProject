<link rel="stylesheet" href="css/home.css">
@extends('layouts.main')
@section('title', 'Homepage')
@section('content')
  <section class="featured-products">
    <div class="container">
      <h2 style="text-align: center; background: white">Featured Products</h2>
      <div class="image-slider">
        <a href="#">
          <div class="image-item">
            <div class="image">
              <img
                src="https://images.unsplash.com/photo-1476718406336-bb5a9690ee2a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80"
                alt="" />
            </div>
          </div>
        </a>
        <a href="#">
          <div class="image-item">
            <div class="image">
              <img
                src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt="" />
            </div>
          </div>
        </a>
        <a href="#">
          <div class="image-item">
            <div class="image">
              <img
                src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt="" />
            </div>
          </div>
        </a>
        <a href="#">
          <div class="image-item">
            <div class="image">
              <img
                src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt="" />
            </div>
          </div>
        </a>
        <a href="#">
          <div class="image-item">
            <div class="image">
              <img
                src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                alt="" />
            </div>
          </div>
        </a>
        
        
      </div>
      
    </div>
  </section>

  <br>

  <section class="latest-product">
    <div class="container-fluid" id="latest-product-container">
      <h2 style="text-align: center; background: white">Latest Products</h2>
      <div class="row g-3">
        <div class="col-2 ">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div><div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div><div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div><div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div><div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div><div class="col-2">
          <div class="card">
          <div class="latest-product-preview">
            <a href="{{ route('product') }}">           
                <img
                  src="https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=928&q=80"
                  alt="Product Image" class="card-img-top">
                <div class="product-info">
                  <p class="product-title">Product asdasdsadddasdasdTitle 1</p>
                  <p class="product-price">$20.00</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

 <br>.
 

  <script src="js/home.js"></script>
@endsection
