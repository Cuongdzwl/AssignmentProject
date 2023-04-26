@section('title', 'Product Details')

<x-app-layout>
  <section class="product-detail">
    <div class="container">
      <div class="row">
        <div class="col-md-4 flex justify-center">
          <img src="/images/accessory/black-tote-bag.jpg" alt="Product Image" class="w-96">
        </div>
        <div class="col-md-6">
          <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
          <p class="py-3">{{ $product->description }}</p>
          <p class="py-4 text-3xl">${{ $product->price }}</p>
          {{-- <p>Quantity:{{ $product->quantity }}</p> --}}
          <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="hidden" name="quantity" value="1">
            <div class="flex items-center">
              <input type="number" value="1" min="1" class="form-control quantity w-40">
              <p class="ml-4">Remaining:{{ $product->quantity }}</p>
            </div>
            <button data-id="{{ $product->id }}"
              class="add-to-cart bg-dark text-white p-3 mt-3 w-full transition-opacity hover:opacity-70" type="submit">Add to
              Cart
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

</x-app-layout>
