<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use GrahamCampbell\ResultType\Success;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Authenticate
        if (Auth::guest()) {
            return response()->json([
                'success' => false,
                'message' => 'You have to login first'
            ]);
        }
        $user_id = Auth::user()->id;

        // Building the query
        $cart = DB::table('carts')->where('user_id', '=', $user_id)
            ->leftJoin('cart_product', 'cart_product.cart_id', '=', 'carts.id')
            ->leftJoin('products', 'cart_product.product_id', '=', 'products.id')
            ->select('carts.id', 'cart_product.product_id', 'cart_product.quantity', 'products.name', 'products.image', 'products.price')
            ->get();

        if ($cart->count() == 0) {
            $cart['user_id'] = $user_id;
            Cart::created($cart);
        }
        if ($cart->count() > 1) {
            // Destroy all cart items
            $dumb = Cart::where('user_id', '=', $user_id);
            if ($dumb) $dumb->delete();

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong'
            ]);
        }

        // Building the cart
        return response()->json([
            'success' => true,
            'data' => $cart
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json([
            'success' => false,
            'message' => 'Method unavailable'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return response()->json([
            'success' => false,
            'message' => 'Method unavailable'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // check if the product already exists
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Auth::guest()) {
            return response()->json([
                'success' => false,
                'message' => 'You have to login first'
            ]);
        }

        $user_id = Auth::user()->id;
        $cart = DB::table('cart')->where('user_id','=', $user_id)->get();
        if ($cart) {
            $cart->delete();
            return response()->json([
                'success' => true,
                'message' => 'Cart has been deleted'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Cart has not been deleted'
        ]);
    }
}
