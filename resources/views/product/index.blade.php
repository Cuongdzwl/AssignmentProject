@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <div class="row">   
        @foreach ($products as $product)
          <div class="col-2 pb-3">
            <div class="card border-none transition-shadow hover:shadow-2xl">
              <img src="/images/tools/hammer.jpg" alt="Product Image" class="border-none">
              <div class="product-info">
                <p class="product-title line-clamp-2 text-ellipsis px-2 text-sm">{{ $product->name }}</p>
                <p class="product-price pt-2 font-bold">${{ $product->price }}</p>
              </div>
              <button data-id="{{ $product->id }}" class="add-to-cart bg-black py-1 text-white">Add to Cart</button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
