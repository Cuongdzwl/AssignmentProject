@section('title', 'Product Index')
<x-app-layout>
    <section class="Show all product">
        <div class="container">
            <a href="{{ route('product') }}">Back</a>

            <div>{{ $keyword }}</div>
            <div class="row">
                <div id="add-to-cart-message"></div>
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($product->image) }}" alt="Product Image" class="img-fluid">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                <a href="{{ route('product.detail', $product->id) }}" data-id="{{ $product->id }}"
                                    class="add-to-cart btn btn-primary">Add to
                                    Cart</a>
                            </div>
                        </div>
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
