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
                                <button class="delete-all btn btn-danger">Clear all</button>
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
                                        @if ($item->product_id != null)
                                            <tr class="item" id="item-{{ $item->product_id }}">
                                                <td>{{ $item->name }}</td>
                                                <td>$ {{ $item->price }}</td>
                                                <td>
                                                    <input type="number" value="{{ $item->quantity }}" min="1"
                                                        data-id="{{ $item->product_id }}"
                                                        class="item-quantity form-control">
                                                </td>
                                                <td id="subtotal">$ {{ $item->price * $item->quantity }}</td>

                                                @php
                                                    // Caculate total
                                                    $total += $item->price * $item->quantity;
                                                    $items += $item->quantity;
                                                @endphp
                                                <td>
                                                    <button on class="delete" data-id="{{ $item->product_id }}"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        @else
                                        @break
                                        @endif
                                    @endforeach

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
                        <div class="totals-value" id="cart-total">$ {{ $total + $tax }}</div>
                    </div>
                    <form action="{{ route('cart.view') }}" method="post">
                        @csrf
                        <input type="hidden" name="total" value="{{ $total + $tax }}">
                        <button type="submit"
                            class="checkout btn bg-dark w-full p-2 text-white transition-opacity hover:opacity-70">Checkout</button>
                        {{-- all cart to all --}}

                    </form>
                </div>

            </div>

    </section>

</x-app-layout>
