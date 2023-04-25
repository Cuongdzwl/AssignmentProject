@section('title', 'Product Index')
<x-app-layout>
  @if ($category)
    <section class="Show all product">
      <a href="{{route('product')}}">Back</a>
      <div class="container">
        <div>{{$category->category_name}}</div>
        <div>{{$category->description}}</div>
            <div class="row">
              @foreach ($products as $product)
                    <div class="col-md-4">
                      <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($product->image) }}" alt="Product Image"
                                    class="img-fluid">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">Add to
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
      @else
          <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
        <div class="my-24">
            <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
                <div class="text-center">
                    <p class="text-base font-semibold text-indigo-600">404</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking
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
