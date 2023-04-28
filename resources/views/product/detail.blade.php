@section('title', 'Product Details')

<x-app-layout>
    <section class="product-detail">
        <div class="container my-16">
            <div class="border-b-2 py-4">
                <div class="row">
                    <div class="col-md-4 flex justify-center">
                        <img src="{{ asset($product->image) }}" alt="Product Image" class="w-96">
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-4xl font-bold">{{ $product->name }}</h1>
                        <p class="pb-2 text-sm font-thin text-gray-500">
                            @foreach ($categories as $category)
                                <span><a
                                        href="/categories/{{ $category->id }}">{{ $category->category_name }}</a>{{ __(',') }}</span>
                            @endforeach
                        </p>
                        <p class="py-4 text-3xl mb-5">${{ $product->price }}</p>
                        <div class="flex items-center">
                            <input type="number" value="1" min="1" class="form-control quantity w-40">
                            <p class="ml-4">Remaining:{{ $product->quantity }}</p>
                        </div>
                        <button data-id="{{ $product->id }}"
                            class="add-to-cart bg-black mt-3 w-full p-3 text-white transition-opacity hover:opacity-70 w-50">Add
                            to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-12">
            <div class="border-b-2 py-4">
                <div class="row mx-10">
                    <h2 class="text-2xl">About the Product</h2>
                </div>
                <div class="row mx-10 mb-8">
                    <p class="py-3">{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
