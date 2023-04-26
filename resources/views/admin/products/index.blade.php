  <x-app-layout>
      @section('title', 'Product Management')
      @role('admin')
          <div class="mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
              <h1 class="text-3xl font-semibold text-center text-gray-900">Product Management</h1>
              <a class="rounded-md border border-transparent bg-gray-700 px-4 py-2 text-s font-semibold text-white hover:bg-gray-800"
                  href="{{ route('admin') }}">Back</a>
              <a href="{{ route('admin.product.create') }}"
                  class="rounded-md border border-transparent bg-green-400 px-4 py-2 text-s font-semibold text-white hover:bg-green-300">Create
                  New</a>
                  <div id="alert"></div>
              <div class="overflow-x-auto">
                  <table class="w-full table-auto rounded-xl border border-gray-300 bg-white text-left shadow-sm divide-y">
                      <thead class="bg-gray-500/5">
                          <tr>
                              <th class="px-2">ID</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Created At</th>
                              <th>Updated At</th>
                              <th>Price</th>
                              <th class="py-2">Action</th>
                          </tr>
                      </thead>
                      <tbody class="whitespace-nowrap divide-y">
                          @foreach ($products as $product)
                              <tr id="item-{{ $product->id }}">
                                  <td class="px-2"><b>{{ $product->id }}</b></td>
                                  <td><a href="">{{ $product->name }}</a></td>
                                  <td><img src="{{asset('image'/.$product->image)}}" alt="Image Product"></td>
                                  <td>{{ $product->created_at }}</td>
                                  <td>{{ $product->updated_at }}</td>
                                  <td>$ {{ $product->price }}</td>
                                  <td class="py-2">
                                      <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                                          href="/admin/products/edit/{{ $product->id }}"><button>Edit</button></a>
                                      <button id="delete" data-id="{{ $product->id }}"
                                          class="rounded-md border border-transparent bg-red-500 px-4 py-2 text-xs font-semibold text-white hover:bg-red-400"
                                          href="">Delete</button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      @vite('/resources/js/data/cudProduct.js')

                  </table>
                  @if ($products->links())
                      <div class="mt-4">
                          {{ $products->links() }}
                      </div>
                  @endif
              </div>
          </div>
      @endrole
  </x-app-layout>
