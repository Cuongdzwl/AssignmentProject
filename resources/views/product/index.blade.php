@section('title', 'Product Index')
<x-app-layout>
  <section class="Show all product">
    <div class="container">
      <div class="row">
        @foreach ($products as $product)
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
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
