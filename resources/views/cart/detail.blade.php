@section('title', 'Cart Details')
<x-app-layout>
  <section class="cart">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <table class="table-striped table">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="cart_all">
                  @foreach ($cart as $item)
                    @if ($item->product_id == null)
                    @break
                  @endif
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                      <input  type="number" value="{{ $item->quantity }}" min="1" class="form-control quantity">
                    </td>
                    <td id="subtotal">{{ $item->price * $item->quantity }}</td>
                    <td>            
                      <button class="btn btn-danger delete" data-id="{{ $item->product_id }}">Delete</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="totals-item flex justify-between pb-3">
          <label>Items: </label>
          <div class="totals-value" id="cart-subtotal">$0</div>
        </div>
        <div class="totals-item flex justify-between pb-3">
          <label>Tax (5%):</label>
          <div class="totals-value" id="cart-tax">$0</div>
        </div>
        <hr>
        <div class="totals-item flex justify-between py-3 font-bold text-red-500">
          <label>Total:</label>
          <div class="totals-value" id="cart-total">$0</div>
        </div>
        <button class="checkout bg-dark w-full p-2 text-white transition-opacity hover:opacity-70">Checkout</button>
      </div>

    </div>
</section>

</x-app-layout>
