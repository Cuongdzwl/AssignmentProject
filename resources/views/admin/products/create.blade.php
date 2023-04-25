@section('title', 'Create Product')
<x-app-layout>
    @role('admin')
        <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
            <h1 class="text-3xl font-semibold text-center text-gray-900">Create New Product</h1>
            <form id="create_product" method="post">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Product
                                    Name</label>
                                <div class="mt-2">
                                    <input type="text" name="name" id="name" autocomplete="product_name" required
                                        class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="quantity"
                                    class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                                <div class="mt-2">
                                    <input type="text" name="quantity" id="quantity" required
                                        class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="prce"
                                    class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                <div class="mt-2">
                                    <input type="text" name="price" id="price" required
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
                            <input required
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="image" name="image" type="file" class="sr-only">
                        </div>
                    </div>
                    {{-- Image --}}

                    {{-- Description --}}
                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the product.</p>
                    </div>
                    {{-- Description --}}
                </div>
                <div id="alert">

                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('admin.product') }}" class="text-sm font-semibold leading-6 text-gray-900">Back</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add New</button>
                </div>
            </form>
        </div>
        @vite('/resources/js/data/cudProduct.js')
    @endrole
</x-app-layout>
