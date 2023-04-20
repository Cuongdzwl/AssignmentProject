<link rel="stylesheet" href="css/cart-detail.css">

@extends('layouts.main')
@section('title', 'Cart Details')
@section('content')

    <section class="cart">
        <div class="container">
            <h2>Cart</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
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
                                                <input type="number" value="{{ $item->quantity }}" min="1"
                                                    class="form-control">
                                            </td>
                                            <td id="subtotal">{{ $item->price * $item->quantity }}</td>
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet elit
                                eu aliquet
                                tristique. Maecenas sit amet dapibus erat.</p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
