@section('title', 'Product Index')
<x-app-layout>
    @if ($category)
        <section class="Show all product">
            <div class="container">
                <a href="{{ route('product') }}"
                    class="flex justify-center w-28 p-3 my-4 bg-black text-white transition-opacity hover:opacity-70">&lt;Back</a>
                <p class="text-2xl pb-2">{{ $category->category_name }}</p>
                <p class="text-sm font-light pb-2">{{ $category->description }}</p>
                <hr class="mb-3">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-2 pb-3">
                            <a href="/products/{{ $product->product_ID }}">
                                <div class="card w-full border-none transition-shadow hover:shadow-2xl">
                                    <img src="{{ asset($product->image) }}" alt="Product Image"
                                        class="h-60 border-none object-cover">
                                    <div>
                                        <p class="card-title line-clamp-2 h-12 text-ellipsis px-2">{{ $product->name }}
                                        </p>
                                        <p class="card-text pt-2 font-bold px-2">${{ $product->price }}</p>
                                    </div>
                                </div>
                            </a>
                            <button data-id="{{ $product->product_ID }}"
                                class="add-to-cart w-full bg-black py-1 text-white transition-opacity hover:opacity-70">Add
                                to
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
    @else
        <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
            <div class="my-24">
                <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
                    <div class="text-center">
                        <p class="text-base font-semibold text-indigo-600">404</p>
                        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
                        <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re
                            looking
                            for.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="/"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go
                                back home</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    @endif
</x-app-layout>
