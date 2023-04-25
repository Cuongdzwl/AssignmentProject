@section('title', 'Update Product')
<x-app-layout>
    @role('admin')
        <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
            @if (isset($product))
                <h1 class="text-3xl font-semibold text-center text-gray-900">Update Product</h1>
                <form id="update_product" method="post" data-id="{{ $product->id }}">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Product
                                        Name</label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="product_name"
                                            value="{{ $product->name }}" required
                                            class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="quantity"
                                        class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                                    <div class="mt-2">
                                        <input type="number" name="quantity" id="quantity"
                                            value="{{ $product->quantity }}" required
                                            class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="prce"
                                        class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                    <div class="mt-2">
                                        <input type="text" name="price" id="price" value="{{ $product->price }}"
                                            required
                                            class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Image --}}
                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Product Image:
                            </label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <input
                                    class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                    id="image" name="image" type="file" class="sr-only">
                            </div>
                        </div>
                        {{-- Image --}}

                        {{-- Description --}}
                        <div class="col-span-full">
                            <label for="about"
                                class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $product->description }}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the product.</p>
                        </div>
                        {{-- Description --}}
                    </div>
                    <div id="alert">

                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="{{ route('admin.product') }}"
                            class="text-sm font-semibold leading-6 text-gray-900">Back</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            @else
                <div class="text-center">
                    <div class="my-24"></div>
                    <p class="text-base font-semibold text-indigo-600">404</p>
                    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
                    <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the product you’re looking
                        for.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ route('admin.product') }}"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go
                            back</a>
                        <a href="{{ route('admin') }}" class="text-sm font-semibold text-gray-900">Home <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                    <div class="my-24"></div>

                </div>
            @endif
        </div>
        @vite('/resources/js/data/cudProduct.js')
    @endrole
</x-app-layout>
