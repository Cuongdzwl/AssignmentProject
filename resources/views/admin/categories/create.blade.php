@section('title', 'Create Product')
<x-app-layout>
    @role('admin')
        <div class="container mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
            <h1 class="text-3xl font-semibold text-center text-gray-900">Create New Category</h1>
            <form id="create_category" method="post">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Category
                                    Name</label>
                                <div class="mt-2">
                                    <input type="text" name="category_name" id="category_name"
                                        autocomplete="category_name" required
                                        class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <a href="{{ route('admin.category') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    @endrole
    <script>
        $(document).ready(function() {

            $('#create_category').submit(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Authorization": "Bearer " + $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // create a new FormData object
                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "http://127.0.0.1:8000/api/categories",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            html =
                                '<div class ="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role = "alert" >Category Created!</div>'
                            $("#alert").html(html);
                            setTimeout(function() {
                                $("#alert").html('');
                            }, 3000);
                            $("#create_category")[0].reset();
                        } else {
                            html =
                                '<div class ="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role = "alert" >Category Created Fail!</div>'
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
