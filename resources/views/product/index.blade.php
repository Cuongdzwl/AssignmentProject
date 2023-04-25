@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <div class="row">
        {{-- @foreach ($products as $product)
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="{{ asset('uploads/product/' . $product->image) }}" alt="Product Image" class="img-fluid">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">Price: ${{ $product->price }}</p>
                <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        @endforeach --}}
        @foreach ($products as $product)
          <div class="col-2 pb-3">
            <div class="card border-none shadow-lg transition-shadow hover:shadow-xl">
              <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="border-none">
              <div class="product-info">
                <p class="product-title line-clamp-2 text-ellipsis px-2 text-sm">{{ $product->description }}</p>
                <p class="product-price pt-2 font-bold">${{ $product->price }}</p>
              </div>
              <button class="bg-black py-1 text-white">Add to Cart</button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
