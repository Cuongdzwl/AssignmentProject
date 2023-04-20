<link rel="stylesheet" href="css/home.css">
<x-app-layout>
  {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

  {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
  <section class="featured-products" onload="updateProduct()">
    <div class="container">
      <h2 class="flex justify-center text-3xl">Featured Products</h2>
      <div class="image-slider">
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

  {{-- @vite('/resources/js/data/loadProducts.js') --}}
  <script src="js/home.js"></script>
</x-app-layout>
