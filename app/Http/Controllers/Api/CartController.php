<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Authenticate
        $token = PersonalAccessToken::findToken($request->session()->get('token'));
        $user_id = $token->tokenable_id;
        // Building the query
        $cart_check = Cart::where('user_id', '=', $user_id);

        if ($cart_check->count() == 0) {

            $cart['user_ID'] = $user_id;
            Cart::create($cart);
        }
        if ($cart_check->count() > 1) {
            // Destroy all cart items
            $cart_check->delete();

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong'
            ]);
        }
        $cart = CartController::getCart($user_id);
        // Building the cart
        return response()->json([
            'success' => true,
            'data' => $cart
        ]);
    }
    public function indexAutoLoadCart(){
        $user_id = Auth::user()->id;

        // Building the query
        $cart_check = Cart::where('user_id', '=', $user_id);

        if ($cart_check->count() == 0) {

            $cart['user_ID'] = $user_id;
            Cart::create($cart);
        }
        if ($cart_check->count() > 1) {
            // Destroy all cart items
            $cart_check->delete();
        }
        $cart = CartController::getCart($user_id);
        // Building the cart
        return view('cart.detail',compact('cart'));
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
    public function update(Request $request)
    {
        // Authenticate
         $user_id = Auth::user()->id;
        // $user_id = 1;

        // Get the user cart id
        $cart_id = json_decode(Cart::where('user_id', $user_id)->get('id'), true);
        $cart_id = $cart_id[0]['id'];

        $cart_new = $request->all();
        $cart_new['cart_ID'] = $cart_id;

        // Validate 
        $validator = Validator::make($request->all(), [
            'product_ID' => 'required|integer|min:0',
            'quantity' => 'integer|min:0'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Somthing went wrong'
            ]);
        }
        // Check the quantity 
        if (!isset($cart_new['quantity'])) {
            $cart_new['quantity'] = "1";
        }

        $cart = CartProduct::where('product_id', '=', $cart_new['product_ID'])->where('cart_id', '=', $cart_id);
        // check if the product already exists
        if ($cart->count() != 0) {
            unset($cart_new['_method']);
            if(isset($cart_new['add_to_cart'])) {
                if($cart_new['add_to_cart'] == true){
                    $cart->increment('quantity',$cart_new['quantity']);
                }
            }else{
                $cart->update($cart_new);
            }
        } else {
            CartProduct::create($cart_new);
        }   

        return response()->json([
            'success' => true,
            'message' => 'Added to cart successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', '=', $user_id)->get();
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

    protected static function getCart($user_id)
    {
        return DB::table('carts')->where('user_id', '=', $user_id)
            ->leftJoin('cart_product', 'cart_product.cart_id', '=', 'carts.id')
            ->leftJoin('products', 'cart_product.product_id', '=', 'products.id')
            ->select('cart_product.product_id', 'cart_product.quantity', 'products.name', 'products.image', 'products.price')
            ->get();
    }
}
