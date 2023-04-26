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
                      <input type="number" value="{{ $item->quantity }}" min="1" class="form-control">
                    </td>
                    <td id="subtotal">{{ $item->price * $item->quantity }}</td>
                    <td>
                    </td>
                  </tr>
                  <button class="delete btn btn-danger">Clear all</button>
                @endforeach
                @vite('/resources/js/data/loadCart.js')
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="totals-item">
          <label>Items:</label>
          <div class="totals-value" id="cart-subtotal">0</div>
        </div>
        <div class="totals-item">
          <label>Tax (5%):</label>
          <div class="totals-value" id="cart-tax">0</div>
        </div>
        <div class="totals-item">
          <label>Shipping:</label>
          <div class="totals-value" id="cart-shipping">0</div>
        </div>
        <div class="totals-item totals-item-total">
          <label>Total:</label>
          <div class="totals-value" id="cart-total">0</div>
        </div>
        <button class="checkout">Checkout</button>
      </div>

    </div>
</section>

</x-app-layout>
