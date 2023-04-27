@section('title', 'Product Index')

<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <h1 class="my-10 text-center text-4xl font-medium">All Products</h1>
      <div class="row">
        <div class="col-md-3">
          <div class="category-list list-inside list-disc">
            {{-- <p>Category</p> --}}
            <hr>
            <ul>
              @if(isset($categories))
              @foreach ($categories as $category)
              <li class="">
                <a href="/categories/{{ $category->id }}"
                class="category-link flex w-full justify-start border-b-2 p-2 transition-all ease-in hover:bg-black hover:text-white">{{ $category->category_name }}</a>   
              </li>
              @endforeach
              @endif
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div id="add-to-cart-message"></div>
          <div class="row">
            @foreach ($products as $product)
              <div class="col-12 col-md-6 col-lg-3 product-item {{ $product->category }} pb-3">
                <a href="/products/{{ $product->id }}">
                  <div class="card w-full border-none transition-shadow hover:shadow-2xl">
                    <img src="{{ asset($product->image) }}" alt="Product Image" class="h-60 border-none object-cover">
                    <div class="product-info mt-1 px-3">
                      <p class="product-title line-clamp-2 h-12 text-ellipsis font-bold mt-1">{{ $product->name }}</p>
                      <p class="product-price pt-2 font-light mb-3"> $ {{ $product->price }}</p>
                    </div>
                  </div>
                </a>
                <button data-id="{{ $product->id }}"
                  class="add-to-cart w-full bg-black py-1 text-white transition-opacity hover:opacity-70">Add to
                  Cart</button>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      @if ($products->links())
        <div class="mt-4">
          {{ $products->links() }}
        </div>
      @endif
    </div>
  </section>
</x-app-layout>
