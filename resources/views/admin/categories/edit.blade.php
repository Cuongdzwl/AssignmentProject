@section('title', 'Create Product')
<x-app-layout>
    @role('admin')
        <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
            <h1 class="text-3xl font-semibold text-center text-gray-900">Update Category</h1>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12 mb-10">
                    <form id="update_category" method="post" data-id="{{ $category->id }}">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Category
                                    Name</label>
                                <div class="mt-2">
                                    <input type="text" name="category_name" id="category_name"
                                        autocomplete="category_name" required value="{{ $category->category_name }}"
                                        class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                </div>
                            </div>
                        </div>
                        {{-- Description --}}
                        <div class="col-span-full">
                            <label for="about"
                                class="block mt-4 text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $category->description }}</textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the category.</p>
                        </div>
                        {{-- Description --}}
                        <div id="alert">
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('admin.category') }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Back</a>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <h1 class="text-3xl font-semibold text-center text-gray-900">Products in Category</h1>
            <form id="product_category">
                <input type="hidden" id="add_cat_ID" value="{{ $category->id }}">
                <input type="number" id="add_product_ID" required>
                <button type="button" id="add_product_category" class="rounded-md border border-transparent bg-green-400 px-4 py-2 text-s font-semibold text-white hover:bg-green-300">Add</button>
            </form>
            <div id="alert_product_category"></div>
            <div class="overflow-x-auto">
                <table
                    class="w-full mt-3 table-auto rounded-xl border border-gray-300 bg-white text-left shadow-sm divide-y">
                    <thead class="bg-gray-500/5">
                        <tr>
                            <th class="px-2">ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th class="py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap divide-y">
                        @foreach ($products as $product)
                            <tr id="item-{{ $product->product_ID }}">
                                <td class="px-2"><b>{{ $product->product_ID }}</b></td>
                                <td><a href="">{{ $product->name }}</a></td>
                                <td><img src="{{ asset('images/' . $product->image) }}" alt="Image Product"></td>
                                <td>$ {{ $product->price }}</td>
                                <td class="py-2">
                                    <button id="delete" data-id="{{ $product->product_ID }}"
                                        class="rounded-md border border-transparent bg-red-500 px-4 py-2 text-xs font-semibold text-white hover:bg-red-400"
                                        href="">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
                @if ($products->links())
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </div>
    @endrole
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': 'Bearer ' + $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#add_product_category").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "http://127.0.0.1:8000/api/categoryproducts",
                    data: {
                        "cat_ID": $("#add_cat_ID").val(),
                        "product_ID":$("#add_product_ID").val()
                    },
                    dataType:'application/json',
                    success: function(response) {
                        window.reload(true);
                    },
                });
            });
            $('#update_category').submit(function(e) {
                e.preventDefault();
                const id = $(this).data('id');
                // create a new FormData object
                var formData = new FormData(this);
                formData.append('_method', 'patch');
                $.ajax({
                    type: "POST",
                    url: "http://127.0.0.1:8000/api/categories/" + id,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            html =
                                '<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >' +
                                response.message + '</div>'
                            $("#alert").html(html);
                            setTimeout(function() {
                                $("#alert").html('');
                            }, 3000);
                        } else {
                            html =
                                '<div class ="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role = "alert" >' +
                                response.message + '</div>'
                            $("#alert").html(html);
                            setTimeout(function() {
                                $("#alert").html('');
                            }, 3000);
                        }

                    },
                });
            });
        });
    </script>
</x-app-layout>
