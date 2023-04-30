 <x-app-layout>
     @section('title', 'Category Management')
     @role('admin')
         <div class="mx-auto mt-5 max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
             <h1 class="text-3xl font-semibold text-center text-gray-900">Category Management</h1>
             <a class="rounded-md border border-transparent bg-gray-700 px-4 py-2 text-s font-semibold text-white hover:bg-gray-800"
                 href="{{ route('admin') }}">Back</a>
             <a class="rounded-md border border-transparent bg-green-400 px-4 py-2 text-s font-semibold text-white hover:bg-green-300"
                 href="{{ route('admin.category.create') }}">Create New</a>
             <div class="overflow-x-auto">
                 <div class="overflow-x-auto">
                     <table
                         class="w-full table-auto rounded-xl border border-gray-300 bg-white text-left shadow-sm divide-y">
                         <thead class="bg-gray-500/5">
                             <tr>
                                 <th class="px-2">ID</th>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Created At</th>
                                 <th>Updated At</th>
                                 <th class="py-2">Action</th>
                             </tr>
                         </thead>
                         <tbody class="whitespace-nowrap divide-y">
                             @foreach ($categories as $category)
                                 <tr id="item-{{ $category->id }}">
                                     <td class="px-2"><b>{{ $category->id }}</b></td>
                                     <td class="px-2"><b>{{ $category->category_name     }}</b></td>
                                     <td><a href="">{{ $category->description }}</a></td>
                                     <td>{{ $category->created_at }}</td>
                                     <td>{{ $category->updated_at }}</td>
                                     <td class="py-2">
                                         <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                                             href="/admin/categories/edit/{{ $category->id }}"><button>Edit</button></a>
                                         <button id="delete" data-id="{{ $category->id }}"
                                             class="rounded-md border border-transparent bg-red-500 px-4 py-2 text-xs font-semibold text-white hover:bg-red-400"
                                             href="">Delete</button>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                     @vite('/resources/js/data/cudCategory.js')
                     @if ($categories->links())
                         <div class="mt-4">
                             {{ $categories->links() }}
                         </div>
                     @endif
                 </div>
             </div>
         @endrole
 </x-app-layout>
