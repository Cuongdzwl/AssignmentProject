@section('title', 'Product Details')

<x-app-layout>
  <section class="product-detail">
    <div class="container my-12">
      <div class="row">
        <div class="col-md-4 flex justify-center">
          <img src="{{asset($product->image)}}" alt="Product Image" class="w-96">
        </div>
        <div class="col-md-6">
          <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
          <p class="py-3">{{ $product->description }}</p>
          <p class="py-4 text-3xl">${{ $product->price }}</p>
            <div class="flex items-center">
              <input type="number" value="1" min="1" id="item-quantity" class="form-control w-40">
              <p class="ml-4">Remaining:{{ $product->quantity }}</p>
            </div>
            <button data-id="{{ $product->id }}"
              class="add-to-cart bg-black text-white p-3 mt-3 w-full transition-opacity hover:opacity-70">Add to
              Cart
            </button>
        </div>
      </div>
    </div>
  </section>

</x-app-layout>
