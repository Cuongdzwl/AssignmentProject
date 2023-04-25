@section('title', 'Product Details')
<x-app-layout>
  <section class="product-detail">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images' . $product->image) }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2>{{ $product->name }}</h2>
          <p>{{ $product->description }}</p>
          <p>Price: ${{ $product->price }}</p>
          <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="hidden" name="quantity" value="1">
            <button class="btn btn-primary" type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>
  </section>

</x-app-layout>
