@section('title', 'Cart Details')
<x-app-layout>
  <section class="cart">

    <div class="container">
      <div class="row">
        <h1 class="text-4xl text-center my-8 font-semibold">My Shoping Cart</h1>
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
                    $tax = 0;
                  @endphp
                  @foreach ($cart as $item)
                    @if ($item->product_id == null)
                    @break
                  @endif
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>$ {{ $item->price }}</td>
                    <td>
                      <input type="number" value="{{ $item->quantity }}" min="1" data-id="{{$item->product_id}}" class="item-quantity form-control">
                    </td>
                    <td id="subtotal">$ {{ $item->price * $item->quantity }}</td>

                    @php 
                    // Caculate total
                    $total += $item->price * $item->quantity;
                    $items += $item->quantity ;
                    @endphp
                    <td>
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </td>
                  </tr>
                  @endforeach
                  <button class="delete-all btn btn-danger" data-id="{{ $item->product_id }}">Clear all</button>
                @vite('/resources/js/data/loadCart.js')
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="totals-item flex justify-between pb-3">
          <label>Items:</label>
          <div class="totals-value" id="cart-subtotal"> {{ $items }}</div>

        </div>
        <div class="totals-item flex justify-between pb-3">
          <label>Tax (5%):</label>
          <div class="totals-value" id="cart-tax">$ {{ $tax = ($total / 100) * 5 }}</div>
        </div>
        <hr>
        <div class="totals-item totals-item-total flex justify-between py-3 font-bold text-red-500">
          <label>Total:</label>
        <div class="totals-value" id="cart-total">$ {{$total + $tax}}</div>
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
