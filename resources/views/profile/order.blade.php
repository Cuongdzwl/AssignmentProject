@section('title', 'My Orders')
<x-app-layout>
  <section class="order">
    <div class="container">
      <div class="row">
        <h1 class="text-center text-3xl my-8 font-semibold">My Orders</h1>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <table class="table-striped table">
                <thead>
                  <tr>
                    <th>Order Id</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $item)
                    <tr>
                      <td>{{ $item->order_ID }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->quantity }}</td>
                      <td>{{ $item->total }}</td>
                      <td>
                        @if ($item->status == 0)
                            Progress
                        @elseif($item->status == 1)
                            Payment Accepted
                        @elseif($item->status == 2)
                            Delivered
                        @elseif($item->status == 3)
                            Cancelled
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>
