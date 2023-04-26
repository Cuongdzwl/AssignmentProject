@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <h1 class="text-center text-4xl my-12 font-semibold">All Products</h1>
      <div class="row"> 
        <div id="add-to-cart-message"></div>  
        @foreach ($products as $product)
          <div class="col-2 pb-3">
            <div class="card border-none transition-shadow hover:shadow-2xl">
              <img src="{{ asset($product->image) }}" alt="Product Image" class="border-none">
              <div class="product-info">
              <p class="product-title line-clamp-2 text-ellipsis px-2 text-lg">{{ $product->name }}</p>
              <p class="product-price pt-2 font-bold"> $ {{ $product->price }}</p>
              </div>
              <button data-id="{{ $product->id }}" class="add-to-cart bg-black py-1 text-white">Add to Cart</button>
            </div>
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
