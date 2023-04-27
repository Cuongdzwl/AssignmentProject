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
                 <tbody whitespace-nowrap divide-y>
                     @foreach ($orders as $order)
                         <tr>
                             <td class="px-2"><b>{{ $order->id }}</b></td>
                             <td>{{ $order->user_ID }}</td>
                             <td>{{ $order->address }}</td>
                             <td>{{ $order->phone }}</td>
                             <td>
                                 @if ($order->status == 0)
                                     Progress
                                 @elseif($order->status == 1)
                                     Payment Accepted
                                 @elseif($order->status == 2)
                                     Delivered
                                 @elseif($order->status == 3)
                                     Cancelled
                                 @endif

                             </td>
                             {{-- <td>{{ $order->created_at }}</td>
                             <td>{{ $order->updated_at }}</td> --}}
                             @if ($order->status == 0)
                                 <td class="py-2">
                                     <form action="/admin/orders/{{$order->id}}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="status" id="status" value="1">
                                        <input type="hidden" name="id" id="id" value="{{$order->id}}">
                                         <button type="submit">Confirm Payment</button>
                                     </form>
                                 </td>
                             @endif
                             @if ($order->status == 1)
                                 <td class="py-2">
                                     <form action="/admin/orders/{{$order->id}}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="status" id="status" value="2">
                                        <input type="hidden" name="id" id="id" value="{{$order->id}}">
                                         <button type="submit">Confirm Delivered</button>
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
