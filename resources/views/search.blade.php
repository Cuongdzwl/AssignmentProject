@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <a href="{{ route('product') }}" class="flex justify-center w-28 p-3 my-4 bg-black text-white transition-opacity hover:opacity-70">&lt; Back</a>
      <p class="text-lg pb-2">Keyword: <span class="text-2xl font-semibold text-sky-700">{{ $keyword }}</span></p>
      <div class="row">
        <div id="add-to-cart-message"></div>
        @foreach ($products as $product)
          <div class="col-12 col-md-6 col-lg-4 col-xl-2 pb-3">
            <a href="/products/{{ $product->id }}">
              <div class="card w-full border-none transition-shadow hover:shadow-2xl">
                <img src="{{ asset($product->image) }}" alt="Product Image" class="h-60 border-none object-cover">
                <div>
                  <p class="card-title line-clamp-2 h-12 text-ellipsis px-2">{{ $product->name }}</p>
                  <p class="card-text pt-2 font-bold px-2">${{ $product->price }}</p>
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
    @if ($products->links())
      <div class="mt-4">
        {{ $products->links() }}
      </div>
    @endif      
  </section>
</x-app-layout>
