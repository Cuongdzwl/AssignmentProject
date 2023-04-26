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
                    @php
                        $items = 0;
                        $total = 0;
                        $tax= 0;
                    @endphp
                  @foreach ($cart as $item)
                    @if ($item->product_id == null)
                    @break
                  @endif
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        {{ $item->quantity }}
                        {{-- <input type="number" value="{{ $item->quantity }}" min="1" class="form-control"> --}}
                    </td>
                    <td id="subtotal">{{ $item->price * $item->quantity }}</td>
                    {{$total += $item->price  * $item->quantity}}
                    {{$items += $item->quantity }}
                    <td>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="totals-item">
          <label>Items:</label>
          <div class="totals-value" id="cart-subtotal"> {{$items}}</div>
        </div>
        <div class="totals-item">
          <label>Tax (5%):</label>
          <div class="totals-value" id="cart-tax"> {{$tax = $total / 100 * 5}}</div>
        </div>
        {{-- <div class="totals-item">
          <label>Shipping:</label>
          <div class="totals-value" id="cart-shipping">0</div>
        </div> --}}
        <div class="totals-item totals-item-total">
          <label>Total:</label>
        <div class="totals-value" id="cart-total">{{$total + $tax}}</div>
    </div>
    <form action="{{route('cart.view')}}" method="post">
        @csrf
        <input type="hidden" name="total" value = "{{$total + $tax}}">
        <button type="submit" class="checkout btn">Checkout</button>
        {{-- all cart to all --}}

    </form>
      </div>

    </div>

</section>

</x-app-layout>
