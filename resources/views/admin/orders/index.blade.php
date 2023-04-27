 <x-app-layout>
     <div class="mx-auto max-w-7xl rounded-lg bg-white p-5 m-3 shadow-md space-y-4">
         <a class="rounded-md border border-transparent bg-gray-700 px-4 py-2 text-s font-semibold text-white hover:bg-gray-800"
             href="{{ route('admin') }}">Back</a>
         <div class="overflow-x-auto">
             <table class="w-full table-auto rounded-xl border border-gray-300 bg-white text-left shadow-sm divide-y">
                 <thead class="bg-gray-500/5">
                     <tr>
                         <th class="px-2">ID</th>
                         <th>User_ID</th>
                         <th>Address</th>
                         <th>Phone</th>
                         <th>Status</th>
                         {{-- <th>Created At</th>
                         <th>Updated At</th> --}}
                         <th class="py-2">Action</th>
                     </tr>
                 </thead>
                 <tbody class="whitespace-nowrap divide-y">
                     @foreach ($orders as $order)
                         <tr class="py-2">
                             <td class="px-2"><b>{{ $order->id }}</b></td>
                             <td>{{ $order->user_ID }}</td>
                             <td>{{ $order->address }}</td>
                             <td>{{ $order->phone }}</td>
                             <td>
                                 @if ($order->status == 0)
                                     <span
                                         class="inline-flex items-center m-2 px-3 py-1 bg-yellow-200 hover:bg-yellow-300 rounded-full text-sm font-semibold text-yellow-600">
                                         <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                             <path d="M0 0h24v24H0V0z" fill="none" />
                                             <path
                                                 d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                         </svg>
                                         <span class="ml-1">
                                             Pending
                                         </span>
                                     </span>
                                 @elseif($order->status == 1)
                                     <span
                                         class="inline-flex items-center m-2 px-3 py-1 bg-blue-200 hover:bg-blue-300 rounded-full text-sm font-semibold text-blue-600">
                                         <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                             <path d="M0 0h24v24H0V0z" fill="none" />
                                             <path
                                                 d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                         </svg>
                                         <span class="ml-1">
                                             Accecpted
                                         </span>
                                     </span>
                                 @elseif($order->status == 2)
                                     <span
                                         class="inline-flex items-center m-2 px-3 py-1 bg-green-200 hover:bg-green-300 rounded-full text-sm font-semibold text-green-600">
                                         <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                             <path d="M0 0h24v24H0V0z" fill="none" />
                                             <path
                                                 d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                         </svg>
                                         <span class="ml-1">
                                             Delivered
                                         </span>
                                     </span>
                                 @elseif($order->status == 3)
                                     <span
                                         class="inline-flex items-center m-2 px-3 py-1 bg-red-200 hover:bg-red-300 rounded-full text-sm font-semibold text-red-600">
                                         <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24">
                                             <path d="M0 0h24v24H0V0z" fill="none" />
                                             <path
                                                 d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" />
                                         </svg>
                                         <span class="ml-1">
                                             Canceled
                                         </span>
                                     </span>
                                 @endif
                             </td>
                             @if ($order->status == 0)
                                 <td class="py-2">
                                     <form action="/admin/orders/{{ $order->id }}" method="post">
                                         @csrf
                                         @method('put')
                                         <input type="hidden" name="status" id="status" value="1">
                                         <input type="hidden" name="id" id="id"
                                             value="{{ $order->id }}">
                                         <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">Confirm Payment</button>
                                     </form>
                                 </td>
                             @endif
                             @if ($order->status == 1)
                                 <td class="py-2">
                                     <form action="/admin/orders/{{ $order->id }}" method="post">
                                         @csrf
                                         @method('put')
                                         <input type="hidden" name="status" id="status" value="2">
                                         <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">Confirm Delivered</button>
                                     </form>
                                 </td>
                             @endif
                         </tr>
                     @endforeach
                 </tbody>
             </table>
             @if ($orders->links())
                 <div class="mt-4">
                     {{ $orders->links() }}
                 </div>
             @endif
         </div>
     </div>
 </x-app-layout>
