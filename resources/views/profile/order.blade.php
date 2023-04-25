@section('title', 'My Orders')
<x-app-layout>
  <section class="order">
    <div class="container">
      <h2>My Orders</h2>
      <div class="row">
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
                    <th>Sub Total</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->product->name }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->quantity }}</td>
                      <td>{{ $item->price * $item->quantity }}</td>
                      <td>
                        @if ($item->status == 0)
                          <span class="badge badge-warning">Pending</span>
                        @elseif($item->status == 1)
                          <span class="badge badge-info">Payment Accepted</span>
                        @elseif($item->status == 2)
                          <span class="badge badge-primary">Progress</span>
                        @elseif($item->status == 3)
                          <span class="badge badge-success">Delivered</span>
                        @else
                          <span class="badge badge-danger">Cancelled</span>
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
