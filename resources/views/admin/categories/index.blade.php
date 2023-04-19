 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Category Management') }}
         </h2>
     </x-slot>
     <div class="mx-auto max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
         <a class="rounded-md border border-transparent bg-green-400 px-4 py-2 text-s font-semibold text-white hover:bg-green-300"
             href="">Create New</a>
         <div class="overflow-x-auto">
             <table class="w-full table-auto rounded-xl border border-gray-300 bg-white text-left shadow-sm divide-y">
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
                 <tbody whitespace-nowrap divide-y>
                     @foreach ($categories as $category)
                         <tr>
                             <td class="px-2"><b>{{ $category->id }}</b></td>
                             <td><a href="">{{ $category->name }}</a></td>
                             <td>{{ $category->created_at }}</td>
                             <td>{{ $category->updated_at }}</td>
                             <td class="py-2">
                                 <a class="rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-xs font-semibold text-white hover:bg-indigo-300"
                                     href=""><button>Edit</button></a>
                                 <a class="rounded-md border border-transparent bg-red-500 px-4 py-2 text-xs font-semibold text-white hover:bg-red-400"
                                     href=""><button>Delete</button></a>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             {{ $categories->links() }}
         </div>
     </div>
 </x-app-layout>
