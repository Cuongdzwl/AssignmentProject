@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <h1 class="my-12 text-center text-4xl font-semibold">All Products</h1>
      <div class="row">
        <div id="add-to-cart-message"></div>
        @foreach ($products as $product)
          <div class="col-2 pb-3">
            <a href="/products/{{ $product->id }}">
              <div class="card w-full border-none transition-shadow hover:shadow-2xl">
                <img src="{{ asset($product->image) }}" alt="Product Image" class="h-60 border-none object-cover">
                <div class="product-info mt-1 px-3">
                  <p class="product-title line-clamp-2 text-ellipsis h-12 font-bold mt-1">{{ $product->name }}</p>
                  <p class="product-price pt-2 font-light mb-3"> $ {{ $product->price }}</p>
                </div>
              </div>
            </a>
            <button data-id="{{ $product->id }}" class="add-to-cart bg-black py-1 text-white transition-opacity hover:opacity-70 w-full">Add to Cart</button>
          </div>
        @endforeach
      </div>
      @if ($products->links())
        <div class="mt-4">
          {{ $products->links() }}
        </div>
      @endif
    </div>
  </section>
</x-app-layout>
