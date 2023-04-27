<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return response()->json([
            'success' => true,
            'data' => $order,
        ], 200);
    }

    public function indexAutoLoadOrders()
    {
        // $orders = Order::latest();

        $orders = OrderController::getUser()->paginate(16);


        return view('admin.orders.index', compact('orders'));
    }
    public function indexAutoLoad()
    {

        // $orders = Order::where('user_ID','=',Auth::user()->id);

        //check orders and create getOrder to collect data

        $orders = OrderController::getOrder(Auth::user()->id);
        return view('profile.order', compact('orders'));
    }

    public function checkout(Request $request)
    {
        $user_id = Auth::user()->id;

        $order['user_ID'] = $user_id;
        $order['total'] = $request['total'];
        $order['status'] = 0;

        $cart = Cart::where('user_id', '=', $user_id)->get();
        if ($order['total'] != 0) {
            // save order
            $order = Order::create($order);
            $cartProducts = CartProduct::where('cart_ID', '=', $cart[0]->id)->get();
            foreach ($cartProducts as $cartProduct) {
                $orderProduct['order_ID'] = $order['id'];
                $orderProduct['product_ID'] = $cartProduct['product_ID'];
                $orderProduct['quantity'] = $cartProduct['quantity'];

                OrderProduct::create($orderProduct);

                $cartProduct->delete();
            }
        }

        return view('cart.detail', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_ID' => 'required|exists:users,id',
            'total' => 'required|decimal:0,5',
            'status' => 'required|decimal:0,5'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ordering create failed.',
                'error' => $validator->messages()
            ]);
        }
        $order = Order::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $order,
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return response()->json([
            'data' => $order,
        ], 200);
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
        $order = Order::find($request->id);
        $order['status'] = $request->status;
        $order->save();
        return redirect('/admin/orders');
        // return response()->json([
        //     'data' => $order
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
    }

    protected static function getOrder($user_id)
    {
        return DB::table('orders')->where('user_id', '=', $user_id)
            ->leftJoin('order_product', 'order_product.order_id', '=', 'orders.id')
            ->leftJoin('products', 'order_product.product_id', '=', 'products.id')
            ->select('order_product.product_id', 'order_product.quantity', 'order_product.order_ID', 'products.name', 'products.price', 'orders.total', 'orders.status')
            ->get();
    }
    protected static function getUser()
    {
        return DB::table('orders')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.id', 'orders.user_ID', 'orders.total', 'orders.status', 'users.address', 'users.phone');
    }
}
